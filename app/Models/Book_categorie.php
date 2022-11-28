<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Book_categorie extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
