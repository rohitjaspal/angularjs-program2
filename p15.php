<!DOCTYPE html>
<html>
    <head>
        <title>Angualr Filters ( currency )</title>
            <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body  ng-app="myApp">
    <div ng-controller="costCtrl">
        <h1>{{ price | currency }}</h1>
        <h1>Price: &#8377;   {{ price | number:4 }}</h1>
        
        <h1>Dollar: {{ price | currency }}</h1>
    </div>
    
    <div ng-controller="varCtrl">
        <h3>{{myValue}} </h3>
    </div>
    
    <script>
        var app = angular.module('myApp', []);
        
        app.controller('costCtrl', function($scope)
        {
            $scope.price = 60;
        });
        
        app.controller('varCtrl',function($scope){
            $scope.myValue = "Hi i am passing 2nd controller"; 
        });

    </script>
   
</body>

</html>
