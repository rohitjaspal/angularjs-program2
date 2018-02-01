<!DOCTYPE html>
<html>
<head>
<title>

</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<p>the time is:</p>

<h1>{{thetime}}</h1>

</div>

<p>the $interval service runs a function after every specified time</p>

<script>
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$interval)
{
    $scope.thetime = new Date().toLocaleTimeString();
    $interval(function ()
    {
        $scope.thetime = new Date().toLocaleTimeString();
    },1000);

});
</script>
</body>
</html>