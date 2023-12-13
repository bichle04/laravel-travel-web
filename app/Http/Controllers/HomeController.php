<?php

namespace App\Http\Controllers;

use App\Http\Services\Destination\DestinationService;
use App\Http\Services\Tour\TourService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $destination;
    protected $tour;

    public function __construct(DestinationService $destination, TourService $tour)
    {
        $this->destination = $destination;
        $this->tour = $tour;
    }

    public function index()
    {
        return view('user.home', [
            'title' => 'TravelWithU - Trang chủ',
            'destinations_in' => $this->destination->inVN_Home(), 
            'destinations_out' => $this->destination->otherCountry_Home(),
            'isDetail' => false,
            'class_css' => '',
            'tours' => $this->tour->new()
        ]);
    }

    public function about()
    {
        return view('user.about', [
            'title' => 'TravelWithU - Giới thiệu',
            'isDetail' => true,
            'class_css' => '__des'
        ]);
    }
}
