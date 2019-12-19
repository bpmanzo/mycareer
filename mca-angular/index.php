<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <title>myCareer Adventure</title>

  <link href="main.css" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
 </head>
 <body>
  <br />
   
  <br />

  <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
   <?php
   
   if(!isset($_SESSION["fname"]))
   {
   ?>
   <h3 align="center">myCareer Adventure</h3>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>

   
   <div class="panel panel-default login_panel" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()">
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
       <br />
       <input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
      </div>
     </form>
    </div>
    
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
       <br />
       <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
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
   <style>
     

   </style>
   

   <header class="header">
    <div class="container">
      <div class="teacher-name">
        <div class="row">
        <div class="col-sm-9">
          <h2><strong>Welcome - <?php echo $_SESSION["fname"];?></strong></h2>
          <a href="logout.php">Logout</a>
        </div>
<!--         <div class="col-sm-3">
          <div class="button pull-right">
            <a href="#" class="btn btn-outline-success btn-sm">Edit Profile <i class="fa fa-pencil"></i></a>
          </div>
        </div> -->
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3"> 
          <a href="#"> <img class="rounded-circle" src="https://www.itsecuritynews.info/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="Rick" ></a>
        </div>

        <div class="col-sm-6"> 
          <h5><?php echo $_SESSION["degree"];?>, <small>Degree</small></h5>
          <p>Education: <?php echo $_SESSION["education"];?></p>
          <p>Work Experience: <?php echo $_SESSION["workexp"];?></p>
        </div>

        <div class="col-sm-3 text-center social">
          <span class="number">Email:<strong><?php echo $_SESSION["email"];?></strong></span>
          <div class="button-email">
            <a href="mailto:arick@yahoo.com" class="btn btn-outline-success btn-block"><i class="fa fa-envelope-o"></i> Send Email</a>
          </div>
          <div class="social-icons">
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" ></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-slideshare fa-stack-1x fa-inverse"></i>
            </span></a>

          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">

  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
          <h5><i class="fa fa-rocket fa-fw"></i>Suited Jobs</h5>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item"><?php echo $_SESSION["hot_job1"];?> (<?php echo $_SESSION["demand1"];?>) </li>
            <li class="list-group-item"><?php echo $_SESSION["hot_job2"];?> (<?php echo $_SESSION["demand2"];?>) </li>
            <li class="list-group-item"><?php echo $_SESSION["hot_job3"];?> (<?php echo $_SESSION["demand3"];?>) </li>
          </ul>
        </div>
    </div>
  </div>
  <div class="row">
        <div class="col-sm-12">
          <div class="card card-block text-xs-left">
            <h5><i class="fa fa-user fa-fw"></i></h5>
            
              <p>H1 - in demand now & in the future</p>
              <p>H2 - in demand now, stable in the future</p>
              <p>M1 - stable now & in the future</p>
              <p>M2 - stable now, low in the future</p>
              <p>L - low demand</p>
          </div>
        </div>
      </div>     

  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
          <h5><i class="fa fa-rocket fa-fw"></i>Interest</h5>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item"><?php echo $_SESSION["interest1"];?></li>
          </ul>
        </div>
    </div>
  </div>    
  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
          <h5><i class="fa fa-rocket fa-fw"></i>Skills</h5>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item"><?php echo $_SESSION["skill1"];?></li>
            <li class="list-group-item"><?php echo $_SESSION["skill2"];?></li>
            <li class="list-group-item"><?php echo $_SESSION["skill3"];?></li>
          </ul>
        </div>
    </div>
  </div>
</div> 



   <?php
   }
   ?>

  </div>
 </body>
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
