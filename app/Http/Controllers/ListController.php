<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListA;
use App\ListB;

class ListController extends Controller
{
    public function store(Request $request)
    {

    	$name = ListA::where('name',$_POST['name_a'])->first();
		if($name)
		{
			return response()->json(['msg1'=>'Name Exists in list A. Try with another one!']);
		}
		$name = $_POST['name_a'];
		$list = ListA::create(['name' => $name]);

		if($list)
		{
			return response()->json(['msg'=>'Name added in List A successfully!', 'name' => $list->name]);
		}
		else
		{
			return response()->json(['msg1'=>'Something went wrong. Please try again!']);
		}
    }

    public function storeA($id)
    {
    	$name = ListA::where('name',$id)->first();
		if($name)
		{
			return response()->json(['msg1'=>'Name Exists in list A. Try with another one!']);
		}
		$list = ListA::create(['name' => $id]);
		$list1 = ListB::where('name',$id)->delete();

		if($list)
		{
			return response()->json(['msg'=>'Name added in List A successfully!', 'name' => $list->name]);
		}
		else
		{
			return response()->json(['msg1'=>'Something went wrong. Please try again!']);
		}
    }

    public function storeB($id)
    {
    	$name = ListB::where('name',$id)->first();
		if($name)
		{
			return response()->json(['msg1'=>'Name Exists in list B. Try with another one!']);
		}
		$list = ListB::create(['name' => $id]);
		$list1 = ListA::where('name',$id)->delete();

		if($list)
		{
			return response()->json(['msg'=>'Name added in List B successfully!', 'name' => $list->name]);
		}
		else
		{
			return response()->json(['msg1'=>'Something went wrong. Please try again!']);
		}
    }
}
