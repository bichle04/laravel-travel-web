<?php

namespace App\Http\View\Composers;
 
use App\Models\Destination;
use Illuminate\View\View;

class DestinationComposer
{
    protected $users;

    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $destinations = Destination::select('id', 'name', 'file', 'url')
                                     ->where('status', 1)
                                     ->orderbyDesc('id')
                                     ->take(1)
                                     ->get();
        $view->with('destinations', $destinations);
    }
}