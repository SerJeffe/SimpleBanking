<?php
    $s = $_REQUEST["s"];;
    $r = $_REQUEST["r"];
    $bal = $_REQUEST["bal"];
    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }

    $sql = "select balance from Allcustomer where email ='".$s."'";
    $result = $con->query($sql);
    $checkbal=0;
    if($result-> num_rows>0){
        while($row= $result->fetch_assoc()){
            $checkbal = $checkbal + $row["balance"];
        }
    }
    else{
        echo "0";
    }

    //checking sender's balance

    if($checkbal>$bal)
    {
        $sql = "update allcustomer set balance = balance + ".$bal." where email = '".$r."'";
        $result = $con->query($sql);
        $sql = "update allcustomer set balance = balance - ".$bal." where email = '".$s."'";
        $result = $con->query($sql);
        $date = date("Y-m-d h:i:sa");
        $sql = "insert into transaction values('".$s."','".$r."',".$bal.",'".$date."', NULL)";
        $result = $con->query($sql);
        echo "Transaction successful!!";
    }
    else{
        echo "Insufficient Balance!!";
    }


    
?>