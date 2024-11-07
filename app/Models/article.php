<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    use HasFactory;
    protected $table = 'articles';
    protected $guarded = [];

    public function writers()
    {
        return $this->belongsTo(writer::class);
    }
}
