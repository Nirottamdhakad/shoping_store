<?php

    $con=mysqli_connect("localhost", "root", null) or die(mysqli_error($con));
    mysqli_query($con, "CREATE DATABASE store");
    mysqli_query($con, "USE store");


    // create table items
    mysqli_query($con, "create table items ( pid bigint(11) primary key auto_increment, name varchar(50), price bigint(11))" );

    // create table user_items
    mysqli_query($con, "create table user_items ( id bigint(11) primary key auto_increment, user_id bigint(11), item_id bigint(11), status varchar(30))" );
    
    // create table job
    mysqli_query($con, "create table users ( id bigint(11) primary key auto_increment, name varchar(50), email varchar(50), password varchar(50), contact bigint(11), city varchar(50), address varchar(50))" );

?>