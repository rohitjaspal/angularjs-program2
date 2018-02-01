<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Number filter </title>
     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
    <h1> Number filter </h1>

    <h2>{{ prize | number }} dollar </h2>

    <h2> {{ weight | number: 2 }} kg </h2>

    <script>
        angular.module("myApp",[])
        .controller("myCtrl",function($scope)
        {
            $scope.prize = 1000000;
            $scope.weight = 10000;
        });
    </script>
</body>
</html>