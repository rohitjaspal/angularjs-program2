<!DOCTYPE html>
<html>
  <head>
    <title>ng-cloak</title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
<body ng-app="">
    <div>
        <h1>ng-cloak directive</h1>
        <p ng-cloak>{{ 50 + 5 + 15 -10 }}</p>
        <p><b>Note:</b> This is small example so it would probably not flicker even without the ng-cloak directive, but it specifies how to include the directive on an HTML element.</p>
        
        <hr>
        
          <div id="template1" ng-cloak>{{ "Hello" }}</div> 
      
          <div ng-cloak>{{ "Hello" }}</div>  
        
          <div id="template2" class="ng-cloak">{{ "Be-Practical" }}</div>  

        <div>
            <h1 ng-cloak>{{"Hi i am executing an angular code"}} </h1>
        </div>
    </div>
</body>

</html>
