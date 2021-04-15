<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $table = 'score';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
