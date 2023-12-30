<?php


namespace App\Http\Services\Dashboard;

use App\Models\Bill;

class DashboardService
{
    public function handleIncome($year)
    {
        $results = Bill::selectRaw('MONTH(departure) as thang, SUM(total_price) as Doanhthu')
                        ->whereYear('departure', $year)
                        ->groupByRaw('MONTH(departure)')
                        ->get();
        return $results;
    }

    public function handleTour($month, $year)
    {
        return Bill::join('tours', 'bills.id_tour', '=', 'tours.id')
                    ->selectRaw('tours.name as ten, COUNT(bills.id_tour) as Tong')
                    ->whereMonth('departure', $month)
                    ->whereYear('departure', $year)
                    ->groupBy('bills.id_tour', 'tours.name')
                    ->orderBy('Tong', 'desc')
                    ->get();
    }
}