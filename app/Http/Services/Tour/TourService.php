<?php


namespace App\Http\Services\Tour;

use App\Models\Tour;
use Illuminate\Support\Str;

class TourService
{
    public function get()
    {
        return Tour::select('id', 'name', 'file', 'time', 'price', 'description', 'url', 'id_destination')
                    ->where('status', 1)
                    ->with('destination')
                    ->paginate(15);
    }

    // public function slider()
    // {
    //     return Tour::select('file')->where('status', 1)->orderbyDesc('id')->take(9)->get();
    // }

    // public function suggest()
    // {
    //     return Tour::select('name', 'file', 'author', 'price', 'url')->where('status', 1)->take(12)->get();
    // }

    public function new()
    {
        return Tour::select('id', 'name', 'file', 'time', 'price', 'description', 'url', 'id_destination')
                    ->where('status', 1)
                    ->orderbyDesc('id')
                    ->take(3)
                    ->with('destination')
                    ->get();
    }

    public function getId($id)
    {
        return Tour::where([
                            ['id', $id],
                            ['status', 1]
                        ])
                        ->with('destination')
                        ->firstOrFail();
    }

    public function getIdDes($id, $idDes)
    {
        return Tour::where([
                            ['id', '!=', $id],
                            ['id_destination', $idDes],
                            ['status', 1]
                        ])
                        ->orderbyDesc('id')
                        ->take(5)
                        ->get();
    }
}