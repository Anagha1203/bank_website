<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basic Banking System</title>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/footer.css">


        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h3 class="name">SSB BANK</h3>
            <nav>
                <ul>
                    <li><a class="nav-link" href="index.php">HOME</a></li>
                    <li><a class="nav-link" href="createuser.php">CREATE USER</a></li>
                    <li><a class="nav-link" href="transfermoney.php">TRANSFER MONEY</a></li>
                    <li><a class="nav-link" href="transactionhistory.php">TRANSACTION HISTORY</a></li>
                </ul>
                
            </nav>
            
        </div>

        <div class="row">
            <div class="col">
                <h1>SSB BANK</h1>
                    
                    <a href="createuser.php"><button>Create a User</button></a>
            </div>
                <div class="col">
                <div class="card card1">
                <h5>Transfer Money</h5>
                    <p>Transfer money easily with our bank!</p>    
                </div>
                <div class="card card2">
                    <h5>Make Transactions</h5>
                    <p>Make transactions effortlessly!</p>
                </div>
                <div class="card card3">
                    <h5>Transaction History</h5>
                    <p>Check your transaction history!</p>
                </div>
                <div class="card card4">
                    <h5>User Creation</h5>
                    <p>Create a new user account!</p>
                </div>

                
            </div>
        </div> 

       

            
    </div>
    <?php
    include 'footer.php';
    ?>    
</body>
</html>
