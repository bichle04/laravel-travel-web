<?php


namespace App\Http\Services\Booking;

use App\Models\Schedule;
use App\Models\Tour;
use App\Models\Destination;
use Illuminate\Support\Str;

class BookingService
{
    public function getId($id)
    {
        return Tour::where([
                            ['id', $id]
                        ])
                        ->with('destination')
                        ->firstOrFail();
    }
    
    public function getMenu()
    {
        return Destination::select('id', 'name')->where('status', 1)->orderby('name', 'asc')->get();
    }

    public function getDay($id){
         
        $currentDateTime = date('Y-m-d');
        return Schedule::where([
                                ['id_tour', $id],
                                ['date', '>', $currentDateTime]
                            ])
                        ->orderby('date', 'asc')
                        ->get();  
   }
}