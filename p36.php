<!DOCTYPE HTML>
<html>

<head>
    <title>Be-Practical</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <style>
            .btn-center
            {
                margin:0px;
                text-align: center;
                align-self: center;
            }
            .panel .panel-primary
            {
                border:none;
            }
            *{
                box-sizing: border-box;
                padding:2px;
             }
        </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body ng-app="">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Be-Practical</h1>
                </div>
                <div class="panel-body">
                    <div class="col-sm-4">
                        <input type="radio" ng-model="myVar" value="login"> Login
                        <input type="radio" ng-model="myVar" value="signup"> Sign Up

                    </div>
                    <div class="col-sm-4">
                        <div ng-switch="myVar">
                            <div class="panel panel-success" ng-switch-when="login">
                                <div class="panel-heading">
                                    <h1 class="text-center">Login</h1>
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="login.php">
                                        <div class="form-group">
                                            <label for="user">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="pass">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="submit" class="btn btn-primary" value="Login" name="login">
                                            <input type="button" class="btn btn-primary" value="Forgot password" name="forget password">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-success" ng-switch-when="signup">
                                <div class="panel-heading">
                                    <h1 class="text-center">Signup</h1>
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="register.php">
                                        <div class="form-group">
                                            <label for="user">Username</label>
                                            <input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="pass">Password</label>
                                            <input type="password" class="form-control" name="pass" placeholder="Password" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="submit" class="btn btn-danger" value="Signup">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
