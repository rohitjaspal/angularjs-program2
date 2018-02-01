<!DOCTYPE html>
<html>

<head>
    <title>ng-click </title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body ng-app="">
    <h1>ng-click</h1>
    <p>Click the button:</p>
    
    <button ng-click="count = count + 5" ng-init="count=0">OK</button>
    
    <p>The button has been clicked <strong>{{count}} </strong>times.</p>

    <p><strong>Note:</strong>This example counts a value every time you click on the button and increase the value of the variable.</p>
</body>

</html>
