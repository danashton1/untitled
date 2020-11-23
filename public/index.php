<?php
include_once "header1.php";
?>
<style>
    body, html{
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }
    .bgimg{
        background-position: center;
        background-size: cover;
        background-image: url("../assets/img/SUShop.jpg");
        min-height: 35%;
    }
</style>
<header class="bgimg" id="home"></header>
<div class="container-fluid mt-5 px-5">
<div class="row">
    <div class="col-sm-12">
        <h1>Welcome</h1>
        <p>this is the paragraph i wrote</p>
    </div>
</div>
    <div class="row">
        <div class="col-sm-1"><a href="request.php" class="btn btn-info">Request</a></div>
        <div class="col-sm-1"><a href="viewRequest.php" class="btn btn-warning">View</a></div>
        <div class="col-sm-10">
    </div>
</div>


    <?php
    include_once "footer.php";
    ?>


