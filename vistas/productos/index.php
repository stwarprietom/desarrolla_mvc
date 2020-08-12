    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Marca</th>
                      <th>Cantidad</th>
                      <th>Costo</th>
                      <th>Precio</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($this->modelo->Listar() as $r):?>
                    <tr>
                      <td><?=$r->id?></td>
                      <td><?=$r->pro_nom?></td>
                      <td><?=$r->pro_mar?></td>
                      <td><?=$r->pro_can?></td>
                      <td><?=$r->pro_cos?></td>
                      <td><?=$r->pro_pre?></td>
                      <td><?=$r->pro_img?>/td>
                      <td> <a class="btn btn-info btn-flat" href="?c=producto&a=FormCrear&id=<?=$r->id?>" >Editar </a> 
                      <a class="btn btn-info btn-flat" href="?c=producto&a=Borrar&id=<?=$r->id?>" > Eliminar</a></td>
                    </tr>
                  <?php endforeach;?> 
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
 