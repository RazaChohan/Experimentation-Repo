<?php

    $omask = "|%8s |%20s |%20s |\n";   //mask for order
    $imask = "|%5s|%15s|%10s|%8s |%10s|\n";
        printf("These are all Orders:\n");
        
        //printf($mask, "Order ID", "Salesman Name", "Date / Time");
        printf("-------------------------------------------------------\n");
        for($i=0; $i<count($orders) ; $i++){
               printf($omask, "Order ID", "Salesman Name", "Date / Time");
               printf($omask, 
               $orders[$i]['Order_Id'], 
               $orders[$i]['Sp_Name'],  
               $orders[$i]['Date_Time']);
               
               echo " >> Order Line Items\n";
               printf($imask, "L.No.","Item Name", "Item Price", "Quantity","Discount");
               $lineCounter=1;
               for($j=0; $j<count($orders[$i]['OLI']); $j++){
                   printf($imask,
                           $lineCounter++,
                           $orders[$i]['OLI'][$j]['PN'],
                           $orders[$i]['OLI'][$j]['UP'],
                           $orders[$i]['OLI'][$j]['Q'],
                           $orders[$i]['OLI'][$j]['D']
                           );
               }
               printf("\n-------------------------------------------------------\n");
        }
        printf("\n");