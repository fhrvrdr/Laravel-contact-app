<?php

namespace App\Http\Controllers;

use App\Models\Rehber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{
    public function search(Request $request)
    {


        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];

            $data = Rehber::where("name", 'LIKE', '%' . $search_text . '%')
                ->where('user_id', Auth::id())

                ->orwhere("surname", 'LIKE', '%' . $search_text . '%')
                ->where('user_id', Auth::id())

                ->orwhere("phone", 'LIKE', '%' . $search_text . '%')
                ->where('user_id', Auth::id())

                ->get();



            return view('search', compact('data'));
        } else {
            return view('rehber');
        }
    }
}
