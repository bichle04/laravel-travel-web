<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Booking\BookingService;
use Carbon\Carbon;
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
            'atDashboard' => '',
            'atDes' => '',
            'atTour' => '',
            'atSchedule' => '',
            'atUser' => '',
            'atOrder' => 'active active-menu',
            'schedules' => $this->orderService->getSchedule()
        ]);
    }

    public function listUser($id, $depature)
    {
        $tourName = $this->orderService->getName($id);
        $bill = $this->orderService->getInfo($id, $depature);
        
        return view('admin.order.list-user', [
            'title'=>"Danh sách khách hàng",
            'atDashboard' => '',
            'atDes' => '',
            'atTour' => '',
            'atSchedule' => '',
            'atUser' => '',
            'atOrder' => 'active active-menu',
            'tourName' => $tourName->name,
            'date' => Carbon::parse($depature)->format('d-m-Y'),
            'bills' => $bill
        ]);
    }

}
