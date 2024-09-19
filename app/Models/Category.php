<?php

namespace App\Models;

use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function Books(): HasMany
    {
        return $this->hasMany(Books::class, foreignKey: 'category_id');
    }
}
