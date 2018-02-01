<!DOCTYPE html>  
<html>  
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>
<body ng-app="">  
<p>Courses offered:</p>  
        <input type="checkbox" ng-model="all1"> Check all<br><br>  
       
        <input type="checkbox" ng-checked="all1">Java<br>  
        <input type="checkbox" ng-checked="all1">Oracle<br>  
        <input type="checkbox" ng-checked="all1">C/C++<br>  
        <input type="checkbox" ng-checked="all1">.NET<br>  
        <input type="checkbox" ng-checked="all1">SQT<br>  
        <input type="checkbox" ng-checked="all1">Hadoop<br>  
        <input type="checkbox" ng-checked="all1">PHP  
        
<p>Click "Check all" to select all courses.</p>  
</body>  
</html>  