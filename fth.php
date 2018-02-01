<!DOCTYPE HTML>
<html>
<head>
<title>
    dependency injection - factory
</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
<h1>{{in1}}</h1>
<h1>{{string1}}</h1>
<script>
var myVar = angular.module("myApp",[]);

myVar.value("input1",122);
myVar.value("str1","hi i am rohit");

myVar.controller("myCtrl",function($scope,input1,str1)
{
    $scope.in1 = input1;
    console.log(str1);
    $scope.string1 = str1; 
});
</script>
</body>
</html>