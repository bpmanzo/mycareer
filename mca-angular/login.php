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
 SELECT * FROM register 
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
