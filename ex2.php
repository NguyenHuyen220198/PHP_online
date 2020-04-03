<html>
   
   <head>
      <title>Tính tổng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

       <h1>Tính tổng của dãy S= 1+2/2!+....+n/n!</h1>
       <h3>Nhập số n= </h3>
       	<form method="post" action="ex2.php">
            <input type="text" name="n" id="">
            <input type="submit" name="calculate" value="Tính" />
        </form>
        
        <?php 
        	if (isset($_POST['calculate']) && $_POST['calculate'])
            {	
                $n=$_POST['n'];
                $sum =0;  $gt=1;
				for($x=1; $x <= $n; $x++)  
				{  
					$gt*=$x;
		 			 $sum +=$x/$gt;  
				}  
				echo "Tổng của dãy là : ". $sum;
		}
         ?>
       
   </body>
</html>
