<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            .div1
            {
                width: 1000px;
                height:300px;
                padding: 10px;
                text-align: justify;
                color:#fff;
                background-color:deeppink;
                border:2px solid black;
                border-radius:10px;
                float: right;
            }
            h1{
                text-align: center;
            }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <form> 
            Check to show this:
            <input type="checkbox" ng-model="myVar">
        </form>
      <div  ng-show="myVar" class="div1">
          <h1>Welcome to Be-Practical Angular</h1>
          <p>This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.This is test para.</p>
      </div>
    </div>
    <script>
        angular.module("myApp",[])
        .controller("myCtrl",function($scope){
             $scope.myVar = true;
        });
    </script>
</body>

</html>
