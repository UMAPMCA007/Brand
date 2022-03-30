<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="products";
    protected $fillable=['Pname','brand_id','brand','product_code','unit_price','manu_date','exp_date'];

    public function brands()
    {
        return $this->belongsTo('App\Brand');
    }


}
