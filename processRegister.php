<?php
if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $company = trim($_POST['companyName']);
    $surveyInfo = $_POST['options'];
    $uname = trim($_POST['uname']);
    $pword = trim($_POST['pword']);
    $confirmPword = trim($_POST['confirmPass']);
    if($pword==$confirmPword){
        $query="INSERT INTO citizens (first_name,last_name,email,company,survey_info) VALUES ('$fname','$lname','$email','$company','$surveyInfo')";
        $results = mysqli_query($conn, $query);
    }
}
?>