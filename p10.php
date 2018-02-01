<!DOCTYPE html>  
<html>  
    <title>ng-class-odd Directive</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
<style>  
.striped {  
    color:white;  
    background-color:grey;  
}  
    
    table{
        width:400px;
        height:200px;
    }
    
    table,tr,th,td{
        border:4px solid coral;
        border-collapse: collapse;
        text-align: center;
    }
</style>  
<body ng-app="myApp">  
  <h1>ng-class-odd Directive </h1>
<table ng-controller="myCtrl">  
<tr ng-repeat="x in records" ng-class-odd="'striped'">  
  <td>{{x.Name}}</td>  
  <td>{{x.Country}}</td>  
</tr>  
</table>  
  
<script>  
var app = angular.module("myApp", []);  
app.controller("myCtrl", function($scope) {  
  $scope.records = [  
    {  
      "Name" : "Ajeet Kumar",  
      "Country" : "India"  
    },  
    {  
      "Name" : "Suresh Prabhu",  
      "Country" : "India"  
    },  
    {  
      "Name" : "Donald Trump",  
      "Country" : "USA"  
    },  
    {  
      "Name" : "W Putin",  
      "Country" : "USSR"  
    }  
  ]  
});  
</script>  
</body>  
</html>  
