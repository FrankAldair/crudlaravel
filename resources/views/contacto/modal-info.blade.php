  <!-- Modal Edit-->
  <div class="modal fade" id="edit{{ $contacto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar contacto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('home.update',$contacto->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!--Usamos este metodo para actualizar la información-->
        <div class="modal-body">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="" class="form-control" value="{{ $contacto->nombre }}">

            <label for="">Telefóno</label>
            <input type="text" name="telefono" id="" class="form-control" value="{{ $contacto->telefono }}">

            <label for="">Dirección</label>
            <input type="text" name="direccion" id="" class="form-control" value="{{ $contacto->direccion }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-info">Actualizar</button>
        </div>
      </div>
    </form>
    </div>
  </div>


    <!-- Modal Delete-->
    <div class="modal fade" id="delete{{ $contacto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar contacto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('home.destroy',$contacto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE') <!--Usamos este metodo para eliminar la información-->
            <div class="modal-body">
                <h5 class="text-center">Seguro que desea eliminar este contacto</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-danger">Confirmar</button>
            </div>
          </div>
        </form>
        </div>
      </div>


      <!-- Modal Mostrar-->
  <div class="modal fade" id="show{{ $contacto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Información de contacto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('home.show',$contacto->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('SHOW') <!--Usamos este metodo para actualizar la información-->
        <div class="modal-body">
            <h5>Nombre:</h5>
            <ul>{{ $contacto->nombre }}</ul>
            <h5>Telefóno:</h5>
            <ul>{{ $contacto->telefono }}</ul>
            <h5>Dirección:</h5>
            <ul>{{ $contacto->direccion }}</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </form>
    </div>
  </div>