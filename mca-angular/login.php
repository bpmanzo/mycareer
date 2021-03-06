<?php

//login.php

include('database_connection.php');

session_start();

$form_data = json_decode(file_get_contents("php://input"));

$validation_error = '';

if(empty($form_data->email))
{
 $error[] = 'Email is Required';
}
else
{
 if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL))
 {
  $error[] = 'Invalid Email Format';
 }
 else
 {
  $data[':email'] = $form_data->email;
 }
}

if(empty($form_data->password))
{
 $error[] = 'Password is Required';
}

if(empty($error))
{
 $query = "
  SELECT *, 
  (select joblist.Job_Name from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 1) 
  AS hot_job1,
  (select joblist.Job_Name from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill2 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 2,1) 
  AS hot_job2,
  (select joblist.Job_Name from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill3 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS hot_job3,
  (select joblist.Demand from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 1) 
  AS demand1,
  (select joblist.Demand from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill2 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 2,1) 
  AS demand2,
  (select joblist.Demand from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill3 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS demand3,
  (select joblist.Schools from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 1) 
  AS school1,
  (select joblist.Schools from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill2 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 2,1) 
  AS school2,
  (select joblist.Schools from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill3 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS school3,
  (select joblist.years_to_be_employed from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS yr1,
  (select joblist.years_to_be_employed from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill2 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS yr2,
  (select joblist.years_to_be_employed from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill3 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS yr3,
  (select joblist.Companies from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill1 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS com1,
  (select joblist.Companies from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill2 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS com2,
  (select joblist.Companies from joblist, register where register.email = :email AND joblist.Skills_Required = register.skill3 AND joblist.Interests = register.interest1 AND joblist.Degree = register.degree AND joblist.Work_Experience = register.workexp AND joblist.Education = register.education LIMIT 3,1) 
  AS com3

  FROM register 
  WHERE email = :email
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $result = $statement->fetchAll();
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    if(password_verify($form_data->password, $row["password"]))
    {
     $_SESSION["fname"] = $row["fname"];
     $_SESSION["lname"] = $row["lname"];
     $_SESSION["email"] = $row["email"];
     $_SESSION["education"] = $row["education"];
     $_SESSION["degree"] = $row["degree"];
     $_SESSION["workexp"] = $row["workexp"];
     $_SESSION["skill1"] = $row["skill1"];
     $_SESSION["skill2"] = $row["skill2"];
     $_SESSION["skill3"] = $row["skill3"];
     $_SESSION["interest1"] = $row["interest1"];
     $_SESSION["hot_job1"] = $row["hot_job1"];
     $_SESSION["hot_job2"] = $row["hot_job2"];
     $_SESSION["hot_job3"] = $row["hot_job3"];
     $_SESSION["demand1"] = $row["demand1"];
     $_SESSION["demand2"] = $row["demand2"];
     $_SESSION["demand3"] = $row["demand3"];
     $_SESSION["school1"] = $row["school1"];
     $_SESSION["school2"] = $row["school2"];
     $_SESSION["school3"] = $row["school3"];
     $_SESSION["yr1"] = $row["yr1"];
     $_SESSION["yr2"] = $row["yr2"];
     $_SESSION["yr3"] = $row["yr3"];
     $_SESSION["com1"] = $row["com1"];
     $_SESSION["com2"] = $row["com2"];
     $_SESSION["com3"] = $row["com3"];

    }
    else
    {
     $validation_error = 'Wrong Password';
    }
   }
  }
  else
  {
   $validation_error = 'Wrong Email';
  }
 }
}
else
{
 $validation_error = implode(", ", $error);
}






$output = array(
 'error' => $validation_error
);

echo json_encode($output);

?>
