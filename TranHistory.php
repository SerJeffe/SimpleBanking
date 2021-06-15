<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TranHisto.css">
    <title>Bank|TSF</title>
</head>
<body>
<header>
        <nav class="navbar">
            <a href="#" class="logo">Bank Of TSF</a>
            <ul class="navbaritems">
                <li><a href="Index.html">Home</a></li>
                <li><a href="Customers.php">Customers</a></li>
                <li><a href="Transaction.php">Transaction</a></li>
                <li><a href="#">Transaction History</a></li>
            </ul>
            <button class="navbarbtn">Contact us</button>
        </nav>
    </header>
    


    <table>
    

    <?php
    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
    if($con->connect_error){
      die("connection failed:".$con->connect_error);
    }
    $sql = "select name,contact,email,balance from Allcustomer";
    $result1 = $con->query($sql);
    if($result1-> num_rows>0){
	    while($row= $result1->fetch_assoc()){
	    echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["balance"]."</td></tr>";
        }
        // echo "</table>";
    }
    else{
        echo "0";
    }

    $con-> close();
    
    ?>
    </table>



    <footer>

    </footer>
</body>
</html>