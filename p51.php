<!DOCTYPE html>
<html>
<head>
<title>

</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<p>this header will change after two seconds </p>

<h1>{{demotxt}}</h1>

</div>

<p>the $timeout service runs a function after specified time</p>

<script>
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$timeout)
{
    $scope.demotxt = "hello world";
    $timeout(function()
    {
        $scope.demotxt = "how are you today ? ";
    },2000);

});
</script>
</body>
</html>

