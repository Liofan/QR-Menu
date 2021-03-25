<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class GroupMenu extends Model
{
    //[Table("categories")]
    protected $table = 'group_menus';

    // [Key,Foregnkey]
    protected $primaryKey = "id";

//    public  function GroupMenus()
//    {
//        return $this->hasMany(Category::class,'type_menus','id');
//    }
}
