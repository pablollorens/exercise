var searchApp = angular.module('searchApp',
    []
);

searchApp.controller('SearchController', ['$scope', '$http',function ($scope, $http) {
    $scope.stores = {};
    $scope.searchQuery = '';
    //$scope.radius = 50;

    $scope.$watch('searchQuery', function() {
        var transform = function(data){
            return $.param(data);
        }

        if ($scope.searchQuery.length > 2) {

            $http.post('/search',
                {
                    city: $scope.searchQuery,
                    radius: $scope.radius,
                    opensunday: $scope.searchSunday
                },
                {
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
                })
                .success(function (data, status) {
                    console.log(data);
                    $scope.stores = data.results;
                })
                .error(function (data, status) {
                    $scope.stores = {};
                });
        } else {
            $scope.stores = {};
        }
    });


}]);
