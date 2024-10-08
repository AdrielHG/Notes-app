<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function notes(){
        return $this->belongsToMany(Note::class);
    }
}
