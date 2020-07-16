<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['num', 'description'];
    
    public function driver()
    {
        return $this->hasMany(Driver::class);
    }
}
