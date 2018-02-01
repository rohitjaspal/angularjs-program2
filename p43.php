<!DOCTYPE html>
<html ng-app="myapp">

<head>
    <title>AngularJS: UI-Router</title>
    <!-- Bootstrap CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
</head>

<body class="container">
    
    <div class="navbar navbar-default">
        <div class="navbar-inner">
            <a class="brand" ui-sref="index">Be-Practical</a>
            <ul class="nav">
                <li>
                    <a ui-sref="index">Home</a>
                </li>
                <li>
                    <a ui-sref="route1">Route 1</a>
                </li>
                <li>
                    <a ui-sref="route2">Route 2</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row">
        <div class="span6">
            <div class="well">
                <h1 ui-view="viewA"> </h1>
            </div>
        </div>
        
        <div class="span6">
            <div class="well">
                <h3 ui-view="viewB"></h3>
            </div>
        </div>
    </div>
    <!-- Angular -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
    <!-- UI-Router -->
    <script src="//angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
    <!-- App Script -->
    <script>
        var myapp = angular.module('myapp', ["ui.router"]);
        myapp.config(function($stateProvider) {
            $stateProvider
                .state('index', {
                    url: "",
                    views: {
                        "viewA": 
                        {
                            template: "we are reading an angular js router"
                        },
                        "viewB": 
                        {
                            template: "index.viewB"
                        }
                    }
                })
                .state('route1', {
                    url: "/route1",
                    views: {
                        "viewA": {
                            template: "route1.viewA"
                        },
                        "viewB": {
                            template: "route1.viewB"
                        }
                    }
                })
                .state('route2', {
                    url: "/route2",
                    views: {
                        "viewA": {
                            template: "route2.viewA"
                        },
                        "viewB": {
                            template: "route2.viewB"
                        }
                    }
                })
        });

    </script>
</body>

</html>
