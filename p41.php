<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
        
        <h1> {{title}} </h1>
        
        <ul >
            <li ng-repeat="x in employee">{{x.id}} {{x.name}} </li>
        </ul>
        
        <table border="1">
            <tr ng-repeat="x in employee">
                <td> {{x.id}} </td>
                <td>{{x.name}} </td>
            </tr>
        </table>
        
        <select>
            <option ng-repeat="x in employee"> {{x.name}} </option>
        </select>
        
        <script>
            angular.module("myApp",[])
            .controller("myCtrl",function($scope){
                $scope.title = "Hi welcome to Angualr";
                
                $scope.employee = [
                            {
                                "id":'01',
                                "name":"Ganesh"        
                            },
                            {
                                "id":'02',
                                "name":"Mallikarjun"        
                            }                         
                ];
            });
        </script>
    </body>
</html>