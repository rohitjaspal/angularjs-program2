<html>
   
   <head>
      <title>Angular JS Views</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
       
       <style>
           a{
               width:auto;
               height:auto;
               padding:10px 40px;
               background-color:dodgerblue;
               color:white;
               line-height:12px;
               display:inline-grid;
               float:left;
               text-decoration:none;
               border-radius:8px;
               border:1px solid dodgerblue;
               cursor:pointer;
           }
           
           a:hover{
               background-color:white;
               color:dodgerblue;
           }
           a:active{
               background-color:white;
               color:dodgerblue;
           }
           h2{
               color:black;
           }
       </style>
       
   </head>
   
   <body>
        <h2>AngularJS Sample Application</h2>
      <div ng-app = "mainApp">
         <p><a href = "#addStudent">Add Student</a></p>
         <p><a href = "#viewStudents">View Students</a></p>
         <p><a href = "#showcontact">Show contact</a></p>
          <br><br>
          <hr>
         <div ng-view></div>
         
         <script type = "text/ng-template" id = "addStudent.htm">
            <h2> Add Student </h2>
            <form>
                <label>Student name</label>
                <br><input type="text" ng-model="stuName" placeholder="Enter Student name">
                <br><br><input type="submit">
            </form>
                <h1> {{stuName}} </h1>
            {{message}} 
         </script>
         
         <script type = "text/ng-template" id = "viewStudents.htm">
            <h2> View Student  </h2>

            {{message}}
         </script>
          
          <script type="text/ng-template" id="showContact.htm">
            <h1>Contact us {{msg}} </h1>
            <form>
                <label>name</label>
                <br><br>
                <input type="text" name="first" placeholder="enter name">
                <br>
                <br>
                <input type="submit">
            </form>
          </script>
      </div>
      
      <script>
         var mainApp = angular.module("mainApp", ['ngRoute']);
         mainApp.config(['$routeProvider', function($routeProvider) {
            $routeProvider.
            
            when('/addStudent', 
           {
               templateUrl: 'addStudent.htm',
               controller: 'AddStudentController'
            }).
            
            when('/viewStudents', {
               templateUrl: 'viewStudents.htm',
               controller: 'ViewStudentsController'
            }).
            
            when('/showcontact',
                {
                templateUrl:'showContact.htm',
                controller: 'showContactCtrl'
            }).
            
            otherwise({
               redirectTo: '/addStudent'
            });
         }]);
         
         mainApp.controller('AddStudentController', function($scope) 
         {
            $scope.message = "This page will be used to display add student form";
         });
         
         mainApp.controller('ViewStudentsController', function($scope) 
         {
            $scope.message = "This page will be used to display all the students";
         });
          
         mainApp.controller('showContactCtrl',function($scope){
             $scope.msg = "This is show view";
         });
			
      </script>
      
      
   </body>
</html>