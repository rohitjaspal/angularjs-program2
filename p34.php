<!DOCTYPE html>
<html>
    <head>
        <title>program 34</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <style>
            .div1{
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
    </head>
<body ng-app="">
    <form>
        Pick a topic:
        <input type="radio" ng-model="myVar" value="tuts">Tutorials
        <input type="radio" ng-model="myVar" value="fest">Festivals
        <input type="radio" ng-model="myVar" value="news">News
    </form>
    <div ng-switch="myVar">
        
        <div ng-switch-when="tuts" class="div1">
            <h1>Tutorials</h1>
            <p>Welcome to the best tutorials over the net</p>
        </div>
        
        <div ng-switch-when="fest" class="div1">
            <h1>Festivals</h1>
            <p>Most famous festivals</p>
        </div>
        
        <div ng-switch-when="news" class="div1">
            <h1>News</h1>
            <p>Welcome to the news portal.</p>
        </div>
    </div>
   
</body>

</html>
