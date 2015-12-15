var app = angular.module('testapi', []);

var mbCtrl = function($scope, $http, $resource) {

  $http.get("services.php?brand=btctoyou").then(function(response) {
    $scope.btctoyou = response.data;
  });

  $http.get("services.php?brand=mtc").then(function(response) {
    $scope.mtc = response.data;
  });





}

app.controller("mbCtrl", ["$scope", "$http", mbCtrl]);
