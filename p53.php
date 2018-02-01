<!DOCTYPE html>
<html>
<head>
<title>
        $location service
</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<p>the url of this page is:</p>

<h1>{{myurl}}</h1>

</div>

<p>this example uses the built in $location service to get the absolute url of the page</p>

<script>
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$location)
{
    $scope.myurl = $location.absUrl();
});
</script>
</body>
</html>