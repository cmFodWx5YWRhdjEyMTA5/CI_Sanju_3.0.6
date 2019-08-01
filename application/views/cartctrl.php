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
            <td>Qty</td>
          </tr>
       
        <?php 
			/*
			echo '<pre>';
			print_r($Product); exit;
			*/
			$key=0;	
			foreach($Product as $res) {
					
		?>
          <tr>
            <td><?php echo $res->Pro_Id ; ?></td>
            <td><?php echo $res->Pro_Name ; ?></td>
            <td><?php echo $res->Pro_Price ; ?></td>
            <td>
            	<a href="?Pro_Id='<?php echo $key; ?>'">Add to Cart</a>
                
                <?php /*?><?= anchor("cartctrl/index/{$res->Pro_Id}",'Add to cart',['class'=>'','style'=>'margin-top:14px;']);?><?php */?>
            </td>
          </tr>
        <?php
				$key++;
				}
				//endforeach;
		?> 
       
        </table>

</body>
</html>