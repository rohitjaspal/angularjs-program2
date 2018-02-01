<!DOCTYPE html>
<html>
    <head>
        <title>Number Filter</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body>

    <div ng-app="myApp" ng-controller="nCtrl">
        <h1>Number Filters</h1>
        <h1> &#8377;{{prize}} </h1>
        <hr>
        <h1> &#8377;{{prize | number}}</h1>
        
        <h1>{{weight | number:2}} kg</h1>
        <hr>
        
        <h1>{{weight | currency}} </h1>
        
        <hr>
        <h2>&#8377; {{val | number :3}} </h2>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('nCtrl', function($scope) {
            $scope.prize = 1000000;
            $scope.weight = 10000;
            $scope.val = 12333.44331;
        });

    </script>
    
</body>

</html>
