<!DOCTYPE HTML>
<html ng-app="myApp" ng-controller="formController">

<head>
    <title></title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
</head>

<body>
    <div>
        <form name="form" class="css-form" novalidate>
            <label>Name:</label><br>
      <input type="text" ng-model="user.name" name="uName" required="" />
            <br/>
           <!--
            <div ng-show="form.uName.$dirty && form.uName.$invalid">
                <div ng-show="form.uName.$error.required">Tell us your name.</div>
            </div>
-->
            <label>E-mail:</label><br>
      <input type="email" ng-model="user.email" name="uEmail" required="" />
            <br>
            <!--<br />
            <div ng-show="form.$submitted || form.uEmail.$touched">
                <span ng-show="form.uEmail.$error.required">Tell us your email.</span>
                <span ng-show="form.uEmail.$error.email">This is not a valid email.</span>
            </div>-->

            Gender:
            <label><input type="radio" ng-model="user.gender" value="male" />male</label>
            <label><input type="radio" ng-model="user.gender" value="female" />female</label>
            <br />
            <label>
            <input type="checkbox" ng-model="user.agree" name="userAgree" required="" />
    I agree:
    </label>
            <input ng-show="user.agree" type="text" ng-model="user.agreeSign" required="" />
            <!--<br />
            <div ng-show="form.$submitted || form.userAgree.$touched">
                <div ng-show="!user.agree || !user.agreeSign">Please agree and sign.</div>
            </div>-->

            <input type="submit" ng-click="update(user)" value="Save" />
        </form>
        <pre>user = {{user | json}}</pre>
        <pre>master = {{master | json}}</pre>
    </div>

    <script>
        angular.module('myApp', [])
            .controller('formController', ['$scope', function($scope) {
                $scope.master = {};

                $scope.update = function(user) 
                {
                    $scope.master = angular.copy(user);
                };

            }]);

    </script>
</body>

</html>
