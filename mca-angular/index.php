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
        <label>Interests</label>
        <div class="input-group">                                        
          <input type="text" id="interest1" "name="interest1" ng-model="registerData.interest1" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="int_list1" class="dropdown-menu">
                <li><a href="">Animation</a></li>
                <li><a href="">Arts & Crafts</a></li>
                <li><a href="">Computer Coding</a></li>
                <li><a href="">Computer Games</a></li>
                <li><a href="">Drawing</a></li>
                <li><a href="">Filmography</a></li>
                <li><a href="">Internet Surfing</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Reading</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Social Media</a></li>
                <li><a href="">Vlogging</a></li>
                <li><a href="">Watching TV/Movie</a></li>
            </ul>
            </div>
        </div>     
      </div>

      

      

      <div class="form-group">
        
        <div class="input-group">                                        
          <input type="text" id="interest2" name="interest2" ng-model="registerData.interest2" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="int_list2" class="dropdown-menu">
                <li><a href="">Animation</a></li>
                <li><a href="">Arts & Crafts</a></li>
                <li><a href="">Computer Coding</a></li>
                <li><a href="">Computer Games</a></li>
                <li><a href="">Drawing</a></li>
                <li><a href="">Filmography</a></li>
                <li><a href="">Internet Surfing</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Reading</a></li>
                <li><a href="">Social Media</a></li>
                <li><a href="">Vlogging</a></li>
                <li><a href="">Watching TV/Movie</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
        
        <div class="input-group">                                        
          <input type="text" id="interest3" name="interest3" ng-model="registerData.interest3" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="int_list3" class="dropdown-menu">
                <li><a href="">Animation</a></li>
                <li><a href="">Arts & Crafts</a></li>
                <li><a href="">Computer Coding</a></li>
                <li><a href="">Computer Games</a></li>
                <li><a href="">Drawing</a></li>
                <li><a href="">Filmography</a></li>
                <li><a href="">Internet Surfing</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Reading</a></li>
                <li><a href="">Social Media</a></li>
                <li><a href="">Vlogging</a></li>
                <li><a href="">Watching TV/Movie</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
       
        <div class="input-group">                                        
          <input type="text" id="interest4" name="interest4" ng-model="registerData.interest4" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="int_list4" class="dropdown-menu">
                <li><a href="">Animation</a></li>
                <li><a href="">Arts & Crafts</a></li>
                <li><a href="">Computer Coding</a></li>
                <li><a href="">Computer Games</a></li>
                <li><a href="">Drawing</a></li>
                <li><a href="">Filmography</a></li>
                <li><a href="">Internet Surfing</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Reading</a></li>
                <li><a href="">Social Media</a></li>
                <li><a href="">Vlogging</a></li>
                <li><a href="">Watching TV/Movie</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
      
        <div class="input-group">                                        
          <input type="text" id="interest5" name="interest5" ng-model="registerData.interest5" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="int_list5" class="dropdown-menu">
                <li><a href="">Animation</a></li>
                <li><a href="">Arts & Crafts</a></li>
                <li><a href="">Computer Coding</a></li>
                <li><a href="">Computer Games</a></li>
                <li><a href="">Drawing</a></li>
                <li><a href="">Filmography</a></li>
                <li><a href="">Internet Surfing</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Reading</a></li>
                <li><a href="">Social Media</a></li>
                <li><a href="">Vlogging</a></li>
                <li><a href="">Watching TV/Movie</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
        <label>Skills</label>
        <div class="input-group">                                        
          <input type="text" id="skill1" name="skill1" ng-model="registerData.skill1" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="skill_list1" class="dropdown-menu">
                <li><a href="">Analytical</a></li>
                <li><a href="">Critical Thinking</a></li>
                <li><a href="">Detail-oriented</a></li>
                <li><a href="">Math</a></li>
                <li><a href="">Multi-tasking</a></li>
                <li><a href="">Networking</a></li>
                <li><a href="">Presentation Skills</a></li>
                <li><a href="">Technical</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
        
        <div class="input-group">                                        
          <input type="text" id="skill2" name="skill2" ng-model="registerData.skill2" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="skill_list2" class="dropdown-menu">
                <li><a href="">Analytical</a></li>
                <li><a href="">Critical Thinking</a></li>
                <li><a href="">Detail-oriented</a></li>
                <li><a href="">Math</a></li>
                <li><a href="">Multi-tasking</a></li>
                <li><a href="">Networking</a></li>
                <li><a href="">Presentation Skills</a></li>
                <li><a href="">Technical</a></li>
            </ul>
            </div>
        </div>     
      </div>

      <div class="form-group">
        
        <div class="input-group">                                        
          <input type="text" id="skill3" name="skill3" ng-model="registerData.skill3" class="form-control" />
            <div class="input-group-btn">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </button>
              <ul id="skill_list3" class="dropdown-menu">
                <li><a href="">Analytical</a></li>
                <li><a href="">Critical Thinking</a></li>
                <li><a href="">Detail-oriented</a></li>
                <li><a href="">Math</a></li>
                <li><a href="">Multi-tasking</a></li>
                <li><a href="">Networking</a></li>
                <li><a href="">Presentation Skills</a></li>
                <li><a href="">Technical</a></li>
            </ul>
            </div>
        </div>     
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
        <div class="col-sm-3">
          <div class="button pull-right">
            <a href="#" class="btn btn-outline-success btn-sm">Edit Profile <i class="fa fa-pencil"></i></a>
          </div>
        </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3"> 
          <a href="#"> <img class="rounded-circle" src="//images.weserv.nl/?url=i.imgur.com/Md9jS0Ib.jpg" alt="Rick" ></a>
        </div>

        <div class="col-sm-6"> 
          <h5Associate Professor, <small>Dept. of Alien Agriculture, Jaarvlar-3 University</small></h5>
          <p>PhD on Molecular Shwanky Physics</p>
          <p>Address: 123 Cuba str Tampa, Fl, Earth 137</p>
        </div>

        <div class="col-sm-3 text-center social">
          <span class="number">Phone:<strong>+0001732226402</strong></span>
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
          <div class="card card-block text-xs-left">
            <h5><i class="fa fa-user fa-fw"></i>Biography</h5>
            
              <p>Rick Sanchez C-137 is the father of Beth Smith, and the grandfather of Morty and Summer Smith. Aged 60 years old, he is said to have been away from the family for around fourteen years prior to the events of the show's first episode, "Pilot". He frequently travels on adventures through space and other planets and dimensions with his grandson Morty.</p>
          </div>
        </div>
      </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
          <h5><i class="fa fa-rocket fa-fw"></i>Interests</h5>
          <ul class="list-group" style="margin-top:15px;margin-bottom:15px;">
            <li class="list-group-item">Cloud & Parallel Computing</li>
            <li class="list-group-item">Big Data Analysis and Management</li>
            <li class="list-group-item">High-performance and Low-Power Real-Time Systems</li>
            <li class="list-group-item">Mobile Embedded Systems and Network Security</li>
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

//Skills and Interest Dropdown
$('#skill_list1 li').on('click', function(){
    $('#skill1').val($(this).text());
});
$('#skill_list2 li').on('click', function(){
    $('#skill2').val($(this).text());
});
$('#skill_list3 li').on('click', function(){
    $('#skill3').val($(this).text());
});

$('#int_list1 li').on('click', function(){
    $('#interest1').val($(this).text());
});
$('#int_list2 li').on('click', function(){
    $('#interest2').val($(this).text());
});
$('#int_list3 li').on('click', function(){
    $('#interest3').val($(this).text());
});
$('#int_list4 li').on('click', function(){
    $('#interest4').val($(this).text());
});
$('#int_list5 li').on('click', function(){
    $('#interest5').val($(this).text());
});



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
