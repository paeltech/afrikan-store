<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['quantity'];

    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory');
    }

    public function presentPrice()
    {
//        return '$'.$this->price.number_format($this->price / 100, 2);
//        return money_format('$%i'. $this->price /100 );

    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(3);
    }
}
