<?php
use Silex\Application;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/*
 * Uncomment the following when using the built in webserver in php 5.4
 */
//$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
//if (php_sapi_name() === 'cli-server' && is_file($filename)) {
//    return false;
//}

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__.'/../generated-conf/config.php'
));


//Examples
/*$app->get('/', function () {
    $q = new StoreQuery();
    $store = $q->findByCity('Goes');
    echo $store->toJSON();



    return 'Welcome to the excersise';
});*/


$app->get('/', function (Application $app) {
    return $app['twig']->render('search.twig', array());
});

$app->post('/search', function (Application $app, Request $request) {

    $return = array('success' => false, 'results' => array(), 'errors' => '');

    $params = new \Symfony\Component\HttpFoundation\ParameterBag((array) json_decode(file_get_contents('php://input')));

    if ($params->has('city')) {
        $city = $params->get('city');

        $results = array();

        $q = new StoreQuery();
        $stores = $q->filterByCity($city . '%')->find();

        foreach ($stores as $store) {
            $results[$store->getId()] = $store->toArray();
        }

        $return['results'] = $results;

        $return['success'] = true;


    } else {
        $return['success'] = false;
        $return['errors'] = 'No search query given';
    }

    return new \Symfony\Component\HttpFoundation\JsonResponse($return);

});

/*
$app->post('/search', function (Application $app, Request $request) {

    $return = array('success' => false, 'results' => array(), 'errors' => '');

    $params = new \Symfony\Component\HttpFoundation\ParameterBag((array) json_decode(file_get_contents('php://input')));

    if ($params->has('city')) {
        $city = $params->get('city');

        $results = array();

        $q = new StoreQuery();
        $stores = $q->filterByCity($city . '%')->orderByCity()->find();

        foreach ($stores as $store) {
            $results[$store->getId()] = $store->toArray();
        }

        if ($params->has('radius') && $params->getInt('radius')) {
            $q = new StoreQuery();
            $stores = $q->orderByCity()->find();

            $coordinates = Tidi\SearchEngine\GeoCoder\GeoCoder::getLocation($city);

            foreach ($stores as $store) {
                $distance = \Tidi\SearchEngine\GeoCoder\Distance::calculateDistance($coordinates['lat'], $coordinates['lng'], $store->getLatitude(), $store->getLongitude());
                if ($distance <= $params->getInt('radius')) {

                    $results[$store->getId()] = $store->toArray();
                    $results[$store->getId()]['Distance'] = $distance;
                }
            }
        }

        $return['results'] = $results;

        $return['success'] = true;


    } else {
        $return['success'] = false;
        $return['errors'] = 'No search query given';
    }

    return new \Symfony\Component\HttpFoundation\JsonResponse($return);

});
*/

$app->run();
