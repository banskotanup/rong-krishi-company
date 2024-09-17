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
        return self::select('product.*', 'users.name as created_by_name')
        ->orderBy('product.id', 'asc')
        ->join('users', 'users.id', '=', 'product.created_by')
        ->where('product.is_deleted', '=', 0)
        ->paginate(8);
    }

    public function getImage(){
        return $this->hasMany(ProductImageModel::class, "product_id");
    }
}
