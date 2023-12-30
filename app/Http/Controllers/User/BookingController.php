<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Booking\BookingService;
use App\Models\Tour;
use App\Models\Destination;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    protected $bookService;

    public function __construct(BookingService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function booking(Tour $tour, $id)
    {
        $tour = $this->bookService->getId($id);
        $schedules = $this->bookService->getDay($id);
        return view('user.booking', [
            'title' => 'Đặt Tour ' . $tour->name,
            'isDetail' => true,
            'tour' => $tour,
            'schedules' => $schedules
        ]);
    }

    public function addBill(Request $request)
    {
        $this->bookService->create($request);
        return redirect()->back();
    }
}
