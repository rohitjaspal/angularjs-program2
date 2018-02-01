<!DOCTYPE HTML>
<html>

<head>
    <title>Angular with Php MySql</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <!--Css stylesheet-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body ng-app="myApp" ng-controller="customersCtrl">
    <div class="w3-container">
        <header class="w3-container w3-blue">
            <h1 class="w3-center">Angular Php MySql </h1>
        </header>
        <div class="w3-row">
            <form>
                <input type="number" ng-model="num">
            </form>
            <p>{{num}}</p>
        </div>
        <div class="w3-container w3-light-grey w3-padding-16 w3-responsive">
            <table class="w3-table-all w3-border w3-centered">
                <tr class="w3-green">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>IpAddress</th>
                    <th>RegisterDate</th>
                    <th>RegisterTime</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.id}} </td>
                    <td> {{x.username}} </td>
                    <td> {{x.password}} </td>
                    <td> {{x.ipaddress}} </td>
                    <td> {{x.registerdate}} </td>
                    <td> {{x.registertime}} </td>
                </tr>

            </table>
        </div>
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
            
            //$scope.key = 5;
            $http.get("genresponse.php")
                .then(function(response) 
                {
                    $scope.names = response.data.records;
                });
        });

    </script>
</body>

</html>
