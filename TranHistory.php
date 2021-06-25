<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TransactionHistory.css">
    <script src="index.js"></script>
    <title>Bank|TSF</title>
</head>
<body>
<nav class="navbar">
        <a href="index.html" class="logo" id="logoid">Bank Of TSF</a>
        <div class="navbaritems" id="navbaritemsid">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Customers.php">Customers</a></li>
                <li><a href="Transaction.php">Transaction</a></li>
                <li><a href="TranHistory.php">Transaction History</a></li>
                <button class="navbarbtn">Contact us</button>
            </ul>
            <button class="dropDown" id="dropDownB" onclick="openDrop()">
                <i class="gg-menu"></i>
            </button>
        </div>
    </nav>
    

    <div class = "tabledata">
        <table>
        <tr>
            <th>S.No</th>
            <th>Sender</th>
            <th>Reciever</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    
        <?php
        $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
        if($con->connect_error){
          die("connection failed:".$con->connect_error);
        }
        $i=1;
        $sql = "SELECT (select name from allcustomer where email=senE) as SENDERS, (select name from allcustomer where email=recE) as RECIEVERS, bal as AMOUNT, date as DATE, id as ID  from transaction ORDER BY DATE ASC";
        $result1 = $con->query($sql);
        if($result1-> num_rows>0){
            while($row= $result1->fetch_assoc()){
            echo "<tr><td>".$i."</td><td>".$row["SENDERS"]."</td><td>".$row["RECIEVERS"]."</td><td>".$row["AMOUNT"]."</td><td>".$row["DATE"]."</td></tr>";
            $i++;
            }
            
            // echo "</table>";
        }
        else{
            echo "0";
        }
    
        $con-> close();
        
        ?>
        </table>

    </div>




    <footer>

    </footer>
</body>
</html>