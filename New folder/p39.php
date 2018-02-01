<!DOCTYPE html>
<html>

<head>
    <title>Angular JS Includes</title>
     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <style>
        table{
            width:800px;
            height:300px;
            text-align: center;
        }
        table,
        th,
        td 
        {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
            color:#000;
        }

        table tr:nth-child(odd) 
        {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #ffffff;
        }

    </style>
</head>

<body>
    <h2>AngularJS Sample Application</h2>
    <div ng-app="myApp" ng-controller="employeeController">

        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>

            <tr ng-repeat="employee in employees">
                <td>{{ employee.name }}</td>
                <td>{{ employee.age }}</td>
                <td>{{ employee.salary }}</td>
            </tr>
        </table>
    </div>

    <script>
      /*  function employeeController($scope, $http) {
            var url = "asset/info.json";

            $http.get(url).success(function(response) {
                $scope.employees = response;
            });
        }
        */
        angular.module("myApp",[])
        .controller("employeeController",function($scope,$http){
            var url  = "/info.json";
         
            $http.get(url).success(function(response)
            {
                
                $scope.employees = response; 
            });
        });

    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>

</body>

</html>
