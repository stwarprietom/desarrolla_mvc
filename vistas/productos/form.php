<main class="app-content">
<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> productos</h1>
    <p>Ingrese los datos Para registrar un producto nuevo</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Productos</li>
    <li class="breadcrumb-item"><a href="#"><?=$titulo?> Productos</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="row">
        <div class="col-lg-6">
                <h2><?=$titulo?> Producto</h2>

            <form method= "POST" action= "?c=producto&a=Guardar">  
                
            
            <div class="form-group">
              
              <input class="form-control" name="ID" type="hidden" value="<?=$p->getPro_id()?>">

              <label for="Nombre">Nombre producto</label>
              <input required class="form-control" name="Nombre" type="text" placeholder="Ingrese el nombre del producto" value="<?=$p->getPro_nom()?>">

              <label for="Marca">Marca</label>
              <input required class="form-control" name="Marca" type="text" placeholder="Ingrese la marca del producto" value="<?=$p->getPro_mar()?>">

              <label for="Costo">Costo</label>
              <input required  class="form-control" name="Costo" type="number" placeholder="Ingrese el costo del producto" value="<?=$p->getPro_cos()?>">

              <label for="Precio">Precio</label>
              <input required class="form-control" name="Precio" type="number" placeholder="Ingrese el precio del producto" value="<?=$p->getPro_pre()?>">
            
              <label for="Cantidad">Cantidad</label>
              <input required  class="form-control" name="Cantidad" type="int" placeholder="Ingrese la cantidad del producto" value="<?=$p->getPro_can()?>">

            </div>  
            
             <button class="btn btn-primary" type="submit">Guardar</button>   

            </form>
            <!--hasta aquí borre-->
      
       
      
        </div>
    </div>
  </div>
 </div>
</div>


</main>