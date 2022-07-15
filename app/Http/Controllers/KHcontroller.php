<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

use App\Models\Detail_hotel;
use App\Models\Hotel;

class KHcontroller extends Controller
{

    public function __construct()
    {
        # code...
        $loaihotel = Detail_hotel::all();
        $hotel = Hotel::all();

        // return view('layout_page.master_view', ['tang' => $tang, 'phong' => $phong]);
        View::share('loaihotel', $loaihotel);
        // View::share('loaihotel' , $loaihotel);

        // View::share(['hotel' => $hotel]);
    }
    function index()
    {
        # code...
        return view('page.trangchu');
    }
}
