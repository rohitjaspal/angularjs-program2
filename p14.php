<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ng-copy directive</title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
</head>

<body ng-app="">
    <h1>ng-copy Directive</h1>
    <input ng-copy="copied=true" ng-init="copied=false; value='copy me'" ng-model="value"> copied: {{copied}}

    <p><strong>Note:</strong> By default value of this example is false. When you copy the text within the input field, it will be true.</p>
</body>

</html>
