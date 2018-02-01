<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<body>

    <div ng-app="myApp" ng-controller="caseCtrl">
        <p>The following text is written in lowercase letters.</p>
        <h3>Before Lowercase filter : {{txt}}</h3>
        
        <h3>{{txt | lowercase}}</h3>
        
        <hr>
         <h3>Before Upppercase filter : {{txt1}}</h3>
        <h4> {{ txt1 | uppercase }}</h4>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('caseCtrl', function($scope) 
        {
            $scope.txt = "WELCOME TO BE-PRACTICAL!";
            $scope.txt1  = "welcome to be-practical";
        });

    </script>
</body>

</html>
