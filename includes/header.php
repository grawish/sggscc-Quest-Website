<?php
include "navbar.php";
function head($title, $admin = false)
{
    if ($admin) {
        echo '<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>' . $title . ' - QUEST - The Quizzing Society of SGGSCC</title>
    <meta name="description" content="Quest, the Quizzing Society of Sri Guru Gobind Singh College of Commerce, Delhi University was formed in March 2012 with the mission of inculcating knowledge and primarily, Quizzing, into the minds of all students of the college.

 It has become one of the most renowned quizzing societies of Delhi University. It aims to promote Quizzing Culture through its regular events. It has already been host to several inter-college quizzes. Members of Quest have been going for quizzes around Delhi-NCR and have made a mark for themselves at various quizzing competitions by winning accolades.">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://use.fontawesome.com/4cf173f59d.js"></script>
</head>

<body>
';
    } else {
        echo '<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>' . $title . ' - QUEST - The Quizzing Society of SGGSCC</title>
    <meta name="description" content="Quest, the Quizzing Society of Sri Guru Gobind Singh College of Commerce, Delhi University was formed in March 2012 with the mission of inculcating knowledge and primarily, Quizzing, into the minds of all students of the college.

 It has become one of the most renowned quizzing societies of Delhi University. It aims to promote Quizzing Culture through its regular events. It has already been host to several inter-college quizzes. Members of Quest have been going for quizzes around Delhi-NCR and have made a mark for themselves at various quizzing competitions by winning accolades.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/Card-hover-affect-2.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://use.fontawesome.com/4cf173f59d.js"></script>
</head>

<body>
';
    }

}