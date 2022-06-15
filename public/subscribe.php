<?php
    session_start();
    require 'client.php';
    require 'classes/config.php';

    try {
        //code...
        $client = new client();

    if (isset($_SESSION['membership']) && isset($_SESSION['transaction-id']) && isset($_SESSION['transaction-amount']) && isset($_SESSION['auth_id'])) {

        $transId = $_SESSION['transaction-id'];
        $transAmount = $_SESSION['transaction-amount'];
        $userID = $_SESSION['auth_id'];
        $membership_name = $_SESSION['membership'];
        
    }

    $clientData = $client->getClient($userID);

    foreach ($clientData as $key => $client) {
        # code...
        $person = [
          'fullname' => $client->fullname,
          'email' => $client->email,
        ];
      }

    } catch (PDOException $th) {
        //throw $th;
        echo $th->getMessage();
    }
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <title>Subscription</title>
</head>
<body>
<div class="w-[600px] mx-auto text-gray-800 bg-gray-100">
        <div class="text-center p-4">
            <h1 class=" my-4 p-2  font-bold tracking-normal text-2xl">Transaction Successful</h1>
            <a class="font-bold  tracking-normal text-blue-700" href="index.php">return to shop</a>
        </div>
       
        <div class="grid shadow-md text-gray-800">
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Transaction ID</p>
            <p class="text-base p-2  bg-gray-50 font-normal tracking-tight"><?php echo $transId; ?></p>
        </div>
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Full Name</p>
            <p class="text-base p-2  bg-gray-50 font-normal tracking-tight"><?php echo $client->fullname; ?></p>
        </div>
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Email Address</p>
            <p class="text-base p-2  bg-gray-50 font-normal tracking-tight"><?php echo $client->email; ?></p>
        </div>
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Product Name</p>
            <p class="text-base p-2  bg-gray-50 font-normal tracking-tight"><?php echo $membership_name; ?></p>
        </div>
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Amount</p>
            <p class="text-base p-2  bg-gray-50 font-normal tracking-tight">Mk <?php echo $transAmount; ?>.00</p>
        </div>
        <div class="bg-white p-4">
            <p class="text-lg text-indigo-600 font-medium">Quantity</p>
            <p class="text-base p-2 bg-gray-50 font-normal tracking-tight">1</p>
        </div>
        
        </div>
    </div>
</body>
</html>