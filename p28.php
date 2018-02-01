<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
    .card{
        width:400px;
        padding: 23px;
        text-align:justify;
        border:1px solid #ccc;
        margin: 22px;
        box-sizing: border-box;
        font-family:serif;
    }
    select
    {
        height: 30px;
        margin-left:100px;
    }
    label{
        top: 3px;
        margin-top: 10px;
        position:absolute;
    }
        
</style>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <label>Choose Course</label>
        <select ng-model="selectedName" ng-options="x.name for x in names">  
        </select>
        <div class="card">
            <h3>Course name :{{selectedName.name}}</h3>
            <h4>Course Price : {{selectedName.price}}</h4>
            <h4>Course Duration : {{selectedName.duration}}</h4>
        </div>
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) 
        {
            /*$scope.names = ["Java", "PHP", ".Net", "AngularJS", "C/C++"];*/
            $scope.names =[
            {
                name : "Java",
                price : 30000,
                duration: "3months"
            },
            {
                name : "Php",
                price : 20000,
                duration: "2months"
                              
            },
            {
                name : "Angular",
                price : 22000,
                duration: "1month"
            }
            ];
        });

    </script>
</body>
</html>
-----