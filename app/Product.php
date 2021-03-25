<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    //[Table("products")]
    protected $table = 'products';
    //[Key,Foregnkey]
    protected $primaryKey = "id";
     //[Required]
    protected $fillable = ['id','name', 'desk','price','img','created_at','updated_at','categories'];

//    public function categories() {
//        return $this->belongsTo(Category::class,'categories');
//    }



//    public function children() {
//        return $this->hasMany(Category::class, 'id', 'categories');
//    }

//    public function children()
//    {
//        return $this->hasMany(Category::class, 'categories');
//    }

//    public function categories()
//    {
//        return $this->belongsTo(Category::class, 'categories');
//    }

}
