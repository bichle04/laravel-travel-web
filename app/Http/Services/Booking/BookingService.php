<?php


namespace App\Http\Services\Booking;

use App\Models\Bill;
use App\Models\Schedule;
use App\Models\Tour;
use App\Models\Destination;
use App\Jobs\SendMail;
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
   public function create($request)
    {
        try {
            $request->except('_token');
            $data = $request->all();
            Bill::create($request->all());

            session()->flash('success', 'Đặt Tour thành công!');

            // Queue
            SendMail::dispatch($data)->delay(now()->addSeconds(5));

        } catch (\Exception $e) {
            session()->flash('error', 'Đặt Tour thất bại! Vui lòng thử lại sau.');
            \Log::info($e->getMessage());
            return  false;
        }

        return  true;
    }

    // ====================== ADMIN-ORDER ======================
    public function getSchedule()
    {
        return Bill::join('tours', 'bills.id_tour', '=', 'tours.id')
        ->selectRaw('tours.id as id,tours.url as url,tours.name as ten, COUNT(bills.id_user) as Tong ,departure')

         ->groupBy('bills.id_tour','departure')
         ->orderBy('departure', 'asc')
         ->paginate(10);
    }
}