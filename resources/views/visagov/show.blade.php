@extends('app');

@section('content')
    <div style="padding-left: 200; padding-right: 200; padding-top: 50">
        <h1>Libro</h1>
        <!-- Modal -->
        <form action="{{ route('libros-update', ['id' => $libro->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div {{-- class="modal fade" --}} id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="11" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"></h5>
                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                        </div>
                        <div class="modal-body">
                                <label for="titulo">Título:</label>
                                <input style="width: 100%" id=titulo type="text" name="title" required minlength="3" value="{{ $libro->title }}">
                                <label style="padding-top: 15" for="autor">Autor:</label>
                                <input style="width: 100%" id=autor type="text" name="author"  required minlength="3" value="{{ $libro->author }}">
                        </div>
                        <div>
                            <a style="float: right; margin-top: 10" class="btn btn-primary" style="margin-top: 10" href="{{ url()->previous() }}">Volver</a>
                            <button style="float: right; margin-top: 10; margin-right: 5" type="submit" style="margin-top: 10" class="btn btn-primary">Actualizar</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

