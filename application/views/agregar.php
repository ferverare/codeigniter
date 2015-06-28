<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Productos</title>
     <?=$this->load->view('header/style');?>
  </head>
  <body>

  <?=$this->load->view('header/menu');?>

    <h1>Agregar Productos</h1>

     <?= form_open(base_url().'index.php/home/validar',array('name'=>'mi_form','id'=>'form','method'=>'post'));?>

      
      <?= form_label('Sku','titulo', array('class'=>'label'));?>
      <?= form_input('sku','','id="sku"');?>
      <br/>
      <?= form_label('Nombre','titulo', array('class'=>'label'));?>
      <?= form_input('nombre','','id="nombre"');?>
      <br/>
      <?= form_label('Descripcion','titulo', array('class'=>'label'));?>
      <?= form_input('descripcion','','id="descripcion"');?>
      <br/>
      <?= form_label('Cantidad','titulo', array('class'=>'label'));?>
      <?= form_input('cantidad','','id="cantidad"');?>
      <br/>
      <?= form_label('Precio Individual','titulo', array('class'=>'label'));?>
      <?= form_input('precio_individual','','id="precio_individual"');?>
      <br/>
      <?= form_label('Precio Total','titulo', array('class'=>'label'));?>
      <?= form_input('precio_total','','id="precio_total"');?>
      <br/>
      <?= form_submit('submit','Enviar Datos','id="submit"');?>


      
    <?= form_close();?>
    
     <?php echo validation_errors(); ?>
 

    <a href="home/logout">Salir</a>
  </body>
</html>
