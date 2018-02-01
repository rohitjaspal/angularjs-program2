<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="sizeCtrl">
<h1>limit to Filter</h1>
    <p>It displays only the first 3 cars because limit is 3</p>

    <ul>
        <li ng-repeat = "x in cars | limitTo : 3"> {{ x }} </li>
    </ul>

    <p>It displays only last 2 cars </p>

    <ul>
        <li ng-repeat= "y in cars | limitTo : -2"> {{ y }} </li>
    </ul>

    <script>
        var app = angular.module('myApp', []);  
                app.controller('sizeCtrl', function($scope) {  
                 $scope.cars = ["Audi", "BMW", "Tata", "Mahindra", "Ford", "Volvo"];  
                });  
    </script>
</body>
</html>