<?php

    $mask = "|%-15s |%-12s |%-5s |\n";
        printf("Here is the list of products:\n");
        
        printf($mask, "Name", "Type", "Price");
        printf("---------------------------------------\n");
        for($i=0; $i<3 ; $i++){
               printf($mask, 
               $products[$i]['Name'], 
               $products[$i]['Type'],  
               $products[$i]['Price']);
        }
        printf("\n");