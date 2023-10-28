// cart
var app = angular.module('formvalidation', []);
app.controller('cntform', function ($scope) {
    $scope.valid = false;
    $scope.submit = function () {
        $scope.valid = true;
    }
    $scope.close = function () {
        $scope.valid = false;
    }
});