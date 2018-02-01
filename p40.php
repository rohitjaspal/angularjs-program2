<!DOCTYPE html>
<html>
<style>
    div {
        transition: all linear 0.5s;
        background-color: lightblue;
        height: 100px;
        width: 100%;
        position: relative;
        top: 0;
        left: 0;
        border:1px solid black;
        border-radius:10px;
    }

    .ng-hide {
        height: 0;
        width: 0;
        background-color: transparent;
        top: -200px;
        left: 200px;
    }

</style>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>

<body ng-app="ngAnimate">
    <h1>Hide the DIV: <input type="checkbox" ng-model="myCheck"></h1>
    <div ng-show="myCheck">
        <h1><center>Welcome to Be-Prcatical</center></h1>
    </div>
</body>

</html>
