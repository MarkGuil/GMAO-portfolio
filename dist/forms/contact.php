<?php
if (session_id() == '') {
    session_start();
}

include 'mail.php';

if (isset($_POST['submit-contact-form'])) {
    if (!isset($_POST['name'])) {
        session_result('Oops..', 'error', 'Name is required. Please try again');
    }
    if (!isset($_POST['email'])) {
        session_result('Oops..', 'error', 'Email is required. Please try again');
    }
    if (!isset($_POST['subject'])) {
        session_result('Oops..', 'error', 'Subject is required Please try again');
    }
    if (!isset($_POST['message'])) {
        session_result('Oops..', 'error', 'Message is required Please try again');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $body = '<p><b>Contact Details</b></p>
                    <hr>
                    <p>Name: <b>' . $name . '</b></p>
                    <p>Email: <b>' . $email . '</b></p><br>
                    <p><b>Hi there,</b></p>
                    <p>' . $message . '</p>';

    if(setContactUs($subject,$body)){
        session_result('Success', 'success', 'Your email has been sent successfully');
        header("location:../");
        exit();
    }
    session_result('Oops..', 'error', 'Something went wrong. Please try again');
    header("location:../");
    exit();
}

function session_result($title, $icon, $message)
{
    $_SESSION['form_title'] = $title;
    $_SESSION['form_icon'] = $icon;
    $_SESSION['form_message'] = $message;
    header("location:../");
    exit();
}
