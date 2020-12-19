<?php
include "session.php";
?>




<!DOCTYPE HTML>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Fitness</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/circle.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<!--<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">-->
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<style>
body {
    background-color:white;
}

.bg-highlight {
    background-color: #3BAFDA!important;
    color: white!important;
}

.footer-bar-1 .active-nav * {
    color: #3BAFDA!important;
}

.color-highlight {
    color: #3BAFDA!important;
}

.parent {
    width:100%;
}

#circle {
    width:50%; /* 70% of the parent*/
    margin:0 auto;
}

.img-type-1 {
    width:100%;
    height:32vh;
}

.img-type-3 {
    width:100%;
    height:40vh;
}

.img-type-3 {
    width:100%;
    height:60vh;
}

.card.rounded-s.shadow-l {
    height:60vh !important;
}

@media only screen and (max-width: 500px) {

}

.ios-input:checked~.custom-control-label::before {
    background-color: #3BAFDA!important;
}

.list-custom-large a span:not(.badge) {
     margin-top: -5px; 
}

.my-progress {
    border-radius:0;
    height:0.5rem;
    background-color:white;
}

.my-progress-2 {
    height:0.5rem;
}

.progress-bar {
    background-image: linear-gradient(to right, #4cd964, #5ac8fa, #007aff, #34aadc);
    height: 100%;
    position: relative;
}

.input-style-2.has-icon .input-icon {
    position: absolute;
    z-index: 10;
    margin-top: 0px;
    margin-left: 15px;
}

.card-img {
    width:100%;
}

.header .header-title {
    font-size: 16px;
}

.profile-img {
    border-radius:50%;
    height:7vh;
    margin-right:1vh;
}

.profile-img-2 {
    border-radius:50%;
    height:10vh;
    margin-right:1vh;
}
</style>
</head>
<body class="theme-light" data-background="none" data-highlight="aqua2">
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
<div id="page">