<!--Todo list project-->
<!DOCTYPE HTML>
<html>

<head>
    <title>To Do List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<!--Css stylesheet-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body ng-app="toDoList" ng-controller="todolistController">
    <div ng-cloak class="w3-card-4 w3-margin" style="max-width:400px;">
        <header class="w3-container w3-blue w3-padding-16">
            <h1 class="w3-center w3-text-white">My Products List</h1>
        </header>
        <ul class="w3-ul">
            <li ng-repeat="x in products" class="w3-padding-16"> {{x}} 
                <span style="cursor:pointer;" class="w3-right w3-margin-right" ng-click="removeItem($index)"><i class="fa fa-close w3-text-red" title="Delete"></i></span> 
            </li>
        </ul>
        
    <div class="w3-container w3-light-grey w3-padding-16">
        <div class="w3-row w3-margin-top">
            <div class="w3-col s10">
                <input type="text" placeholder="Add Items Here" ng-model="addMe" class="w3-input w3-border w3-paddding">
            </div>
            <div class="w3-col s2">
                <button ng-click="addItem()" class="w3-btn w3-padding w3-blue">Add</button>
            </div>
        </div>
        <div class="w3-col s8" id="error_txt">
            <p class="w3-text-red">{{errorTxt}} </p>
        </div>
    </div>
        
    </div>
    <script>
        angular.module("toDoList", [])
            .controller("todolistController", function($scope) {
                $scope.products = ["Cement", "Iron", "Sand", "Bricks"];
                /*adding item */
                $scope.addItem = function() 
                {
                    $scope.errorTxt = "";
                    if (!$scope.addMe) 
                    {
                        return;
                    }
                    if ($scope.products.indexOf($scope.addMe) == -1) 
                    {
                        $scope.products.push($scope.addMe);
                    } 
                    else 
                    {
                        $scope.errorTxt = "This item is already in your list";
                        $scope.addMe = "";
                        setTimeout(function(){
                            document.getElementById("error_txt").style.visibility = "hidden";
                        },2000);
                    }
                };
                /*removing item*/
                $scope.removeItem = function(x) {
                    $scope.errorTxt = "";
                    $scope.products.splice(x, 1);
                };
            });
    </script>
</body>

</html>