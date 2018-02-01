<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
.normal 
    {
        color: white;
        background-color: grey;
        padding: 20px;
        font-family: "Courier New";
        text-align: justify;
    }

.medium 
{
        color: white;
        background-color: brown;
        padding: 30px;
        font-family: "Courier New";
        text-align:justify;
    }

.advance 
    {
        background-color: red;
        padding: 40px;
        font-family: Verdana;
        color:white;
        text-align:justify;
    }

</style>

<body ng-app="">
    <h1>ng-class Directive</h1>
    <p>Choose a class:</p>
    <select ng-model="home">  
        <option value="normal">Normal</option>  
        <option value="medium">Medium</option>  
        <option value="advance">Advance</option>  
    </select>
    
    <div ng-class="home">
        <h1>Welcome To BePractical</h1>
        <p>This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.This is example para.</p>
    </div>
</body>

</html>
