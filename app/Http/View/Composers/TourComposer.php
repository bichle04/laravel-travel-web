<?php

namespace App\Http\View\Composers;
 
use App\Models\Tour;
use Illuminate\View\View;

class TourComposer
{
    protected $users;

    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $tours = Tour::select('id', 'name', 'file', 'price', 'id_destination', 'url')
                       ->where('status', 1)
                       ->orderbyDesc('id')
                       ->take(3)
                       ->get();

        $view->with('tours', $tours);
    }
}