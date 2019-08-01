<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart Demo</title>
</head>

<body>
		<table width="100%" border="1">
          <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>&nbsp;</td>
          </tr>
       
        <?php 
				$key=0;
				foreach($data as $res) { 
		?>
          <tr>
            <td><?php echo $res['Id'] ; ?></td>
            <td><?php echo $res['Name'] ; ?></td>
            <td><?php echo $res['Price'] ; ?></td>
            <td><a href="?id='<?php echo $res['$key']; ?>'">Add to Cart</a></td>
          </tr>
        <?php
				$key++;
				}
		?> 
       
        </table>

</body>
</html>