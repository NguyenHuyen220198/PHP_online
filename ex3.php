<html>
   
   <head>
      <title>Bảng cửu chương</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

       <h1>Bảng cửu chương dùng for</h1>
        
		<table border="1px">
			<tr>
			<?php
			for($i = 1; $i < 10; $i ++) {
			    echo "<td>";
			    for($j = 1; $j <= 10; $j ++) {
			        echo "$i x $j = " . ($i * $j);
			        echo "<br>";
			    }
			    echo "</td>";
			}
			?>
			</tr>
		</table>
       
   </body>
</html>
