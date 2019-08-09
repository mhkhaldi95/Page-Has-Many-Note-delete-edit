<?php

namespace App\Http\Controllers;
use App\Note;
use App\Page as pages;

use App\Page;

use Illuminate\Http\Request;


class ControllerPages extends Controller
{
    public function show(){
        $pages = pages::all();
        return view('show',compact('pages'));
    }
    public function store(Request $request){
        $objPage = new Page;
        $objPage->title/*col name*/=$request->title ;//name in form;
        $objPage->save();
        return back();
    }
    public function delete(pages $id){
        $id->delete();
        return back();



    }

    //----------------------------------------------------------

//        public function shownote($id){
//            $notes= pages::find($id)->notes;
//
//            $p = note::where('page_id',$id)->get();
//            $none=false;
//
//            if(count($p)==0){
//                $none=true;
//                $page_name= pages::find($id);
//                $page_name=$page_name->title;
//                return view('onepage',compact('page_name','notes','none'));
//            }
//           else{ $fokey=$p[0]['page_id'];
//            $page_name=pages::find($fokey);
//               $none=false;
//
//
//
//               //return $p;
//
//
//
//
//           return view('onepage',compact('page_name','notes','none'));}
//        }
public function onepage(Page $page){

        return view('onepage',compact('page'));
}
        public function storenote(Request $request,Page $page){
        $obj = new Note;
        $obj->text = $request->text;

        $page->notes()->save($obj);

        return back();
        }



}
