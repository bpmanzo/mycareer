<?php

//register.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$validation_error = '';

if(empty($form_data->fname))
{
 $error[] = 'First name is required';
}
else
{
 $data[':fname'] = $form_data->fname;
}

if(empty($form_data->lname))
{
 $error[] = 'Last name is required';
}
else
{
 $data[':lname'] = $form_data->lname;
}

if(empty($form_data->skill1))
{
 $error[] = 'Choose three(3) skills';
}
else
{
 $data[':skill1'] = $form_data->skill1;
}

if(empty($form_data->skill2))
{
 $error[] = 'Choose three(3) skills';
}
else
{
 $data[':skill2'] = $form_data->skill2;
}

if(empty($form_data->skill3))
{
 $error[] = 'Choose three(3) skills';
}
else
{
 $data[':skill3'] = $form_data->skill3;
}

if(empty($form_data->interest1))
{
 $error[] = 'Choose five(5) interests';
}
else
{
 $data[':interest1'] = $form_data->interest1;
}

if(empty($form_data->interest2))
{
 $error[] = 'Choose five(5) interests';
}
else
{
 $data[':interest2'] = $form_data->interest2;
}

if(empty($form_data->interest3))
{
 $error[] = 'Choose five(5) interests';
}
else
{
 $data[':interest3'] = $form_data->interest3;
}

if(empty($form_data->interest4))
{
 $error[] = 'Choose five(5) interests';
}
else
{
 $data[':interest4'] = $form_data->interest4;
}

if(empty($form_data->interest5))
{
 $error[] = 'Choose five(5) interests';
}
else
{
 $data[':interest5'] = $form_data->interest5;
}

if(empty($form_data->education))
{
 $error[] = 'Education is required';
}
else
{
 $data[':education'] = $form_data->education;
}





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
else
{
 $data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($error))
{
 $query = "
 INSERT INTO register (fname, lname, skill1, skill2, skill3, interest1, interest2, interest3, interest4, interest5, education, email, password) VALUES (:fname, :lname, :skill1, :skill2, :skill3, :interest1, :interest2, :interest3, :interest4, :interest5, :education, :email, :password)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $message = 'Registration Completed';
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error'  => $validation_error,
 'message' => $message
);

echo json_encode($output);


?>
