<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListingFile extends Model
{
    protected $fillable = [

        'listing_id',

        'file_name',

        'file_path',

        'file_type',

        'file_size',

    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}