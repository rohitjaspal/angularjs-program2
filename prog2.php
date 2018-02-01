<!DOCTYPE HTML>
<html>
    <head>
        <title>Dependancy Injection - Factory</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
      <h1> {{myTitle}} </h1>
        <h1>MY name is {{str1}}</h1>
        
        <h2> Course Name : {{c.name}} </h2>
        <h2> Course Duration : {{c.duration}} </h2>
        <h2> Course Fee : {{c.fee}} </h2>
        
        <hr>
        
           
    <script>
        var myVar = angular.module("myApp",[]);
             
            myVar.factory("display",function()
            {
                var a = prompt("Enter the user input1?");
                var b = prompt("Enter the user input2?");
                return a*b;
            });
            
            myVar.value("person","Rohith");
            
            myVar.value("course",
            {
                    name:"Javascript",
                    duration:"2 months",
                    fee:"12000 Rs"
            },
            {
                    name:"HTML-4 and 5",
                    duration:"1 months",
                    fee:"13560 Rs"
            },
            {
                    name:"Jquery",
                    duration:"1.5 months",
                    fee:"11500 Rs"
            }
            );
        
            myVar.controller("myCtrl",function($scope,display,person,course)
            {   
                    $scope.myTitle = display;
                    $scope.str1 = person;
                    $scope.c = course;
                    
            });
        </script>
    </body>
</html>