<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'featured',
        'location',
        'price',
        'cash_flow',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

       public function files()
    {
        return $this->hasMany(ListingFile::class);
    }
}