<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Booking\BookingService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    protected $orderService;
    public function __construct(BookingService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        return view('admin.order.list', [
            'title' => 'Danh sách đơn đặt Tour',
            'schedules' => $this->orderService->getSchedule(),
            'orders' => $this->orderService->getQty()
        ]);
    }

}
