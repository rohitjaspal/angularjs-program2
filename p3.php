<!DOCTYPE HTML>
<html>
    <html>
        <title>Program-1</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    </html>
    <body>
              
        <div ng-app="" ng-init="myCol='#F5F5F5';wid='200px';hig='100px';">  
            <input style="background-color:{{myCol}};width:{{wid}};height:{{hig}};" ng-model="myCol" value="{{myCol}}">  
        </div>  
    </body> 
</html>