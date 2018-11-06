<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = DB::table('match')->get();
        return view('index', ['matches' => $matches]);
    }

    public function content($slug)
    {
    	$data =  DB::table('match')->where('slug', $slug)->first();
	if(!$data)
		return view('404');
    	$link_url = $data->link_1;
        return view('content', ['data' => $data, 'link' => $link_url, 'current'=>1] );
    }

    public function link($slug, $link)
    {
    	$data =  DB::table('match')->where('slug', $slug)->first();
	if(!$data)
		return view('404');
    	switch ($link) {
    		case '1':
    			$link_url = $data->link_1;
    			break;
    		case '2':
    			$link_url = $data->link_2;
    			break;
    		case '3':
    			$link_url = $data->link_3;
    			break;
    		case '4':
    			$link_url = $data->link_4;
    			break;
    		
    		default:
    			$link_url = $data->link_1;
    			break;
    	}

        $current_link = $link;
        return view('content', ['data' => $data, 'link' => $link_url, 'current'=> $link]);
    }

}
