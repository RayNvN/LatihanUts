<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    //
    use HasFactory;
    protected $table = "writers";
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany(article::class);
    }
}
