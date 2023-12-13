<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Tour\TourService;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{

    protected $tourService;

    public function __construct(TourService $tourService)
    {
        $this->tourService = $tourService;
    }

    public function allTour()
    {
        return view('user.tour', [
            'title' => "Tất cả các tour",
            'tours' => $this->tourService->get(),
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }

    public function detail(Tour $tour, $id, $idDes)
    {
        $tour = $this->tourService->getId($id);

        $idDes = $tour->destination->id;
        $tours = $this->tourService->getIdDes($id, $idDes);
        
        return view('user.detail', [
            'title' => 'Tour ' . $tour->name,
            'isDetail' => true,
            'tour' => $tour,
            'tours' => $tours
        ]);
    }
}
