<!DOCTYPE html>  
<html>  
  <head>
     
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>

<body ng-app="myApp">  
        <div ng-controller="myCtrl">  
        <p>Type something in the input field:</p>  
                <input type="text" ng-change="myFunc()" ng-model="myValue" />  

        <p>The input field has changed <span style="color:red;"> {{ count }} </span> times.</p>  
            <h2>{{myValue}}</h2>
        </div>  
  
<script>  
  var  a = angular.module('myApp', []) ; 
    a.controller('myCtrl', function($scope)
    {  
      $scope.count = 0;  
      $scope.myFunc = function() 
      {  
        $scope.count++;  
      };  
    });  
</script>  
</body>  
</html>  