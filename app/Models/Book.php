<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Book extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function categorie(){
        return $this->belongsTo(Book_categorie::class, 'book_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
