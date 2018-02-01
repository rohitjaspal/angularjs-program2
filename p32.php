<!DOCTYPE html>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
    <div ng-app="">
        <form>
            First Name: <input type="text" ng-model="firstname">
        </form>
        <h2>You entered: {{firstname}}</h2>
    </div>
    <p>Change the name inside the input field, and you will see the name in the header changes accordingly.</p>
</body>

</html>
