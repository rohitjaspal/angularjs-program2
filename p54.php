<!DOCTYPE html>
<html>
<head>
<title>
    Custom service
</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>
<div ng-app="myApp" ng-controller="myCtrl">

<p>the hexadeximal value of the input is:</p>

<h1>{{hex}}</h1>
<h2>{{res}}</h2>

</div>

<p>a custom service with a method that converts a given number into a hexadecimal number </p>


<script>
var app = angular.module('myApp',[]);
app.service('service1', function()
{
    this.myfunc = function(x)
    {
        return x.toString(16);
    };
    this.area = function(a,b)
    {
        return a * b;
    };
});

app.controller('myCtrl',function($scope,service1)
    {
        $scope.hex =  service1.myfunc(245);
        $scope.res =  service1.area(12,15);
    });
</script>
</body>
</html>