<?php
    $products = array(); //array contaning products
    
    $p1 = array(); //indexed array contaning one product
    $p1['Name']='Burger';
    $p1['Price']='100';
    $p1['Type']='Item';
    $products[0]=$p1;
    
    $p2 = array();
    $p2['Name']='Shawarma';
    $p2['Price']='150';
    $p2['Type']='Item';
    $products[1]=$p2;
    
    $p3 = array();
    $p3['Name']='Happy Meal';
    $p3['Price']='540';
    $p3['Type']='Deal';
    $products[2]=$p3;           //Suppose we got this array of products from DB
    
    include_once 'showProducts.php';
    