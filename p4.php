<!DOCTYPE HTML>
<html>
    <html>
        <title>Program-1</title>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    </html>
    <body ng-app = "" >
     
        
        <div ng-init = "employee = [{id:'01',name:'Ravi'}, {id:'02',name:'Vinod'}, {id:'03',name:'Anusha'}]">   

         <ul>  
            <li ng-repeat = "emp in employee">  
               {{ 'Id = ' + emp.id + ', Name =' + emp.name }}  
            </li>  
         <ul>  
      </div>  
        
        <div ng-init ="tree = [{name:'coco',color:'Brown'}, {name:'Sandle',color:'Darkbrown'}, {name:'oak',color:'green'}]" >
        
            <select>
                <option>Select the option </option>
                <optgroup ng-repeat="tr in tree">
                    <option> {{ tr.name +','+ tr.color }}</option>
                </optgroup>
            </select>   
        </div>
    </body> 
</html>