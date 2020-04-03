<html>
   
   <head>
      <title>đảo mảng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

       <h1>Đảo ngược mảng ban đầu</h1>
       <h3> Mảng ban đầu là: <br> 1 4 2 6 9 100 4</h3>
       <h3> Mảng sau khi đảo là: </h3>
       <h3>
       	<?php 
			     $arr = array(1,4,2,6,9,100,4);
			     $size = sizeof($arr);

			     for($i=$size-1; $i>=0; $i--){
			         echo  $arr[$i]." ";
			     }
			 
         ?>
       </h3>
        
       
   </body>
</html>

