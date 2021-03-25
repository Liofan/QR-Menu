<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class Category extends Model
{

    //[Table("categories")]
    protected $table = 'categories';

    // [Key,Foregnkey]
    protected $primaryKey = "id";

    //[Required]
    protected $fillable = ['id','name','created_at','updated_at','type_menu'];

     public  function products()
     {
         return $this->hasMany(Product::class,'categories','id');
     }



//    public function list_prod() {
//        return $this->belongsTo(Product::class, 'id', 'categories');
//    }

//    public function list_prod()
//    {
//        return $this->belongsTo(Product::class, 'id', 'categories');
//    }

}
