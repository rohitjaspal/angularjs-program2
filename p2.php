<!DOCTYPE HTML>
<html>
    <html>
        <title>Program-1</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    </html>
    <body>
        <div ng-app="" ng-init="">
            <label>Enter Length</label>
            <input type="number" ng-model="length">
            <h2>My Length: {{ length }}</h2>
            
             <label>Enter width:</label>
            <input type="number" ng-model="width">
            <h2>My Width: {{ width }}</h2>
            
            <hr>
            <h3>Area of Rectangle : {{ length * width }}</h3>
        </div>
    </body> 
</html>