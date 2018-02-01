<!DOCTYPE HTML>
<html>
    <html>
        <title>Program-5</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    </html>
    <body ng-app="myApp"  ng-controller="myCtrl">
       
        <div ng-bind-template="{{first}} {{last}} {{mob}} {{email}}">
            
        </div>
       <script>
        var app = angular.module("myApp",[]);
           app.controller("myCtrl",function($scope)
          {
               $scope.first = "Sudeep";
               $scope.last = "kahatri";
               $scope.mob = "9988774455";
               $scope.email = "sudeep@gmail.com";   
           });
        </script>
    </body> 
</html>