<!DOCTYPE HTML>
<html>
    <html>
        <title>Program-1</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    </html>
    <body>
        <div ng-app="" ng-init="first=''">
            <label>Enter Name:</label>
            <input type="text" ng-model="first">
            <h2>My first name: {{first}}</h2>
            <h3 ng-bind="first"></h3>
        </div>
    </body> 
</html>