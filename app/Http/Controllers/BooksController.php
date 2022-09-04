<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use PharIo\Manifest\Author;

class BooksController extends Controller
{


    /*
    * index para mostrar todos los libros
    * store para guardar un libro
    * update para actualizar un libro
    * destroy para eliminar un libro
    * edit para mostrar el formulario de edición
    */

    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:3',
            'author' => 'required|min:3'
        ]);

        $libro = new Book();
        $libro->title = $request->title;
        $libro->author = $request->author;
        $libro->save();

        return redirect()->route('libros');
    }

    public function index(){
        $libros = Book::all();
        return view('visagov.libros', ['libros' => $libros]);
    }

    public function show($id){
        $libro = Book::find($id);
        return view('visagov.show', ['libro' => $libro]);
    }

    public function update(Request $request, $id){
        $libro = Book::find($id);
        $libro->title = $request->title;
        $libro->author = $request->author;
        $libro->save();

       /*  return view('visagov.libros', ['success' => 'Libro actualizado']); */
       return redirect()->route('libros');
    }

    public function destroy($id){
        $libro = Book::find($id);
        $libro->delete();

        return redirect()->route('libros');
    }


}
