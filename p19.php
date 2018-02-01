<!DOCTYPE html>
<html>
    <head>
        <title>Limit To Filters</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body>

    <div ng-app="myApp" ng-controller="sizeCtrl">

        <p>It displays only the first 3 cars because limit is 3 (positive).</p>
        <ul>
            <li ng-repeat="x in cars | limitTo : 3">{{x}}</li>
        </ul>

        <p>It displays only the last 3 cars because limit is -3 (negative).</p>
        <ul>
            <li ng-repeat="x in cars | limitTo : -3">{{x}}</li>
        </ul>
        
        <select>
            <option ng-repeat="x in cars | limitTo : -3"> {{x}} </option>
        </select>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('sizeCtrl', function($scope) {
            $scope.cars = ["Audi", "BMW", "Tata", "Mahindra", "Ford", "Volvo"];
        });

    </script>
</body>

</html>
