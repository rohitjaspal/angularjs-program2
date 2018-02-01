<!DOCTYPE HTML>
<html>
    <head>
        <title>Menu</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <style>
            ul{
                list-style: none;
            }
            li{
                float: left;
                padding: 13px;
                height: 24px;
                width:50px;
                border: 1px solid red;
                margin: 13px;
                text-align: center;
                color:#fff;
            }
            
            ul li a{
                text-decoration: none;
                cursor: pointer;
                color:red;
            }
            ul li a:hover{
                background-color:blueviolet;
                color:#fff;
            }
        </style>
    </head>
    <body ng-app="menuApp">
        <div ng-controller="menuCtrl">
            <ul>
                <li ng-repeat="x in menu"> <a href="{{x}}.php">{{x}}</a> </li>
            </ul>
        </div>
        <script>
            angular.module('menuApp',[])
            .controller('menuCtrl',function($scope){
                $scope.menu = ['Home','Service','Jobs','Projects','Blogs','Contact']; 
            });
        </script>
    </body>
</html>