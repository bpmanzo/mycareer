<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <title>myCareer Adventure</title>



  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- Bootstrap core CSS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="main.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>

 </head>
 <body id="page-top">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">My Career Adventure</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.apc.edu.ph/">APC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.ibm.com/ph-en">IBM</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
  <br />
   
  <br />

  <div ng-app="login_register_app" ng-controller="login_register_controller">
   <?php
   
   if(!isset($_SESSION["fname"]))
   {
   ?>
   <br />
   
   <br />
   <h3 align="center">myCareer Adventure</h3>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>

   
   <div class="panel panel-default" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()" type="container">
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="loginData.email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="loginData.password" class="form-control" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />

       <input type="button" name="register_link" class="btn btn-secondary" ng-click="showRegister()" value="Register" />
      </div>
     </form>
    </div>


   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />

   </div>

   <div class="panel panel-default" ng-show="register_form">
    <div class="panel-heading">
     <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitRegister()">
      <div class="form-group">
       <label>Enter Your First Name</label>
       <input type="text" name="fname" ng-model="registerData.fname" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Last Name</label>
       <input type="text" name="lname" ng-model="registerData.lname" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="registerData.email" class="form-control" />
      </div>

      <div class="form-group">
        <label>Education:</label>
        <select name="education" ng-model="registerData.education" class="form-control" id="education">
                <option>K12 (Grade 12)</option>
                <option>College</option>
                <option>With Degree</option>
        </select>     
      </div>

      <div class="form-group">
        <label>Degree:</label>
        <select name="degree" ng-model="registerData.degree" class="form-control" id="degree">
                <option>Computer Engineering</option>
                <option>Computer Science</option>
                <option>Information Technology</option>
                <option>Not Applicable</option>
        </select>     
      </div>

      <div class="form-group">
        <label>Work Experience:</label>
        <select name="workexp" ng-model="registerData.workexp" class="form-control" id="workexp">
                <option>1-4 experience</option>
                <option>None</option>
                <option>OJT/Intern</option>
        </select>     
      </div>

      <div class="form-group">
        <label>Interest:</label>
        <select name="interest1" ng-model="registerData.interest1" class="form-control" id="interest1">
                <option>Computer Games</option>
                <option>Music</option>
                <option>Social Media</option>
        </select>     
      </div>

      <!-- <div class="form-group">

        <select name="interest2" ng-model="registerData.interest2" class="form-control" id="interest2">
                <option>Computer Games</option>
                <option>Music</option>
                <option>Social Media</option>
        </select>     
      </div>

      <div class="form-group">

        <select name="interest3" ng-model="registerData.interest3" class="form-control" id="interest3">
                <option>Computer Games</option>
                <option>Music</option>
                <option>Social Media</option>
        </select>     
      </div> -->

<!--       <div class="form-group">

        <select name="interest4" ng-model="registerData.interest4" class="form-control" id="interest4">
                <option>Animation</option>
                <option>Arts & Crafts</option>
                <option>Computer Coding</option>
                <option>Computer Games</option>
                <option>Drawing</option>
                <option>Filmography</option>
                <option>Internet Surfing</option>
                <option>Music</option>
                <option>Photography</option>
                <option>Reading</option>
                <option>Social Media</option>
                <option>Vlogging</option>
                <option>Watching TV/Movie</option>
        </select>     
      </div>

      <div class="form-group">
        <select name="interest5" ng-model="registerData.interest5" class="form-control" id="interest5">
                <option>Animation</option>
                <option>Arts & Crafts</option>
                <option>Computer Coding</option>
                <option>Computer Games</option>
                <option>Drawing</option>
                <option>Filmography</option>
                <option>Internet Surfing</option>
                <option>Music</option>
                <option>Photography</option>
                <option>Reading</option>
                <option>Social Media</option>
                <option>Vlogging</option>
                <option>Watching TV/Movie</option>
        </select>     
      </div> -->

      <div class="form-group">
        <label>Skills:</label>
        <select name="skill1" ng-model="registerData.skill1" class="form-control" id="skill1">
                <option>Analytical</option>
                <option>Critical Thinking</option>
                <option>Detail-oriented</option>
                <option>Math</option>
                <option>Multi-tasking</option>
                <option>Presentation Skills</option>
                <option>Technical</option>
        </select>     
      </div>

      <div class="form-group">
        
        <select name="skill2" ng-model="registerData.skill2" class="form-control" id="skill2">
                <option>Analytical</option>
                <option>Critical Thinking</option>
                <option>Detail-oriented</option>
                <option>Math</option>
                <option>Multi-tasking</option>
                <option>Presentation Skills</option>
                <option>Technical</option>
        </select>     
      </div>

      <div class="form-group">
        
        <select name="skill3" ng-model="registerData.skill3" class="form-control" id="sel3">
                <option>Analytical</option>
                <option>Critical Thinking</option>
                <option>Detail-oriented</option>
                <option>Math</option>
                <option>Multi-tasking</option>
                <option>Presentation Skills</option>
                <option>Technical</option>
        </select>     
      </div>
      
          

      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="registerData.password" class="form-control" />
      </div>

      <div class="form-group" align="center">
       <input type="submit" name="register" class="btn btn-primary" value="Register" />
       <input type="button" name="login_link" class="btn btn-secondary" ng-click="showLogin()" value="Login" />
      </div>
     </form>
    </div>
   </div>
   <?php
   }
   else
   {
   ?>
   <!-- Login Success -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">My Career Adventure</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#career">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="btn btn-outline-secondary" role="button">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome - <?php echo $_SESSION["fname"];?></h1>
      <p class="lead">Start your adventure</p>
    </div>
  </header>

  <section id="profile">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Career Profile</h2>
          <p class="lead"><h5><?php echo $_SESSION["degree"];?>, <small>Degree</small></h5></p>
          <p>Education: <?php echo $_SESSION["education"];?></p>
          <p>Work Experience: <?php echo $_SESSION["workexp"];?></p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut vulputate turpis. Donec pulvinar diam quis purus consectetur, consectetur sodales lacus rhoncus. Cras mauris ipsum, venenatis ac interdum ac, egestas nec augue. In ipsum turpis, interdum at lorem a, ullamcorper laoreet mi. Mauris gravida maximus ullamcorper.</p>
          <h5>Skills and Interests</h5>
          <ul>
            <li class="list-group-item"><?php echo $_SESSION["interest1"];?></li>
            <li class="list-group-item"><?php echo $_SESSION["skill1"];?></li>
            <li class="list-group-item"><?php echo $_SESSION["skill2"];?></li>
            <li class="list-group-item"><?php echo $_SESSION["skill3"];?></li>
          </ul>
          
        </div>
      </div>
    </div>
  </section>

  <section id="career" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Careers For You</h2>
          <ul>  
            <li class="list-group-item"><?php echo $_SESSION["hot_job1"];?> (<?php echo $_SESSION["demand1"];?>) </li>
            <li class="list-group-item"><?php echo $_SESSION["hot_job2"];?> (<?php echo $_SESSION["demand2"];?>) </li>
            <li class="list-group-item"><?php echo $_SESSION["hot_job3"];?> (<?php echo $_SESSION["demand3"];?>) </li>
          </ul>

          <p>By making an account from the website, users will input their education, degree, work experience, interests, and skills. These unsorted data will be registered and sorted, by Watson Discovery. Knowledge studio on the other hand will take key words as data and compare it from registered and/or collected from public data sources and to find a match.</p> 
          <p>After comparing and finding a match, it will then sort it from five categories: H1 for in demand now & in the future, H2 for in demand now, stable in the future, M1 for stable now and in the future, M2 for stable now low in the future and L for low in demand. After sorting it will present in the “Careers for You” for the user to decide.</p>

          <p>To know more about these careers, click the <i><b>Watson Assistant</b></i> located at the lower right part of your screen.</p>

          <p>H1 - in demand now & in the future</p>
          <p>H2 - in demand now, stable in the future</p>
          <p>M1 - stable now & in the future</p>
          <p>M2 - stable now, low in the future</p>
          <p>L - low demand</p>

        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About the Project</h2>
          <p class="lead">This application named, “MyCareer Adventure” was created in order to help students in deciding their career path based on their skills and interest. The suggested jobs are classified into six (6) classifications; in demand now and in the future, in demand now and stable in the future, stable now and in the future, stable now and low demand in the future, low demand.</p>
          <p class="lead">It can predict suitable jobs for the users that are in-demand and provide a learning path in order for the user to achieve that job. The learning path includes the top schools that excels in producing students that are competent and industry ready. Accredited training centers are also included in order to get a certificate that will surely help the users to land in that job. Moreover, using the application could lessen the struggle of many students in choosing well suited courses for them and to prevent them from shifting to others courses just because they are still undecided on what career they will take.</p>



        </div>
      </div>
    </div>
  </section>

<!-- Watson Assistant   -->
<script src=https://assistant-web.watsonplatform.net/loadWatsonAssistantChat.js></script>
<script>
  window.loadWatsonAssistantChat({
    integrationID: "38e4b1e2-e8d0-41ff-ae2e-66285594ec3d", // The ID of this integration.
    region: "us-south" // The region your integration is hosted in.
  }).then(function(instance){
    instance.render();
  });
</script>


   <?php
   }
   ?>

  </div>
 </body>
   <!-- Footer -->
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; My Career Adventure 2020</p>
    </div>
    <!-- /.container -->
 </footer>


     <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
 <script src="scrolling-nav.js"></script>

</html>

  
<script>





var app = angular.module('login_register_app', []);
app.controller('login_register_controller', function($scope, $http){
 $scope.closeMsg = function(){
  $scope.alertMsg = false;
 };

 $scope.login_form = true;

 $scope.showRegister = function(){
  $scope.login_form = false;
  $scope.register_form = true;
  $scope.alertMsg = false;
 };

 $scope.showLogin = function(){
  $scope.register_form = false;
  $scope.login_form = true;
  $scope.alertMsg = false;
 };

 $scope.submitRegister = function(){
  $http({
   method:"POST",
   url:"register.php",
   data:$scope.registerData
  }).success(function(data){
   $scope.alertMsg = true;
   if(data.error != '')
   {
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.error;
   }
   else
   {
    $scope.alertClass = 'alert-success';
    $scope.alertMessage = data.message;
    $scope.registerData = {};
   }
  });
 };

 $scope.submitLogin = function(){
  $http({
   method:"POST",
   url:"login.php",
   data:$scope.loginData
  }).success(function(data){
   if(data.error != '')
   {
    $scope.alertMsg = true;
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.error;
   }
   else
   {
    location.reload();
   }
  });
 };

});
</script>
