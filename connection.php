<?php
$b = $_REQUEST["b"];
$data = array("contact","email","balance");
$datafromdb = array();
$i = 0;
    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }
    $sql = "select * from Allcustomer where email ='".$b."'";
    $result = $con->query($sql);
    if($result-> num_rows>0){
        while($row= $result->fetch_assoc()){
            $datafromdb[] = $row[$data[0]];
            $datafromdb[] = $row[$data[1]];
            $datafromdb[] = $row[$data[2]];
            }
        }
    else{
        echo "0";
        }
    $arrlength = count($datafromdb);
                    
    $x=0;
    echo json_encode($datafromdb);
?>