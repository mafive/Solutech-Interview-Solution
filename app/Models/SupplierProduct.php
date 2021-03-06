<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierProduct extends Model
{
    use HasFactory;

    public $fillable = [

        'supply_id',
        'product_id'
    ];
    protected $table = "supplier_products";

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }
}
