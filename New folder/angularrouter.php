<!DOCTYPE HTML>
    <html>
        <head>
            <title>
                angularrouter
            </title>
                <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
        <body ng-app="myApp" ng-controller="myCtrl">
            <h1>{{name}} owns a {{car}} car of {{color}} color </h1>
    <script>
        var app = angular.module("myApp",[]);
        app.controller('myCtrl',function($scope){
            $scope.name = "rohit jaspal";
            $scope.car = "alto";
            $scope.color = "white";
        });
    </script>
    </body>
    </html>      


    