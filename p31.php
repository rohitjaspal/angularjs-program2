<!DOCTYPE html>
<html lang="en">
    <html>
    <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </html>
<body>
    <div ng-app="myApp" ng-controller="formCtrl">
        <form>
            First Name: <input type="text" ng-model="firstname">
        </form>
            {{firstname}}
    </div>
    <script>
        var app = angular.module('myApp', []);
        app.controller('formCtrl', function($scope) {
            $scope.firstname = "Ajeet";
        });

    </script>
</body>

</html>
