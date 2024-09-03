<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power BI Workshop | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css " rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        body {
            font-family: "Lora", serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-200 to-blue-400 flex justify-center items-center h-screen">

<form class="bg-white p-10 rounded-lg shadow-2xl w-full max-w-lg transform transition-transform duration-300 hover:scale-105" method="post" action="payment.php" id="myform">
    <!-- Step Navigation -->
    <div class="flex flex-col sm:flex-row mb-8">
    <div class=" mb-4 sm:mb-0 flex justify-start">
        <button type="button" id="step1Btn" class="w-full sm:w-auto text-white bg-blue-600 font-bold py-3 px-5 rounded-lg transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            1. Personal Details
        </button>
    </div>
    <div class="flex-1 sm:w-auto flex justify-end">
        <button type="button" id="step2Btn" class="w-full sm:w-auto text-blue-600 bg-gray-200 font-bold py-3 px-5 rounded-lg transition duration-300 hover:bg-gray-300 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50">
            2. Payment Info
        </button>
    </div>
</div>




    <!-- Step 1: Personal Details -->
    <div id="step1" class="step bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-b-lg">
        <div class="space-y-6">
            <div>
                <label for="fullName" class="block text-gray-700 font-medium">Full Name *</label>
                <input type="text" id="fullName" name="fullName" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-300" required>
            </div>
            <div>
                <label for="phone" class="block text-gray-700 font-medium">Phone *</label>
                <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-300" required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email Address *</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-300" required>
            </div>
            <div>
                <label for="occupation" class="block text-gray-700 font-medium">College/Institute/Working at *</label>
                <input type="occupation" id="occupation" name="occupation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-300" required>
            </div>
            <div class="text-center mt-8">
                <button type="button" id="nextStepBtn" class="w-full bg-green-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-700 transition duration-300">Next Step ➔</button>
            </div>
        </div>
    </div>

    <!-- Step 2: Payment Info -->
    <div id="step2" class="step hidden bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-b-lg">
        <div class="space-y-6">
            <div class="bg-white shadow-md p-4 rounded-lg border-l-4 border-blue-600">
                <h3 class="text-lg font-semibold text-gray-700">Power BI Workshop Amount <b style="color: red;font-size:25px">99/-</b> Only</h3>
            </div>
            <!-- First Page Content -->
    <div class="container mx-auto px-4 mt-8">
    <div class="container mx-auto px-4 mt-8">
        <div>
            
        </div>
    <div class="flex justify-center mb-4">
    <a id="terms" href="#" class="text-white bg-blue-600 rounded-lg py-2 px-6 font-semibold shadow-lg transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
        Terms and Conditions
    </a>
    

  <!-- Overlay -->
  <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

  <!-- Popup Form -->
  <div id="popup" class="hidden text-indigo-900 w-5/6 h-5/6 fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-lg p-8 space-y-5 shadow-lg overflow-y-auto md:max-sm:flex">
  
    <p class="text-9*1" style="text-align: center; font-size:20px;font-weight:900">Terms And Conditions</p>
    <ul>
        <li><b>1. Overview :</b>
        Welcome to the 2-day online workshop on Power BI. By registering for and participating in this workshop, you agree to comply with these Terms and Conditions.</li><br>
        <li><b>2. Registration :</b>

Eligibility: Participants must be any degree and have basic knowledge of data analysis.
Registration Process: Complete the online registration form and make the required payment to secure your spot.
Confirmation: Upon successful registration, you will receive a confirmation email with details on how to access the workshop.
</li><br>
        <li><b>3. Workshop Details :</b>

Dates and Times: The workshop will be held on 31st Aug and 01 Sep 2024 from 6.00 PM to 8.00 PM each day.
Platform: The workshop will be conducted via [Insert Online Platform, e.g., Zoom, Microsoft Teams].
Content: The workshop will cover  Power BI fundamentals, data visualization, report creation, Interactive Dashboard, etc ].</li><br>
        <li><b>4. Fees and Payment</b>

Fee: The cost of the workshop is Rs. 99/-. This fee is non-refundable.
Payment: Payment must be made at the time of registration through Rayzorpay payment gateway.
</li><br>   
        <li><b>5. Cancellation and Refund Policy :</b>

Participant Cancellation: If you need to cancel, please notify us at least 2 days before the workshop start date to receive a refund, minus any processing fees.
</li><br>
        <li><b>6. Access and Attendance :</b>

Access: You will receive a link to the workshop platform and any necessary instructions one days before the event.
Attendance: Attendance is required for the full duration of the workshop to receive a certificate of completion. Late arrivals or early departures may affect your eligibility for the certificate.
</li><br>
        <li><b>7. Conduct :</b>

Behavior: Participants are expected to behave professionally and respectfully. Disruptive or inappropriate behavior may result in removal from the workshop without a refund.
Recording: The workshop may be recorded for internal use. By participating, you consent to being recorded.</li><br>
        <li><b>8. Intellectual Property :</b>

Materials: All workshop materials, including presentations, handouts, and recordings, are the intellectual property of the organizers. These materials may not be reproduced or shared without permission.
Use: Participants may use workshop materials solely for personal educational purposes.
</li><br>
        <li><b>9. Liability :</b>

Disclaimer : The organizers are not liable for any direct or indirect damages arising from your participation in the workshop. The workshop is provided "as is" without warranties of any kind.
</li><br>
        <li><b>10. Data Protection :</b>

Privacy: We collect and process personal data in accordance with our Privacy Policy. Your information will be used solely for the purposes of managing your registration and communicating workshop details.
</li><br>
        <li><b>11. Changes to Terms :</b>

Modifications: We reserve the right to update these Terms and Conditions. Any changes will be communicated to registered participants.</li>
        <li><b>12. Contact Information :</b>
        For any questions or concerns regarding the workshop, please contact us at 7598980319.</li><br>
    </ul>
      <div class="flex justify-center">
        <button type="button" id="close" class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Close</button>
      </div>
    
  </div>

  <!-- JavaScript to handle the popup -->
  <script>
    var openButton = document.getElementById('terms');
    var popup = document.getElementById('popup');
    var closeButton = document.getElementById('close');
    var overlay = document.getElementById('overlay');

    openButton.addEventListener('click', function () {
      popup.classList.remove('hidden');
      overlay.classList.remove('hidden');
    });

    closeButton.addEventListener('click', function () {
      popup.classList.add('hidden');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', function () {
      popup.classList.add('hidden');
      overlay.classList.add('hidden');
    });
  </script>

</div>
    </div>
    <div class="flex justify-center mb-4">
    <input id="mycheckbox" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mx-2 mt-1">
        <label for="checkbox">I agree to the terms and conditions</label>   
    </div>



    <div id="popup" class="hidden text-indigo-900 w-5/6 h-5/6 fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-lg p-8 space-y-5 shadow-lg overflow-y-auto md:max-sm:flex" >
    <div class="md:shrink-0">

    <p>Please Check the<q>Terms And Conditions</q></p>

    <div class="flex justify-center">
        <button type="button" id="close" class="px-5 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Close</button>
      </div>
    </div>
    </div>

            <div class="text-center mt-8">
                <button type="submit" id="sub" class="w-full bg-green-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-700 transition duration-300">Pay With Razorpay</button>
            </div>
            <script>
    var openButton = document.getElementById('terms');
    var popup = document.getElementById('popup');
    var closeButton = document.getElementById('close');
    var overlay = document.getElementById('overlay');

    openButton.addEventListener('click', function () {
      popup.classList.remove('hidden');
      overlay.classList.remove('hidden');
    });

    closeButton.addEventListener('click', function () {
      popup.classList.add('hidden');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', function () {
      popup.classList.add('hidden');
      overlay.classList.add('hidden');
    });
  </script>
        </div>
    </div>
</form>

<script>

    document.getElementById('nextStepBtn').addEventListener('click', function() {
        // Validate Step 1 Form
        const fullName = document.getElementById('fullName');
        const phone = document.getElementById('phone');
        const email = document.getElementById('email');

        if (fullName.checkValidity() && phone.checkValidity() && email.checkValidity()) {
            document.getElementById('step1').classList.add('hidden');
            document.getElementById('step2').classList.remove('hidden');
            document.getElementById('step1Btn').classList.remove('bg-blue-600', 'text-white');
            document.getElementById('step1Btn').classList.add('bg-gray-200', 'text-blue-600');
            document.getElementById('step2Btn').classList.remove('bg-gray-200', 'text-blue-600');
            document.getElementById('step2Btn').classList.add('bg-blue-600', 'text-white');
        } else {
            // Trigger validation errors
            if (!fullName.checkValidity()) fullName.reportValidity();
            if (!phone.checkValidity()) phone.reportValidity();
            if (!email.checkValidity()) email.reportValidity();
        }
    });

    document.getElementById('step1Btn').addEventListener('click', function() {
        document.getElementById('step1').classList.remove('hidden');
        document.getElementById('step2').classList.add('hidden');
        document.getElementById('step1Btn').classList.remove('bg-gray-200', 'text-blue-600');
        document.getElementById('step1Btn').classList.add('bg-blue-600', 'text-white');
        document.getElementById('step2Btn').classList.remove('bg-blue-600', 'text-white');
        document.getElementById('step2Btn').classList.add('bg-gray-200', 'text-blue-600');
    });

    document.getElementById('step2Btn').addEventListener('click', function() {
        document.getElementById('step1').classList.add('hidden');
        document.getElementById('step2').classList.remove('hidden');
        document.getElementById('step1Btn').classList.remove('bg-blue-600', 'text-white');
        document.getElementById('step1Btn').classList.add('bg-gray-200', 'text-blue-600');
        document.getElementById('step2Btn').classList.remove('bg-gray-200', 'text-blue-600');
        document.getElementById('step2Btn').classList.add('bg-blue-600', 'text-white');
    });
     document.getElementById('myform').addEventListener('submit', function(event) {
            var checkbox = document.getElementById('checkbox');
            if (!checkbox.checked) {
                event.preventDefault();

                alert('Please check the Terms and Conditions.');
            }
        });

</script>

</body>
</html>
