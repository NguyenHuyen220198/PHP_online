<html>
   
   <head>
      <title>tìm phần tử lớn nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

       <h1>Tìm phần tử lớn nhất trong mảng</h1>
        <?php 
			 $array = [1,4,2,6,9,100,45,8,20];
			$max =$array[0];
			 
			for ($i = 0; $i < count($array); $i++)
			{
			    if($array[$i]>$max) $max=$array[$i];
			}
			 
			echo "Giá trị lớn nhất của mảng array = [1,4,2,6,9,100,45,8,20] là $max";
         ?>
       
   </body>
</html>
