<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Productos</title>
     <?=$this->load->view('header/style');?>
  </head>

<body>	

 <?=$this->load->view('header/menu');?>
 	
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>SKU</th>
						<th>NOMBRE PRODUCTO</th>
						<th>DESCRIPCION</th>
						<th>CANTIDAD</th>
						<th>PRECIO INDIVIDUAL</th>
						<th>PRECIO TOTAL</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->sku."</td>";
								echo "<td>".$row->nombre."</td>";
								echo "<td>".$row->descripcion."</td>";
								echo "<td>".$row->cantidad."</td>";
								echo "<td>".$row->precio_individual."</td>";
								echo "<td>".$row->precio_total."</td>";
								echo "<td>";
						
							echo "</tr>";
						}	
					}				
				?>
				</tbody>
			</table>	
	
</body>
