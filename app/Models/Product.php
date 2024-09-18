<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }

    static public function getSingle($id){
        return Product::find($id);
    }

    static public function getProduct(){
        return self::select('product.*', 'users.name as created_by_name', 'category.name as category_name', 'sub_category.name as sub_category_name')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id')
        ->orderBy('product.id', 'asc')
        ->join('users', 'users.id', '=', 'product.created_by')
        ->where('product.is_deleted', '=', 0)
        ->paginate(20);
    }

    public function getImage(){
        return $this->hasMany(ProductImageModel::class, "product_id")->orderBy('order_by', 'asc');
    }
}
