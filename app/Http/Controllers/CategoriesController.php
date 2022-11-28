<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Book;
use App\Models\Book_categorie;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
    //
    public function indexcat(){
        return view('contact',["categories"=> Categorie::all()]);
    }
    public function index($id){
        $categories = Categorie::all();
        $categori = Book::join('book_categories', 'books.id', '=', 'book_categories.book_id')
        ->join('categories', 'categories.id', '=', 'book_categories.category_id')->where('category_id', '=', $id)->get(['books.*', 'categories.name']);
        return view('categories', compact('categori', 'categories'));
    }
}
