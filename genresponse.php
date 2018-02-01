<?php
    if(isset($_GET['id']))
    {
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");
        $key = $_GET['id'];
    $conn = new mysqli("localhost","root","test123","bepractical");
    
    $sql = $conn->query("SELECT * FROM users WHERE id=$key");
    $outp= '';
        
        while($res = $sql->fetch_array(MYSQLI_ASSOC))
        {
            if($outp != '')
            {
                $outp .= ',';
            }
                $outp .= '{"id":"'.$res["id"].'" ,';
                $outp .= '"username":"'. $res["username"] .'" ,';
                $outp .= '"password":"'.  $res["password"] .'",';
                $outp .= '"ipaddress":"'. $res["ip_address"].'" ,';
                $outp .= '"registerdate":"'.$res["reg_date"].'" ,';
                $outp .= '"registertime":"'.$res["reg_time"].'"}';
        }
            $outp = '{"records":['.$outp.']}';
            $conn->close();
        echo $outp;
    }

?>