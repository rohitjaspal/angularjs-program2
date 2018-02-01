<!DOCTYPE HTML>
<html lang="en" ng-app="">
    <head>
        <title>JSON Form</title>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    </head>
    <body>
        <div ng-controller="theController">
            <form>
                <label>Name:</label>
                <input type="text" ng-model="person.name"/><br>
                
                <label>Profession:</label>
                <input type="text" ng-model="person.job"><br>
                <label>Gender:</label>
                
                <input type="radio" value="male" ng-model="person.gender"/>Male
                <input type="radio" value="female" ng-model="person.gender"/>Female
            </form><br>
                <p>{{person}}</p>
        </div>
        
    </body>
        <script>
    function theController($scope) 
        {
            $scope.update = angular.copy.person;
        }
    </script>
</html>