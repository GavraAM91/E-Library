<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'slug',
        'category_id'
    ];


    //automatic create slug
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
    public function User(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
}
