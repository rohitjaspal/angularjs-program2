<!DOCTYPE html>  
<html>  
    <head>
        <title>Date Filter</title>
            <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
        <style>
            strong
            {
                color:coral;
            }
            
        </style>
    </head>
<body>  
  
<div ng-app="myApp" ng-controller="datCtrl">  
    
    <h1>Date Filter</h1>
  
<p><strong>The following date format is the by default date format.</strong> </p>  
<p>Date = {{ today | date }}</p>  
  
<p><strong>You can write the date in many different formats.</strong></p>  
<p>Date = {{ today | date : "dd.MM.y" }}</p>  
  
<p><strong>You can use predefinted formats when displaying a date.</strong></p>  
<p>Date = {{ today | date : "fullDate" }}</p>  
  
<p><strong>This is another format.</strong></p>  
<p>Date = {{ today | date : "'today is =' MMMM d, y" }}</p>  
  
</div>  
    
<script>  
var app = angular.module('myApp', []);  
app.controller('datCtrl', function($scope) {  
    $scope.today = new Date();  
});  
</script>  
</body>  
</html>