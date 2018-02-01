<!DOCTYPE html>
<html>
    <head>
        <title>ng-click-2</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body ng-app="myApp">
    <h1>ng-Click directive</h1>
    <div ng-controller="myCtrl">
        <p>Click the button to execute a function:</p>
        <button ng-click="myFunc()">OK</button>
        <p>The button has been clicked <strong>{{count}}</strong> times.</p>

        <hr>

        <button ng-click="incFunc()">+</button>
                 <input type="number"  value="{{ c }}">
          <button ng-click="decFunc()">-</button>
    </div>
    <script>
        angular.module('myApp', [])
            .controller('myCtrl',  function($scope) {
                $scope.count = 0;
                $scope.c = 0;
                $scope.myFunc = function() {
                    $scope.count++;
                };

                $scope.incFunc = function()
                {
                    $scope.c += 3;
                };
                $scope.decFunc = function()
                {
                    $scope.c-=3;
                };
            });

    </script>
</body>

</html>
