<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Filter </title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
    <h1>JSON Filter </h1>

    <pre>{{ customer | json:50 }} </pre> <!-- {{ json_expression | json : left spacing}}   -->
    
    <ul>
        <li ng-repeat="x in customer"> {{x.name}}  {{x.city}} {{x.country}} </li>
    </ul>
    
    <select ng-model="selIn" ng-options="x.name for x in customer"></select>
    
    <h1>{{selIn.name}} </h1>
    <h3>{{selIn.city}} </h3>
    <h4>{{selIn.country}} </h4>
    
    <script>    
        var a = angular.module("myApp",[]);
        a.controller("myCtrl",function($scope)
        {
            $scope.customer = [
            {
                 "name" : "Harish Kumar",
                 "city" : "Bengaluru",
                 "country": "india"
            },
             {
                 "name" : "Girish Kumar",
                 "city" : "Mangaluru",
                 "country": "india"
            },
             {
                 "name" : "Rajesh Kumar",
                 "city" : "Davanagere",
                 "country": "india"
            }];
        });
    </script>
</body>
</html>