<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Transaction.css">
    <script src="Transaction.js"></script>
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
                <li><a href="TranHistory.php">Transaction History</a></li>
            </ul>
            <button class="navbarbtn">Contact us</button>
        </nav>
    </header>




    <div class="bodytransaction">
        <div class="transaction">
            <div class="bodyheader">
                Transaction
            </div>
            <div class="customerinfo">
                <div class="getdataa">
                    <p>From:</p>
                    <?php
                    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
                    if($con->connect_error){
                    die("connection failed:".$con->connect_error);
                    }
                    $sql = "select * from Allcustomer";
                    $result = $con->query($sql);
                    $select = "selectme";
                    $getname = "getname";
                    $classcustomerdetails = "customerdetails";
                    $onchange = "showInfo(this.value)";
                    echo "<select name = ".$getname." onchange=".$onchange." class=".$select.">";
                    echo "<option value = '0'>Select a customer</option>";
                    if($result-> num_rows>0){
                        while($row= $result->fetch_assoc()){
                            echo "<option value='".$row["email"]."'>".$row["name"]."</option>";
                        }
                        echo "<select>";
                    }
                    else{
                        echo "0";
                    }
                    $con-> close();
                    ?>


                    <div class="A1">
                        <p class="customerheader">Contact:</p>
                        <p class="customerheader">Email:</p>
                        <p class="customerheader">Balance:</p>
                    </div>
                    <div class="A2">
                        <p class="customerdetails" id="Contact"></p>
                        <p class="customerdetails" id="Email"></p>
                        <p class="customerdetails" id="Balance"></p>
                    </div>
                </div>
                <div class="getdataa">
                <p>To:</p>
                    <?php
                    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
                    if($con->connect_error){
                    die("connection failed:".$con->connect_error);
                    }
                    $sql = "select * from Allcustomer";
                    $result = $con->query($sql);
                    $select = "selectme";
                    $getname = "getname";
                    $classcustomerdetails = "customerdetails";
                    $onchange = "showToInfo(this.value)";
                    echo "<select name = ".$getname." onchange=".$onchange." class=".$select.">";
                    echo "<option value = '0'>Select a customer</option>";
                    if($result-> num_rows>0){
                        while($row= $result->fetch_assoc()){
                            echo "<option value='".$row["email"]."'>".$row["name"]."</option>";
                        }
                        echo "<select>";
                    }
                    else{
                        echo "0";
                    }

                    $con-> close();
                    ?>


                    <div class="A1">
                        <p class="customerheader">Contact:</p>
                        <p class="customerheader">Email:</p>
                        <p class="customerheader">Balance:</p>
                    </div>
                    <div class="A2">
                        <p class="customerdetails" id="TContact"></p>
                        <p class="customerdetails" id="TEmail"></p>
                        <p class="customerdetails" id="TBalance"></p>
                    </div>
                </div>
            </div>
            <!-- Money transfer elements -->
            
            <div class="getdata">
                <p>Enter Amount:</p>
                <input type="number" name="bal" id="Cbal">
                <button class="transferbtn" onclick="updateBalance()">Transfer</button>
            </div>

        </div>
    </div>


    

    <footer>

    </footer>
</body>

</html>