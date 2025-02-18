<?php
namespace App\Controllers;

use App\Models\Baby3;
use App\Models\Categorybb3;

class Baby3Controller{
    // public function baby3_details($id) {
    //     $detail_product = Baby3::find($id);
    //     db($detail_product);
    //     return view('detail_toy', compact('detail_product'));
    // }
  
    public function baby3_details($id){
        $detail_product = Baby3::getTable(['virals_products_baby3.*','categories_name,class_filter'])->
        joinTable('virals_categories_baby3','categories_id','categories_id')->
        andwhere('slug','=',$id)->
        first();
        if(!$detail_product){
            echo "404";
            return;
        }
        // db($detail_categories);

        return view('detail_toy',compact('detail_product'));
    }
}