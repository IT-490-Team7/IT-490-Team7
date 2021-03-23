<?php

include('../db/config.php');
///function for safe insertion into the database without errors
function escape($string){
    global $con;

    return mysqli_real_escape_string($string);

}


///this function checks if email exists in the database return true or false
function email_exist($email){
    global $con;

    $sql_email = "SELECT * FROM users WHERE email = '$email'";

    $sql_query = mysqli_query($con, $sql_email);

    $sql_rows =  mysqli_num_rows($sql_query);

    if ($sql_rows == 1){

        return true;

    }else{

        return false;
    }
}

//This function checks for the length of the password it must be 6 or more return true or false
function check_pass_length($password){
    global $con;

    if (strlen($password) >= 6){

        return true;

    }else{

        return  false;
    }

}

/*function register($name, $email, $password){
    global $con;

    $name    = escape($name);
    $email    = escape($email);
    $password = escape($password);


    if (email_exist($email)){

        return false;

    }elseif (!check_pass_length($password)){

        return false;

    }else{

        $password = password_hash($password, PASSWORD_DEFAULT);

        $insert_user = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";

        mysqli_query($con, $insert_user);

        return true;

    }

}
*/
