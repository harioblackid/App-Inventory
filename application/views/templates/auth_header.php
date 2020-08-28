<!DOCTYPE html>
<html>
<head>
    <title><?=$title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This web only for education">
    <meta name="author" content="Hario Saloko">
    <link rel="icon" 
      type="image/png" 
      href="<?=base_url('assets/img/icon'); ?>/favicon.ico">
    <!--Import Google Icon Font-->
      <link href="<?=base_url('assets/'); ?>fonts/material.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url('assets/'); ?>css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
           /* label color */
           .e-input-field label {
             color: #000;
           }
           /* label focus color */
           .e-input-field input[type=text]:focus + label,.e-input-field input[type=password]:focus + label {
             color: #d32f2f !important;
           }
           /* label underline focus color */
           .e-input-field input[type=text]:focus,.e-input-field input[type=password]:focus {
             border-bottom: 1px solid #d32f2f !important;
             box-shadow: 0 1px 0 0 #d32f2f !important;
           }
           /* valid color */
           .e-input-field input[type=text].valid,.e-input-field input[type=password].valid {
             border-bottom: 1px solid #d32f2f !important;
             box-shadow: 0 1px 0 0 #d32f2f !important;
           }
           /* invalid color */
           .e-input-field input[type=text].invalid,.e-input-field input[type=password].invalid {
             border-bottom: 1px solid #d32f2f !important;
             box-shadow: 0 1px 0 0 #d32f2f !important;
           }
           /* icon prefix focus color */
           .e-input-field .prefix.active {
             color: #d32f2f !important;
           }

           body {
              background: url(<?=base_url('assets/img/'); ?>/bg.jpg) no-repeat fixed;
              -webkit-background-size: 100% 100%;
              -moz-background-size: 100% 100%;
              -o-background-size: 100% 100%;
              background-size: 100% 100%;
            }
        </style>

</head>
<body>
