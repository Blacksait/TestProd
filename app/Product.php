<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function categories(){//отношение многие ко многим
        return $this->belongsToMany(Category::class);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
