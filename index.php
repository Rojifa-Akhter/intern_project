<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/php/">
    <link rel="stylesheet" href="https://www.cloudways.com/blog/best-php-frameworks/?__cf_chl_jschl_tk__=pmd_DAB4WrMDsJ1Z0td49cPoLflEyFrhqJihJ6BfGmBTIN8-1635284383-0-gqNtZGzNAiWjcnBszQil#choosing">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/av.css" type="text/css">
    <title>Vehicles Without Drivers</title>
  </head>
  <body>
      <!-- Logo -->
    <div id="logo">
      <a>WITHOUT DRIVER AUTOMOBILES</a>
      <img src="img/logo.png" class="logo" alt="Logo">
    </div>
    <!--Navigation title-->
    <div class="topnvg" id="myTopnvg">
      <a href="index.php" class="active">HOME </a>
      <a href="about.php">ABOUT </a>
      <a href="signup.php"> SIGN UP </a>
      <a href="login.php">LOGIN </a>
      <a href="contact.php">CONTACT-Us</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>

      </a>
    </div>
    <!-- Dropdown -->
    <script>
    function myFunction() {
      var d = document.getElementById("myTopnvg");
      if (d.class_name === "topnvg") {
        d.class_name += " responsive";
      } else {
        d.class_name = "topnvg";
      }
    }
    </script>
    <!--Header-->
    <h1>
      <div class="auto-car-image">
        <img class="auto_head" src="img/car1.jpg" alt="Header Image">
        <img class="auto_head" src="img/car2.jpg" alt="Header Image">
        <img class="auto_head" src="img/car3.jpg" alt="Header Image">
        <img class="auto_head" src="img/car4.jpg" alt="Header Image">
      </div>
      <!-- Automatically Loading -->
      <script>
      var myLand = 0;
      carousel();

      function carousel() {
        var i;
        var d = document.getElementsByClassName("auto_head");
        for (i = 0; i < d.length; i++) {
          d[i].style.display = "none";
        }
        myLand++;
        if (myLand > d.length) {myLand = 1}
        d[myLand-1].style.display = "block";
        setTimeout(carousel, 5000); // Change img after 5 seconds
      }
      </script>
      <div class="div1">
         <h2 class="heading1" data-aos="fade-down">DEFINATION AUTONOMOUS VEHICLE ?</h2><br>
         <p information-aos="fade-up">An autonomous car is a self-driving car also called an <b>autonomous vehicle</b>. That is a connected and autonomous vehicle, driverless car, robot car, or robotic car. It is capable of sensing its environment and moving safely with little or no human input.</p></br>
         <p information-aos="fade-up">An autonomous car is one that has the necessary computer systems to imitate human capabilities in terms of driving, both by driving and by control. A priori, autonomous vehicles considered those that do not need a driver; however, the concept continues to evolve, and there are several levels of autonomous driving.
           The automated driving system is developed using ADAS software development.<a href="#ADAS" class="about_ADAS"><b>about ADAS</b></a>
         </p>
      </div>
   </h1>

   <div class="div2">
     <img class="auto_level" src="img/auto_car.jpg" data-aos="fade-right" alt="driving image">
     <h2 class="heading2">Autonomous Vehicles Levels</h2><br>
     <p>
      In 2014, The Society of Automotive Engineers created a scale in order to rate the level of automation for self-driving vehicles. With <b>six different levels</b>, the scale describes the stages of automation in driverless cars. Though the overall definition of an autonomous vehicle can vary, these widely-accepted classifications are used by the National Highway Traffic Safety Administration (NHTSA) to distinguish the varying degrees of Automated Driving Systems (ADS). Here is the scale, ranging from no automation to full automation. Despite common consumer misconceptions, we are still a long way off from having fully-autonomous (Level 5) vehicles on the road.

      <b>Level 0:</b> No Automation — Zero autonomy, the driver is in full control.<br><br>
      <b>Level 1:</b> Driver Assistance — Very little autonomy, the driver is mainly in control, but the vehicle could control steering or acceleration.<br><br>
      <b>Level 2:</b> Partial Automation — Partial autonomy, the vehicle can now control steering, braking, and acceleration, but the driver must stay aware and engaged.<br><br>
      <b>Level 3:</b> Conditional Automation — Almost full autonomy, the vehicle can control most functions, but the driver needs to be available to operate the car if alerted.<br><br>
      <b>Level 4:</b> High Automation — Full autonomy but only under certain conditions, the driver may need to take control depending on the situation.<br><br>
      <b>Level 4:</b> Full Automation — Full autonomy under all conditions, the driver does not need to be involved in any interactions.<br><br>

      There isn’t a true full autonomous vehicle on the market yet, but there are many companies that are working diligently in order to develop a self-driving car capable of operating independently. In fact, there are already several autonomous vehicles already on the streets. Ford even teamed up with Domino’s to offer automated pizza delivery. Along with Ford being a major developer working toward producing a fully autonomous vehicle, there are numerous other companies investing time and money into the technology including General Motors, Daimler, Volkswagen, BMW, Tesla, Toyota, NVIDIA, and Google’s Waymo. Ride-hailing applications Uber and Lyft have even been working directly with these enterprises to establish passenger-carrying autonomous vehicles.
      </p>
   </div>

   <div class="div3">
     <img class="benifits" src="img/benifits.jpg" data-aos="zoom-in" alt="Benifits of Autonomous Vehicle">
     <h3 class="heading3" data-aos="zoom-in-up">The Benifits of a Self Driving</h3><br>
     <p data-aos="zoom-in">
     <b>Decreased the number of accidents</b> Autonomous cars prevent human errors from happening as the system controls the vehicle. It leaves no opportunity for distraction, not just like humans who are prone to interruptions. It also uses complicated algorithms that determine the correct stopping distance from one vehicle to another. Thereby, lessening the chances of accidents dramatically.<br><br>
     <b>Lessens traffic jams</b>Driverless cars in a group participate in platooning. This allows the vehicles to brake or accelerates simultaneously. Platoon system allows automated highway system which may significantly reduce congestion and improve traffic by increasing up the lane capacity. Autonomous cars communicate well with one another. They help in identifying traffic problems early on. It detects road fixing and detours instantly. It also picks up hand signals from the motorists and reacts to it accordingly.<br><br>
     <b>Stress-free parking</b>Autonomous cars drop you off at your destination and directly heads to a detected vacant parking spot. This eliminates the wasting of time and gas looking for a vacant one.<br><br>
    </p>
   </div>

   <div class="div4">
     <div id="ADAS">
       <img class="ADAS_img" src="img/ADAS.jpg" alt="Advanced Driver Assistance System">
       <div class="ADAS_heading" data-av="fade-left" data-av-duration="900">ADVANCED DRIVER ASSISTANCE SYSTEM</div>
     </div>
    <p>
      <strong>Advanced Driver Assistance System (ADAS)</strong> Almost all vehicle accidents are caused by human error, which can be avoided with Advanced Driver Assistance Systems (ADAS). The role of ADAS is to prevent deaths and injuries by reducing the number of car accidents and the serious impact of those that cannot be avoided.<br><br>

      The auto industry giants have joined the race for making the safest and stress-free <b>autonomous vehicle (AV)</b>. The autonomous driving solutions require real-time, high-performance software compliant with functional safety standards, while relying on machine learning, self-healing maps, AI, V2X connectivity and computer vision. To achieve their goals in ADAS engineering, however, many Tier 1 companies and OEMs are partnering with software development vendors to create their automotive breakthroughs for ADAS software and autonomous driving solutions.

      Intellias takes every opportunity to automate, adapt, and enhance vehicle systems for safer and more <b>comfortable driving</b>. To do so, we draw on years of experience in digital mapping, location-based services, predictive road-data management, and ADAS software development. Your ADAS software will get information from the map, GPS, sensors of other cars ahead, and the <b>cloud to guarantee</b> a fast response to the environment for the safest end-to-end solution.
    </p>
   </div>

   <div class="services">
     <h4 class="heading4"><b>Get Latest News </b></h4>

     <!-- Geolocation -->
     <div class="location">
       <button class="accessBtn" onclick="getLocation()">Access Location</button>
       <p id="demo"></p>
       <script src="js/geolocation.js">
       </script>
     </div>

     <!-- RSS feed -->
     <div class="rss_feed">
     <iframe width="560" height="760" src="https://rss.app/embed/v1/pSDc9exQx8IPaCQe" frameBorder="0"></iframe>
     </div>
   </div>

   <!-- Newsfeeds -->
   <div>
   <section class="auto_news">
     <h3>Related News Link</h3>
     <p><a href="https://restechtoday.com/safety-security-autonomous-cars/" class="news_link" target="blank">&#128240; The Safety and Security of Autonomous Cars</a></p><br>
     <p><a href="https://www.einfochips.com/blog/top-7-adas-technologies-that-improve-vehicle-safety/" class="news_link" target="blank">&#128240; ADAS Technologies that Improve Vehicle Safety</a></p><br>
     <p><a href="https://www.assemblymag.com/articles/96289-teijin-and-applied-ev-develop-lightweight-autonomous-vehicle" class="news_link" target="blank">&#128240;  Teijin and Applied EV Develop Lightweight Autonomous Vehicle</a></p><br>
     <p><a href="https://www.rochestermn.gov/home/showpublisheddocument?id=18472" class="news_link" target="blank">&#128240; Recommended Parking Ramp Design Guidelines</a></p><br>
   </section>
  </div>

 <footer>
  <div class="social">

  <button id="myBtn" onclick="topper()">Go Top</button>
  <script src="js/scroll.js"></script>

    <h4>Follow Us On</h4>
   <!-- Social Media -->
   <ul>
    <a href="https://www.facebook.com/" title="FACEBOOK"><li class="facebook"><i class="fab fa-facebook"></i></li></a>
    <a href="https://www.instagram.com" title="INSTRAGRAM"><li class="instagram"><i class="fab fa-instagram"></i></li></a>
    <a href="https://www.youtube.com/" title="Youtube"><li class="youtube"><i class="fab fa-youtube"></i></li></a><br>
  </ul>

   <div class="copyright">
     Copyright © 2021. All rights; For self driving
   </div>

  </div>
 </footer>

  </body>
</html>
