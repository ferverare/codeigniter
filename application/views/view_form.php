<html>
<head>
<title>Codeigniter Form Submit Using Post and Get Method</title>
  <?=$this->load->view('header/style');?>
</head>
<body>
 <?=$this->load->view('header/menu');?>
	<div class="main">
		<div id="content">
			<h3 id='form_head'>Codelgniter Form Submit </h3><br/>
				<div id="form_input">
					<?php

					// Open form and set URL for submit form
					echo form_open('index.php/home/guardar');

					// Show Name Field in View Page
					echo form_label('Sku del producto', 'sku');
					$data= array(
					'type' => 'text',
					'name' => 'sku',
					'placeholder' => 'Sku del producto',
					'class' => 'input'
					);
					echo form_input($data);

					// Show Email Field in View Page
					echo form_label('Nombre del producto', 'nombre');
					$data= array(
					'type' => 'text',
					'name' => 'nombre',
					'placeholder' => 'Nombre del producto',
					'class' => 'input_box'
					);
					echo form_input($data);

					echo form_label('Descripcion', 'descripcion');
					$data= array(
					'type' => 'text',
					'name' => 'descripcion',
					'placeholder' => 'Descripcion del producto',
					'class' => 'input'
					);
					echo form_input($data);

					echo form_label('Cantidad', 'cantidad');
					$data= array(
					'type' => 'text',
					'name' => 'cantidad',
					'placeholder' => 'Cantidad del producto',
					'class' => 'input'
					);
					echo form_input($data);

					echo form_label('Precio Individual', 'precio_individual');
					$data= array(
					'type' => 'text',
					'name' => 'precio_individual',
					'placeholder' => 'Precio individual',
					'class' => 'input'
					);
					echo form_input($data);

					echo form_label('Precio Total', 'precio_total');
					$data= array(
					'type' => 'text',
					'name' => 'precio_total',
					'placeholder' => 'Precio Total',
					'class' => 'input'
					);
					echo form_input($data);

					?>
					</div>

					<div id="form_button">
					<?php
					$data = array(
					'type' => 'submit',
					'value'=> 'Submit',
					'class'=> 'submit'
					);
					echo form_submit($data); ?>
				

			
					<?php echo form_close();?>

				
					
			</div>
	</div>
</body>
</html>