<?php

namespace Base;

use \Store as ChildStore;
use \StoreQuery as ChildStoreQuery;
use \Exception;
use \PDO;
use Map\StoreTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'store' table.
 *
 *
 *
 * @method     ChildStoreQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildStoreQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildStoreQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     ChildStoreQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     ChildStoreQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ChildStoreQuery orderByPostalcode($order = Criteria::ASC) Order by the postalcode column
 * @method     ChildStoreQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildStoreQuery orderByIsOpenOnSunday($order = Criteria::ASC) Order by the is_open_on_sunday column
 *
 * @method     ChildStoreQuery groupById() Group by the id column
 * @method     ChildStoreQuery groupByName() Group by the name column
 * @method     ChildStoreQuery groupByLatitude() Group by the latitude column
 * @method     ChildStoreQuery groupByLongitude() Group by the longitude column
 * @method     ChildStoreQuery groupByAddress() Group by the address column
 * @method     ChildStoreQuery groupByPostalcode() Group by the postalcode column
 * @method     ChildStoreQuery groupByCity() Group by the city column
 * @method     ChildStoreQuery groupByIsOpenOnSunday() Group by the is_open_on_sunday column
 *
 * @method     ChildStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStore findOne(ConnectionInterface $con = null) Return the first ChildStore matching the query
 * @method     ChildStore findOneOrCreate(ConnectionInterface $con = null) Return the first ChildStore matching the query, or a new ChildStore object populated from the query conditions when no match is found
 *
 * @method     ChildStore findOneById(int $id) Return the first ChildStore filtered by the id column
 * @method     ChildStore findOneByName(string $name) Return the first ChildStore filtered by the name column
 * @method     ChildStore findOneByLatitude(double $latitude) Return the first ChildStore filtered by the latitude column
 * @method     ChildStore findOneByLongitude(double $longitude) Return the first ChildStore filtered by the longitude column
 * @method     ChildStore findOneByAddress(string $address) Return the first ChildStore filtered by the address column
 * @method     ChildStore findOneByPostalcode(string $postalcode) Return the first ChildStore filtered by the postalcode column
 * @method     ChildStore findOneByCity(string $city) Return the first ChildStore filtered by the city column
 * @method     ChildStore findOneByIsOpenOnSunday(int $is_open_on_sunday) Return the first ChildStore filtered by the is_open_on_sunday column *

 * @method     ChildStore requirePk($key, ConnectionInterface $con = null) Return the ChildStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOne(ConnectionInterface $con = null) Return the first ChildStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStore requireOneById(int $id) Return the first ChildStore filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByName(string $name) Return the first ChildStore filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByLatitude(double $latitude) Return the first ChildStore filtered by the latitude column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByLongitude(double $longitude) Return the first ChildStore filtered by the longitude column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByAddress(string $address) Return the first ChildStore filtered by the address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByPostalcode(string $postalcode) Return the first ChildStore filtered by the postalcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByCity(string $city) Return the first ChildStore filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStore requireOneByIsOpenOnSunday(int $is_open_on_sunday) Return the first ChildStore filtered by the is_open_on_sunday column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStore[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildStore objects based on current ModelCriteria
 * @method     ChildStore[]|ObjectCollection findById(int $id) Return ChildStore objects filtered by the id column
 * @method     ChildStore[]|ObjectCollection findByName(string $name) Return ChildStore objects filtered by the name column
 * @method     ChildStore[]|ObjectCollection findByLatitude(double $latitude) Return ChildStore objects filtered by the latitude column
 * @method     ChildStore[]|ObjectCollection findByLongitude(double $longitude) Return ChildStore objects filtered by the longitude column
 * @method     ChildStore[]|ObjectCollection findByAddress(string $address) Return ChildStore objects filtered by the address column
 * @method     ChildStore[]|ObjectCollection findByPostalcode(string $postalcode) Return ChildStore objects filtered by the postalcode column
 * @method     ChildStore[]|ObjectCollection findByCity(string $city) Return ChildStore objects filtered by the city column
 * @method     ChildStore[]|ObjectCollection findByIsOpenOnSunday(int $is_open_on_sunday) Return ChildStore objects filtered by the is_open_on_sunday column
 * @method     ChildStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class StoreQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\StoreQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'searchengine', $modelName = '\\Store', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStoreQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildStoreQuery) {
            return $criteria;
        }
        $query = new ChildStoreQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildStore|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StoreTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(StoreTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, latitude, longitude, address, postalcode, city, is_open_on_sunday FROM store WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildStore $obj */
            $obj = new ChildStore();
            $obj->hydrate($row);
            StoreTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildStore|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StoreTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StoreTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StoreTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StoreTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the latitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitude(1234); // WHERE latitude = 1234
     * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
     * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
     * </code>
     *
     * @param     mixed $latitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByLatitude($latitude = null, $comparison = null)
    {
        if (is_array($latitude)) {
            $useMinMax = false;
            if (isset($latitude['min'])) {
                $this->addUsingAlias(StoreTableMap::COL_LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitude['max'])) {
                $this->addUsingAlias(StoreTableMap::COL_LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_LATITUDE, $latitude, $comparison);
    }

    /**
     * Filter the query on the longitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitude(1234); // WHERE longitude = 1234
     * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
     * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
     * </code>
     *
     * @param     mixed $longitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByLongitude($longitude = null, $comparison = null)
    {
        if (is_array($longitude)) {
            $useMinMax = false;
            if (isset($longitude['min'])) {
                $this->addUsingAlias(StoreTableMap::COL_LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitude['max'])) {
                $this->addUsingAlias(StoreTableMap::COL_LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_LONGITUDE, $longitude, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the postalcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostalcode('fooValue');   // WHERE postalcode = 'fooValue'
     * $query->filterByPostalcode('%fooValue%'); // WHERE postalcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postalcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByPostalcode($postalcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postalcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postalcode)) {
                $postalcode = str_replace('*', '%', $postalcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_POSTALCODE, $postalcode, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the is_open_on_sunday column
     *
     * @param     mixed $isOpenOnSunday The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function filterByIsOpenOnSunday($isOpenOnSunday = null, $comparison = null)
    {
        $valueSet = StoreTableMap::getValueSet(StoreTableMap::COL_IS_OPEN_ON_SUNDAY);
        if (is_scalar($isOpenOnSunday)) {
            if (!in_array($isOpenOnSunday, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $isOpenOnSunday));
            }
            $isOpenOnSunday = array_search($isOpenOnSunday, $valueSet);
        } elseif (is_array($isOpenOnSunday)) {
            $convertedValues = array();
            foreach ($isOpenOnSunday as $value) {
                if (!in_array($value, $valueSet)) {
                    throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $value));
                }
                $convertedValues []= array_search($value, $valueSet);
            }
            $isOpenOnSunday = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StoreTableMap::COL_IS_OPEN_ON_SUNDAY, $isOpenOnSunday, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildStore $store Object to remove from the list of results
     *
     * @return $this|ChildStoreQuery The current query, for fluid interface
     */
    public function prune($store = null)
    {
        if ($store) {
            $this->addUsingAlias(StoreTableMap::COL_ID, $store->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StoreTableMap::clearInstancePool();
            StoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // StoreQuery
