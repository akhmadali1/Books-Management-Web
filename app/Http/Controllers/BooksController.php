<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Categorie;
use App\Models\Publisher;
use Illuminate\Http\Request;
class BooksController extends Controller
{
    public function index(){
        return view('index',[
            "categories"=> Categorie::all(),
            "books"=>Book::all()
        ]);
    }
    public function show(Book $book){
        return view('book', [
            "categories"=> Categorie::all(),
            "book" => $book
        ]);
    }
}
