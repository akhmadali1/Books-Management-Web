<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
