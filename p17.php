<!DOCTYPE html>
<html>

<head>
    <title>The filter Filter</title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body>
    <div ng-app="myApp" ng-controller="namesCtrl">
        <ul>
            <li ng-repeat="x in names | filter : 'Mr' ">
                {{ x }}
            </li>
        </ul>

        <hr>

        <table border="1">
            <tr>
                <th>Name</th>
            </tr>
            <tr ng-repeat="x in names | filter : 'Mr'">
                <td>
                    {{ x }}
                </td>
            </tr>
        </table>

        <hr>

        <select>
            <option value="0">Select Name</option>
            <option ng-repeat="x in names | filter :'Mr' "> {{x}} </option>
        </select>
        
        <hr>
        
        <ol>
            <li ng-repeat="y in course | filter: 'H' "> {{y}} </li>
        </ol>
        
        <pre> {{ names | json }} </pre>
    </div>

    <script>
        angular.module('myApp', [])
    .controller('namesCtrl', function($scope) {
            $scope.names = [
                'Mr Aryan',
                'Mr Ajeet',
                'Mr Sonoo',
                'Ginni',
                'Mr Joe',
                'Lily',
                'Lucy',
                'Mary',
                'Mr Kali'
            ];
            $scope.course = ['Php','Javascript','Html','Css','Css3','Jquery'];
        });

    </script>
    <p>This example displays only the names containing the letter "a".</p>
</body>

</html>
