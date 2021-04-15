<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'card';

    protected $fillable = ['lat', 'lng', 'cardName', 'status', 'level_id', 'display_image', 'url_image'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
