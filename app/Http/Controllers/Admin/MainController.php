<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\DashboardService;
use \Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function income()
    {
        return view('admin.dashboard.income', [
            'title' => 'Thống kê doanh thu',
            'atDashboard' => 'active active-menu',
            'atDes' => '',
            'atTour' => '',
            'atSchedule' => '',
            'atUser' => '',
            'atOrder' => '',
        ]);
    }

    public function handleIncome(Request $request): JsonResponse
    {
        $year = $request->input('year');
        $data = $this->dashboardService->handleIncome($year);
        return response()->json($data);
    }

    public function numberTour()
    {
        return view('admin.dashboard.tour', [
            'title' => 'Thống kê số lượng đặt Tour',
            'atDashboard' => 'active active-menu',
            'atDes' => '',
            'atTour' => '',
            'atSchedule' => '',
            'atUser' => '',
            'atOrder' => '',
        ]);
    }

    public function handleTour(Request $request): JsonResponse
    {
        $month = $request->input('month');
        $year = $request->input('year');
        $data = $this->dashboardService->handleTour($month, $year);
        return response()->json($data);
    }
}
