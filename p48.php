<!DOCTYPE HTML>
<html ng-app="myApp" ng-controller="myTheme">
    <head>
         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <title>Title</title>
            <style>
          * {
                box-sizing: border-box;
                padding: 22px;
                border: 1px solid #ccc;
            }
            div
            {
                width:100%;
                height:700px;
                border:none;
            }
            .default
            {
                background-color: white;
                color:deeppink;
                text-align: center;
            }
            .crimson{
                background-color: crimson;
                color:#fff;
                 text-align: center;
            }
            
            .deeppink{
                background-color:deeppink;
                color:#fff;
                 text-align: center;
            }
            .image{
                background:url('images/frontend1.png');
                color:#2c2c2c;
                 text-align: center;
            }
            
        </style>
    </head>
    <body>
        <select ng-model="selectedTheme" ng-options="x.name for x in theme"></select>
        
        <div class="{{selectedTheme.value}}">
            <h1>Now i have selected the Theme {{selectedTheme.value}} </h1>
        </div>
        
        <script>
            angular.module("myApp",[])
            .controller("myTheme",function($scope){
               $scope.theme = [
                   {
                       name : "defaultTheme",
                       value : "default"
                   },
                   {
                       name : "crimsonTheme",
                       value : "crimson"
                   },
                   {
                       name : "deeppinkTheme",
                       value : "deeppink"
                   },
                   {
                       name : "imageTheme",
                       value : "image"
                   }
               ]; 
            });
        </script>
    </body>
</html>