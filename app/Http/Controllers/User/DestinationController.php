<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Destination\DestinationService;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    protected $destination;

    public function __construct(DestinationService $destination)
    {
        $this->destination = $destination;
    }

    public function allDes()
    {
        return view('user.destination', [
            'title' => 'TravelWithU - Điểm đến',
            'destinations' => $this->destination->showAll(),
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }

    public function index(Request $request, $id, $url)
    {
        $destination = $this->destination->getId($id); 
        $tours = $this->destination->getTour($destination);

        return view('user.tour', [
            'title' => $destination->name,
            'destination' => $destination,
            'tours' => $tours,
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }

    public function inVN()
    {
        return view('user.destination', [
            'title' => 'Các điểm đến trong nước',
            'destinations' => $this->destination->inVN(),
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }

    public function otherCountry()
    {
        return view('user.destination', [
            'title' => 'Các điểm đến nước ngoài',
            'destinations' => $this->destination->otherCountry(),
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }
}
