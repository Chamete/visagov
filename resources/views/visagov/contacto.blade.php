@extends('app');

@section('content')
<div  style="padding: 10" >
    <h1>Contacto</h1>
    <form>
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1"  rows="3" required></textarea>
        </div>
        <div sclass="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
