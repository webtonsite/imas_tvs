<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PublicPageController extends Controller
{
    public function index($id){
    	$page = Page::find($id);
    	if($page){
    		return view('page', compact('page'));
    	}
    	return redirect(404);
    }
}
