<?php
include("dbconn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power BI Workshop | Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        body {
            font-family: "Lora", serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = htmlspecialchars($_POST['fullName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $occupation = htmlspecialchars($_POST['occupation']);
    $paymentAmount = 99; // The amount can be dynamic if needed
    $paymentStatus = 'Pending'; // Default status

    // Check if the phone number already exists
    $stmt = $conn->prepare("SELECT payment_status FROM registrations WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($existingPaymentStatus);
        $stmt->fetch();

        if ($existingPaymentStatus === 'Pending') {
            echo '<div class="bg-yellow-100 border-t-4 border-yellow-500 rounded-b text-yellow-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-yellow-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.707 13.707a1 1 0 01-1.414-1.414L9.586 10l-2.293-2.293a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4z"/></svg></div>
                        <div>
                            <p class="font-bold">Payment Pending</p>
                            <p class="text-sm">It seems you have already registered but your payment is pending. Please complete the payment to confirm your registration.</p>
                        </div>
                    </div>
                  </div>';
        } else if ($existingPaymentStatus === 'Completed') {
            echo '<div class="bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.707 13.707a1 1 0 01-1.414-1.414L9.586 10l-2.293-2.293a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4z"/></svg></div>
                        <div>
                            <p class="font-bold">Already Registered</p>
                            <p class="text-sm">You have already registered and completed the payment. Thank you!</p>
                        </div>
                    </div>
                  </div>';
        }
    } else {
        // Proceed with registration
        $stmt = $conn->prepare("INSERT INTO registrations (full_name, phone, email, occupation, payment_status, payment_amount) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssd", $fullName, $phone, $email, $occupation, $paymentStatus, $paymentAmount);
        if ($stmt->execute()) {
            // Success message
            echo '<div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.707 4.293a1 1 0 010 1.414L9.414 13l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l7-7a1 1 0 011.414 0z"/></svg></div>
                        <div>
                            <p class="font-bold">Registration successful!</p>
                            <p class="text-sm">Your payment is pending. Please complete the payment to confirm your registration.</p>
                        </div>
                    </div>
                  </div>';
        } else {
            echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8.707 13.707a1 1 0 01-1.414-1.414L9.586 10l-2.293-2.293a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4z"/></svg></div>
                        <div>
                            <p class="font-bold">Error</p>
                            <p class="text-sm">There was an issue with your registration. Please try again.</p>
                        </div>
                    </div>
                  </div>';
        }
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();

echo '<div class="d-block text-center mt-6">
<a href="index.php" class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-300">Home</a>
</div>';
?>

</body>
</html>
