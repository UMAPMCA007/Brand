<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table='brands';
    protected $fillable=['Bname','active'];

    /**
     * Brand has many products.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
