<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\GroupMenu;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index($id = 1)
    {
        $products = Product::latest()->paginate(5);
//        $category = Category::latest()->paginate(5);

        //  $categories = Product::query()->with('categories')->get();

        $categories = Category::where('type_menu', $id)
            ->orderBy('name', 'desc')
            ->get();

//    $categories = Category::with([
//        'products'=>function($query)
//        {
//            /*$query->select('*');*/
//        }])->get();
    $group_menus = GroupMenu::latest()->paginate(5);


//        $categories = Product::with('children')->get(); //save you some queries

        return view('products.index',compact( 'categories', 'group_menus'));
    }

    public function cat($id){

        $products =Product::where('id', $id)->get();

        return view('products.cat',compact('products'));

    }

    public function add_cart (Request $request){
        Cart :: add ( array (
            'id' => $id , // уникальный идентификатор строки
            'name' => $name ,
            'price' =>  $price ,
            'quantity' => $kol ,
            'attributes' => array ()
        ));
        return response()->json(['success'=>'Post Deleted successfully']);
    }
}
