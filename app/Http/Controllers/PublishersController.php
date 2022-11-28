<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Categorie;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index(){
        return view('publisher', [
            "categories"=> Categorie::all(),
            "publishers" => Publisher::all()
        ]);

    }
}
