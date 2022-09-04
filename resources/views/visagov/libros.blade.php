@extends('app');

@section('content')
    <div style="padding: 10">
        <h1>Libros</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Crear
        </button>
        <!-- Modal -->
        <form action="{{ route('libros') }}" method="POST" >
            @csrf
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="titulo">Título:</label>
                        <input style="width: 100%" id=titulo type="text" name="title" required minlength="3">
                        <label style="padding-top: 15" for="autor">Autor:</label>
                        <input style="width: 100%" id=autor type="text" name="author"  required minlength="3">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
        <div>
            <table class="table table-hover" >
                <tbody>
                  <tr>
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Título</th>
                          <th>Autor</th>
                          <th></th>
                        </tr>
                      </thead>
            @foreach ( $libros as $libro )
                    <th>
                        <div>
                            <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->id }}</a>
                        </div>
                    </th>
                    <td>
                        <div>
                            <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->title }}</a>
                        </div>
                    </td>
                    <td>
                        <div>
                            <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->author }}</a>
                        </div>
                    </td>
                    <td>
                        <div>
                            <form action="{{ route('libros-destroy', [$libro->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>











                {{-- <div class="row py-1">
                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->id }}</a>
                    </div>

                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->title }}</a>
                    </div>

                    <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('libros-edit', ['id' => $libro->id]) }}">{{ $libro->author }}</a>
                    </div>

                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('libros-destroy', [$libro->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div> --}}

        </div>
    </div>
@endsection

