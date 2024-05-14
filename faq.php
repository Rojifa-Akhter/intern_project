<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <title>Driverless</title>
</head>
<body>
  <!-- Logo -->
  <div id="logo">
  <a>WITHOUT DRIVER AUTOMOBILES</a>
      <img src="img/logo.png" class="logo" alt="Logo">

  </div>

  <h2>FAQ</h2>

  <button class="accordion">WHAT IS AN AUTONOMOUS VEHICLE?</button>
  <div class="panel">
    <p>An autonomous vehicle, or a driverless vehicle, is one that is able to operate itself and perform necessary functions without any human intervention, through ability to sense its surroundings.</p>
  </div>

  <button class="accordion">How many Levels are there of Autonomous Vehicles ?</button>
  <div class="panel">
    <p>There are <b>Six (6)</b> Levels</p>
  </div>

  <button class="accordion">What are the advantages of Autonomous Vehicles ?</button>
  <div class="panel">
    <p>Autonomous vehicle advantages that come with an autonomous car are elimination of driving fatigue and being able to sleep during overnight journeys.</p>
  </div>

  <button class="accordion">Do you need a human to drive an autonomous car?</button>
  <div class="panel">
    <p>An autonomous car is a vehicle capable of sensing its environment and operating without human involvement. A human passenger is not required to take control of the vehicle at any time, nor is a human passenger required to be present in the vehicle at all.</p>
  </div>
  
  <button class="accordion">What's the utilitarian approach to self driving cars?</button>
  <div class="panel">
    <p>People often talk about self-driving cars taking a utilitarian approach on the road: the car acts in a way that maximises benefit for the most amount of people. But there's also the negative approach: you may want the car to drive defensively and minimise risk for the occupant only, increasing risk for everyone else.</p>
  </div>

  <button class="accordion">How are autonomous cars going to work in the future?</button>
  <div class="panel">
    <p>When autonomous vehicles can work together – share data – it's where the future of autonomous vehicles really shine. Not to mention, private vehicles are parked 95 percent of their life, so if there were a reliable autonomous transport fleet available, it would circumvent a lot of this downtime.</p>
  </div>

  <button class="accordion">How autonomous cars will change the world?</button>
  <div class="panel">
    <p>If thought out, planners say, autonomous vehicles could increase car-sharing, which would reduce traffic congestion and air pollution. Because the technology will allow these vehicles to travel closer together, they will take up less lane space.</p>
  </div>

  <button class="accordion">How will self driving cars impact the future?</button>
  <div class="panel">
    <p>It is estimated that when autonomous vehicles come in, travel time could be cut by as much as 40 percent. ... Self-driving cars could be a cure for traffic congestion, and people will have less to worry about getting stuck for hours in traffic jams.</p>
  </div>

  <button class="accordion">Are there any ethical problems with autonomous cars?</button>
  <div class="panel">
    <p>Autonomous vehicles have massive implications making the issue of implementing them in our world both puzzling and problematic. The problems that cars bring up can be broken down to ethical, legal, or economical dilemmas.</p>
  </div>

  <button class="accordion">How will self-driving cars help the economy?</button>
  <div class="panel">
    <p>The report predicts autonomous vehicles will contribute some $800 billion annually “in economic and societal benefits” when AVs are fully deployed. The benefits will come from cost savings related to reduced crashes, fuel efficiency and better access to transportation.</p>
  </div>

  <script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
  </script>

</body>
</html>
