<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    static public function getCategory(){
        return self::select('category.*', 'users.name as created_by_name')
        ->join('users', 'users.id', '=', 'category.created_by')
        ->where('category.is_delete','=', 0)
        ->orderBy('category.id', 'asc')
        ->paginate(8);
    }

    static public function getSingle($id){
        return Category::find($id);
    }
}
