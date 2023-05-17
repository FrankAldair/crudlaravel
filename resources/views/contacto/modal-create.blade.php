  <!-- Modal Create-->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo contacto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="" class="form-control">

            <label for="">Telefóno</label>
            <input type="text" name="telefono" id="" class="form-control">

            <label for="">Dirección</label>
            <input type="text" name="direccion" id="" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
    </div>
  </div>