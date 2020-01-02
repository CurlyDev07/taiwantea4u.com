<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'description', 'price', 'compare_price', 'qty', 'sku', 'barcode', 'short_description', 'status'];

    protected $hidden = ['created_at', 'updated_at'];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function product_variants(){
        return $this->hasMany(ProductVariant::class);
    }
    
    public function product_variant_options(){
        return $this->hasMany(ProductVariantOption::class);
    }
}