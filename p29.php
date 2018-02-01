<!DOCTYPE html>
<html>
 <head>
     <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <p>Select a car:</p>
        <select ng-model="selectedCar" ng-options="x.model for x in cars">  
</select>
        <h1>You selected: {{selectedCar.model}}</h1>
        <p>It's color is: {{selectedCar.color}}</p>
        <strong>Manufacture Year {{ selectedCar.year}} </strong>
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.cars = [
                {
                    model: "Ford",
                    color: "red",
                    year : 2016
                },
                {
                    model: "Honda",
                    color: "white",
                    year : 2017
                },
                {
                    model: "Volvo",
                    color: "black",
                    year : 2016,
                },
                {
                    model: "Hundai",
                    color: "gray",
                    year : 2014
                }
            ];

        });

    </script>
</body>

</html>
