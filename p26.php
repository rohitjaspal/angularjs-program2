<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Filters </title>
     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    
</head>
<body ng-app="myApp" ng-controller = "myCtrl">
    <h1>Order By Filter . </h1>
     <!--{{ orderBy_expression | orderBy : expression : reverse }}   -->
        <hr>
        <h3>with filter </h3>
    <ul>
        <li ng-repeat = "x in cars | orderBy "> {{ x }} </li>
    </ul>

    <hr>
       <h3>Without Filter</h3>
    
    <ul>
        <li ng-repeat= "x1 in cars ">{{ x1 }} </li>
    </ul>
    <script>
        angular.module("myApp",[])
        .controller("myCtrl",function($scope){
                $scope.cars = ["Tata","Mahindra","Audi","Volvo","BMW","Ford","Maruthi Suzuki","Isuzu","Toyota"];
        });
    </script>
</body>
</html>