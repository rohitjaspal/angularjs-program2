<!DOCTYPE html>
<html>
    <head>
        <title>Json Filter</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body>
    <div ng-app="myApp" ng-controller="jsCtrl">

        <h1>Car names in JSON Format:</h1>
            <pre>{{ cars | json }}</pre>
        <hr>
        <pre>{{ color | json }}</pre>
        <hr>
        <pre>{{ person | json }}</pre>
        
        <hr>
        
        <ul>
            <li ng-repeat="x in person"> {{ x.name }} {{x.mobile}} </li>
        </ul>
    </div>
    <script>
        var app = angular.module('myApp', []);              //object app created.(angular.module is keyword in angular,[] is empty array)
        app.controller('jsCtrl', function($scope) 
        {
            $scope.cars = ["Audi","BMW","Ford"];
            
            $scope.person = [
                {
                    name : 'Ganesh',
                    mobile : '9988774455'
                },
                {
                    name : 'Divya',
                    mobile: '8877445566'
                },
                {
                    name : 'Naveena',
                    mobile: '5566112233'
                }
            ];
            
            $scope.color = ["Blue","Red","Green","Gray"];
        });

    </script>   
</body>
</html>
