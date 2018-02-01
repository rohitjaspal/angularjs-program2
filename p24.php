<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">
<h3> Case filter directive </h3>
<hr>
    <h1>{{ txt | uppercase }} </h1>
   <!-- <h1>{{ txt1 | uppercase }} </h1>-->
    
    <button ng-click="upper()" >Uppercase</button>

    <script>
        angular.module("myApp",[])
        .controller("myCtrl",function($scope){
                //$scope.txt = "HI THIS IS LOWERCASE ";
                
            $scope.upper = function()
                            {
                                 var a = prompt("Enter lowercase Input?");
                                 $scope.txt = a;
                            };
            
                $scope.txt1 = "hi this is uppercase ";
        });
    </script>
</body>
</html>