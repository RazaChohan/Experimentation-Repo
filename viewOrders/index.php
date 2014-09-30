<?php
    $orders = array(); //array containing orders
    
    $o1 = array(); //indexed array containing per order info
    $o1['Order_Id']='123';
    $o1['Sp_Name']='Jamshad Ahmad';
    $o1['Date_Time']='15-Jun-12 /  6:24:12';
    $orderLineItems1 = array();// array containing order_line_items per order
    //product name, unit_price , quantity , discount
    $orderLineItems1[0]= array('PN'=>'Burger','UP'=>'50','Q'=>'2','D'=>'0');
    $orderLineItems1[1]= array('PN'=>'Shawarma','UP'=>'70','Q'=>'1','D'=>'0');
    $orderLineItems1[2]= array('PN'=>'Reg. Drink','UP'=>'30','Q'=>'2','D'=>'0');
    $o1['OLI']=$orderLineItems1;
    
    $orders[0]=$o1;
    
    $o2 = array();
    $o2['Order_Id']='238';
    $o2['Sp_Name']='Jamshad Ahmad';
    $o2['Date_Time']='20-Sep-12 /  9:10:15';
    $orderLineItems2 = array(); 
    $orderLineItems2[0]= array('PN'=>'Pizza','UP'=>'110','Q'=>'1','D'=>'0');
    $orderLineItems2[1]= array('PN'=>'Jumbo Dring','UP'=>'110','Q'=>'1','D'=>'0');
    $o2['OLI']=$orderLineItems2;
    
    $orders[1]=$o2;
    
    $o3 = array();
    $o3['Order_Id']='341';
    $o3['Sp_Name']='Jamshad Ahmad';
    $o3['Date_Time']='22-Oct-13 / 11:24:45';
    $orderLineItems3 = array(); 
    $orderLineItems3[0]= array('PN'=>'Reg. Drink','UP'=>'30','Q'=>'1','D'=>'0');
    $o3['OLI']=$orderLineItems3;
    $orders[2]=$o3;
    
    include_once 'showOrders.php';
    