<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Productos</title>
     <?=$this->load->view('header/style');?>
  </head>
  <body>

  <?=$this->load->view('header/menu');?>

    <h1>Agregar Productos</h1>

    <form style="widch: 450px;"id="form" name="form" action="<?=base_url()?>index.php/home/guardar" method="POST">

      <label for="titulo">SKU</label>
      <input type="text" size="20" name="sku" id="sku"/>
      <br/>
      <label for="titulo">Producto</label>
      <input type="text" size="20" name="nombre" id="nombre"/>
      <br/>
      <label for="titulo">Descripción</label>
      <input type="text" size="20" name="descripcion" id="descripcion"/>
      <br/>
      <label for="titulo">Cantidad</label>
      <input type="text" size="20" name="cantidad" id="cantidad"/>
      <br/>
      <label for="titulo">Precio Individual</label>
      <input type="text" size="20" name="individual" id="precio_individual"/>
      <br/>
      <label for="titulo">Precio Total</label>
      <input type="text" size="20" name="total" id="precio_total"/>
      <br/>
      <p><input type="submit" name="guardar" id="submit" value="Agregar Producto" /></p>
      

    </form>

 

    <a href="home/logout">Salir</a>
  </body>
</html>
