<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'description',
        'slug',
        'category'
    ];

    //make automatation for slug
    // public function sluggable(): array {
    //     return 
    // }

    //connect to category
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    //connect to author
    public function Author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
