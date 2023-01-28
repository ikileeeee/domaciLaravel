<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prognoza extends Model
{
    use HasFactory;
    protected $fillable=[
        'dan',
        'pojava',
        'temperatura'
    ];
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
