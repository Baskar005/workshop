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
<body>
<h2 class="text-3xl mt-10 text-blue-900 font-bold text-center mb-6">Workshop Schedule</h2>
<?php
    
$sql = "SELECT id, full_name, phone, email, occupation, payment_status FROM registrations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="overflow-x-auto mt-6 mx-4 md:mx-8">
            <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg divide-y divide-gray-200">
                <thead class="bg-gray-100 text-gray-600">
                    <tr class="text-left text-xs font-semibold uppercase tracking-wider">
                        <th class="px-6 py-3text-center">S.No</th>
                        <th class="px-6 py-3 text-center">ID</th>
                        <th class="px-6 py-3 text-center">Full Name</th>
                        <th class="px-6 py-3 text-center">Phone</th>
                        <th class="px-6 py-3 text-center">Email</th>
                        <th class="px-6 py-3 text-center">Occupation</th>
                        <th class="px-6 py-3 text-center">Payment Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-700">
                    ';

    // Output data of each row
    $count = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='hover:bg-gray-50'>
                <td class='px-6 py-4 text-center mx-auto'>{$count}</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['id']) . "</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['full_name']) . "</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['phone']) . "</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['email']) . "</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['occupation']) . "</td>
                <td class='px-6 py-4 text-center'>" . htmlspecialchars($row['payment_status']) . "</td>
            </tr>";
        $count++;
    }
    echo '</tbody>
        </table>
    </div>';
} else {
    echo '<p class="text-center mt-6 text-gray-500 text-lg font-medium">0 results</p>';
}

// Close connection
$conn->close();
?>

<div class="text-center mt-6 mx-4 md:mx-8">
    <a href="index.php" class="bg-blue-600 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-blue-700 transition duration-300 transform hover:scale-105">Home</a>
</div>
</body>
</html>

