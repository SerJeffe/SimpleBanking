<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TransactionH.css">
    <title>Bank|TSF</title>
</head>
<body>
<header>
        <nav class="navbar">
            <a href="index.html" class="logo">Bank Of TSF</a>
            <ul class="navbaritems">
                <li><a href="index.html">Home</a></li>
                <li><a href="Customers.php">Customers</a></li>
                <li><a href="Transaction.php">Transaction</a></li>
                <li><a href="#">Transaction History</a></li>
            </ul>
            <button class="navbarbtn">Contact us</button>
        </nav>
    </header>
    

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