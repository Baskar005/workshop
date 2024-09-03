<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power BI Workshop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        body {
            font-family: "Lora", serif;
        }
        .hover-scale {
            transition: transform 0.3s ease-in-out;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .bg-primary {
            background-color: #1E3A8A;
        }
        .bg-secondary {
            background-color: #FBBF24;
        }
        .border-left-seondary{
            border-left: 5px solid #FBBF24;
        }
        .text-secondary{
            color:#FBBF24;
        }
        .border-secondary{
          border-color: #FBBF24;
        }
        @media screen and (min-width: 480px) {
          #popup  {
            width: 20%;
        }}
    </style>
</head>
<body class="bg-blue-100 text-blue-900">

    <!-- First Page Content -->
    <div class="container mx-auto px-4 mt-8">
    <div class="container mx-auto px-4 mt-8">
    <div class="flex justify-end mb-4">
    <a id="terms" href="#" class="text-white bg-blue-600 rounded-lg py-2 px-6 font-semibold shadow-lg transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
        Terms and Conditions
    </a>

  <!-- Overlay -->
  <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

  <!-- Popup Form -->
  <div id="popup" class="hidden text-indigo-900 w-5/6 h-5/6 fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-lg p-8 space-y-5 shadow-lg overflow-y-auto md:max-sm:flex" >
    <div class="md:shrink-0">

    
    <p class="text-9*1 " style="text-align: center; font-size:20px;font-weight:900">Terms And Conditions</p><br>
    <ul>
        <li><b >1. Overview :</b>
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

Modifications: We reserve the right to update these Terms and Conditions. Any changes will be communicated to registered participants.</li><br>
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
    </div>


        
            <div class="flex flex-col md:flex-row gap-6 items-center justify-between p-6 bg-primary text-white rounded-lg">
                <div class="flex-shrink-0 w-full md:w-1/3">
                    <img src="powerbi.png" alt="Power BI" class="w-full h-auto rounded-lg shadow-md hover-scale">
                </div>
                <div class="w-full md:w-2/3">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-secondary mb-6 border-b-4 border-secondary pb-3 tracking-tight leading-tight">
                        Unlock the Power of Data with Power BI - Join Our Hands-On Workshop!
                    </h1>
                    <p class="text-lg text-white font-bold mb-6 leading-relaxed">
                        Are you ready to transform the way you analyze and visualize data? Join our intensive Power BI Workshop and learn how to harness the full potential of Microsoft’s leading business intelligence tool. This hands-on experience will elevate your data skills and give you actionable insights for your projects.
                    </p>
                    <div class="text-center mb-2 px-4">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
                <div>

                </div>
            </div>
            <div class="bg-white md:flex-row items-center  rounded-lg justify-between p-6 mt-8">
            <div class="flex flex-col bg-white md:flex-row items-center p-6 rounded-lg justify-between space-y-6 md:space-y-0 ">
                <!-- Event Details -->
                <div class=" items-start space-y-4 w-full md:w-3/5">
                    <div class="border-l-4 border-secondary pl-4 py-2 hover:text-blue-600 transition-colors duration-300">
                        <p><a href="#" class="text-xl font-semibold">31<sup>th</sup>  August & 01<sup>th</sup> September</a></p>
                    </div>
                    <div class="border-l-4 border-secondary pl-4 py-2 hover:text-blue-600 transition-colors duration-300">
                        <p><a href="#" class="text-xl font-semibold">6.00 PM to 8.00 PM</a></p>
                    </div>
                    <div class="border-l-4 border-secondary pl-4 py-2 hover:text-blue-600 transition-colors duration-300">
                        <p><a href="#" class="text-xl font-semibold">Live Domination Workshop</a></p>
                    </div>
                    <div class="border-l-4 border-secondary pl-4 py-2 hover:text-blue-600 transition-colors duration-300">
                        <p><a href="#" class="text-xl font-semibold">Secure your spot today!! Only Limited Seats</a></p>
                    </div>

                </div>
            
                <!-- Company Details -->
                <div class="bg-gray-900 text-yellow-400 rounded-lg p-1 mb-4 sm:p-2 md:p-3 w-full sm:w-3/4 md:w-1/3 hover:shadow-2xl transition-shadow duration-300 space-y-2">
    <div class="flex flex-col sm:flex-row items-center">
        <img src="./img/logo.png" alt="Kenstack Logo" class="w-16 h-16 sm:w-20 sm:h-20">
        <p class="text-lg ml-5 sm:text-xl md:text-2xl font-bold mt-2 sm:mt-0 sm:ml-2 text-center sm:text-left">
            Kenstack Technologies
        </p>
    </div>
    <div class="flex flex-col items-center">
        <p class="text-base sm:text-lg font-semibold">Director</p>
        <p class="text-sm sm:text-base md:text-lg">Dr. S.Kalaivani</p>
    </div>
    <div class="text-center">
        <p class="text-base sm:text-lg font-semibold"><q>Certified By</q></p>
    </div>
    <div class="flex justify-around">
    <img src="./img/msme.png" alt="MSME Logo" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full">
    <img src="./img/trademark_logo.png" alt="Trademark Logo" class="w-16 h-16 sm:w-20 sm:h-20">
    <img src="./img/seal.jpg" alt="Seal" class="w-16 h-16 sm:w-20 sm:h-20 rounded-full">
</div>
</div>




            </div>

            <div class="text-center mb-2 px-4">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
</div>
            </div>
            
       
        
    </div>

    <!-- Second Page Content -->
    <div class="container mx-auto px-4 py-8 mt-8">
    <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center mb-6">Workshop Schedule</h2>
        <div class="flex flex-col gap-6 md:flex-row md:gap-8" style="justify-content: space-around;">
            <!-- First Workshop -->
            <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:bg-blue-200 transition-colors duration-300">
                <div class="flex flex-col justify-between items-center mb-4">
                    <div class="text-blue-900 mb-4 text-center">
                        <h3 class="text-xl font-semibold"><a href="#">31<sup>th</sup> August</a></h3>
                        <p><a href="#">6.00 PM to 8.00 PM</a></p>
                    </div>
                    <ul class="list-disc pl-6 space-y-2 text-blue-900">
                        <li>Dataset Knowledge</li>
                        <li>Power BI Interface Tour</li>
                        <li>How to load data?</li>
                        <li>Card, Line Chart, Stacked Column Chart, Pie/Donut Chart</li>
                        <li>AI-based Visualization</li>
                        <li>DAX Language</li>
                    </ul>
                </div>
            </div>

            <!-- Second Workshop -->
            <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:bg-blue-200 transition-colors duration-300">
                <div class="flex flex-col justify-between items-center mb-4">
                    <div class="text-blue-900 mb-4 text-center">
                        <h3 class="text-xl font-semibold"><a href="#">01<sup>th</sup> September</a></h3>
                        <p><a href="#">6.00 PM to 8.00 PM</a></p>
                    </div>
                    <ul class="list-disc pl-6 space-y-2 text-blue-900">
                        <li>Power Query Interface Tour</li>
                        <li>M Language</li>
                        <li>Transform Data & Query Tab</li>
                        <li>Advanced Filtering and Grouping Data</li>
                        <li>Waterfall Chart, Funnel Chart, Scatter Chart, Treemap</li>
                        <li>Creating Bookmark</li>
                    </ul>
                </div>
            </div>
        </div>



            <p class="text-center italic text-lg text-blue-900 mt-6">
                <q>Don’t miss out on this opportunity to elevate your data skills! Register today and start transforming data into insights that drive success.</q>
            </p>
    
            <div class="text-center mb-2 px-4 mt-5">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
        </div>
    </div>

    </div>
    
    
    

    <!-- Third Page Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-secondary text-center mb-6">To Become</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/Data Analyst.jpg" alt="Data Analysts" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Data Analyst</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/BI professional.webp" alt="Business Intelligence Professionals" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Business Intelligence Professionals</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/Business managers.webp" alt="Business Managers" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Business Managers</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/Report analyst.webp" alt="Dashboard and Report Analysts" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Dashboard and Report Analysts</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/powerbi developer.jpg" alt="Power BI Developers" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Power BI Developers</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/project manager.jpg" alt="Project Manager" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Project Manager</p>
                </div>
            </div>

            <div class="text-center mb-2 px-4 mt-5">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
       Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
        </div>
    </div>


    <!-- Fourth Page Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-secondary text-center mb-6"><q>Who Can Attend?</q></h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/msc.statistics.jpg" alt="statistics" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Statistics</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/BCOM.jpg" alt="Business Of Commerce" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Business Of Commerce</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/MCOM.jpg" alt="Master Of Commerce" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Master Of Commerce</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/m.sc.computer science.jpg" alt="Computer Science" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Computer Science</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/m.sc.datascience.jpg" alt="Data Science" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Data Science</p>
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/MBA.jpg" alt="Master Of Business Administration" class="w-32 h-32 mx-auto mb-2 rounded-lg shadow-md">
                    <p>Master Of Business Administration</p>
                </div>
            </div>

            <div class="text-center mb-2 px-4 mt-5">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
        </div>
    </div>

    <!-- Fifth Page Content -->

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-secondary text-center mb-6"><q>Business Intelligence Templates</q></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/clear_filters.jpg" alt="clear_filters" class="w-full h-full mx-auto mb-2 rounded-lg shadow-md">
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/revenue.jpg" alt="revenue" class="w-full h-full mx-auto mb-2 rounded-lg shadow-md">
                </div>
                <div class="text-center hover:scale-105 transition-transform duration-300">
                    <img src="./img/events.jpg" alt="events" class="w-full h-full mx-auto mb-2 rounded-lg shadow-md">
                </div>
            </div>

            <div class="text-center mb-2 px-4 mt-5">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
        </div>

    <!-- Fifth Page Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
            <p class="text-center text-2xl font-bold mb-6">
                Get certified, get ahead, your path to mastering Power BI
            </p>
            <div class="text-center">
                <img src="./img/certifie.png" alt="Certification" class="mx-auto mb-6" style="width: 650px;">
                <div class="text-center mb-2 px-4">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white text-blue-900 rounded-lg shadow-lg p-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-blue-900">We value the feedback of our students as it helps us to continually improve our educational offerings. Here's what some of our students have to say:</h2>
            </div>
            <div class="flex justify-center space-x-4 mb-8">
                <div class="w-1/4">
                    <img src="img/img1.png" alt="students review" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="w-1/4">
                    <img src="./img/img2.png" alt="students review" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="w-1/4">
                    <img src="./img/img3.png" alt="students review" class="rounded-lg shadow-lg w-full h-auto">
                </div>
            </div>
            <div class="text-center">
            <div class="text-center mb-2 px-4">
    <a href="register.php" 
       class="bg-secondary text-blue-900 rounded-lg py-3 px-4 text-lg sm:text-xl font-semibold hover:bg-yellow-300 transition-transform duration-300 inline-block w-full sm:w-auto">
        Become A Certified Power BI Expert At Just <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold"> Rs 99/-</span>
        Enroll Now!
    </a>
</div>
<div class="text-white-900 text-center"> Register Before 30<sup>th</sup> August 2024 To Get Mega Bonus In Data Analytics Course Worth <span class="text-red-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold">  <del>Rs 10000/</del></span><span class="text-green-600 text-xl sm:text-2xl md:text-3xl lg:text-2xl font-bold"> <q> For 5000/- Only </q></span></div>
                </div>
            </div>
        </div>
      
    </div>
    

</body>
</html>
