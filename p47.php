<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
     <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 300px;
        }

        div.gallery:hover {
            border: 1px solid #777;
            box-shadow: 2px 1px 2px 1px rgba(0, 2, 2,0.5);
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
    
  <!--  <select ng-model="selMobile" ng-options="y.name for y in product.info"></select>
    
    
    <div class="gallery">
           <a target="_blank" href="{{pro.image}}">
                <img src="{{selMobile.image}} " alt="" width="400" height="250">
            </a>
        <div class="desc">
            <h2><span style="color:green;">Name : </span> {{selMobile.name }} </h2>
            <h3><span style="color:red;">Model :</span>{{selMobile.model}} </h3>
            <h4><span style="color:crimson;">Price :</span>&#8377; {{selMobile.price | number:3 }} </h4>
    </div>
    </div>-->
    
    <div class="gallery" ng-repeat="pro in product.info">
           <a target="_blank" href="{{pro.image}}">
                <img src="{{pro.image}} " alt="" width="400" height="250">
            </a>
        <div class="desc">

            <h2><span style="color:green;">Name : </span> {{ pro.name }} </h2>
            <h3><span style="color:red;">Model :</span>{{  pro.model}} </h3>
            <h4><span style="color:crimson;">Price :</span>&#8377; {{ pro.price | number:3 }} </h4>
           
        </div>
    </div>
    
    <script>
        angular.module("myApp", [])
            .controller("myCtrl", function($scope) {
                $scope.product = {
                    info: [
                        {
                            
                            name: 'Samsung Galaxy',
                            model: 'SM13334',
                            price: '15874.5685',
                            image: '1.jpg'
                        },
                        {
                            name: 'Micromax mi5',
                            model: 'MI23d3d',
                            price: '16824.8694',
                            image: 'images/frontend.jpg'
                        },
                        {
                            name: 'Moto X4',
                            model: 'Moto3323',
                            price: '16895.6895',
                            image: 'images/frontend4.jpg'
                        },
                           {
                            name: 'Acer A4',
                            model: 'Ac38963',
                            price: '23895.6995',
                            image: 'images/frontend5.jpg'
                        }
                    ]
                };
            });

    </script>
</body>

</html>
