<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tour\TourRequest;
use App\Http\Services\Tour\TourAdminService;
use \Illuminate\Http\JsonResponse;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    protected $tourService;

    public function __construct(TourAdminService $tourService)
    {
        $this->tourService = $tourService;
    }

    public function listTour()
    {
        return view('admin.tour.list-tour', [
            'title' => 'Danh sách các Tour',
            'tours' => $this->tourService->get()
        ]);
    }

    public function addTour()
    {
        return view('admin.tour.add-tour', [
            'title' => 'Thêm Tour',
            'destinations' => $this->tourService->getMenu()
        ]);   
    }

    public function handle(TourRequest $request)
    {
        $this->tourService->insert($request);
        return redirect()->back();  
    }

    public function editTour(Tour $tour)
    {
        return view('admin.tour.edit-tour', [
            'title' => 'Chỉnh sửa thông tin Tour',
            'tour' => $tour,
            'destinations' => $this->tourService->getMenu()
        ]);
    }

    public function updateTour(Tour $tour, TourRequest $request)
    {
        $this->tourService->updateTour($request, $tour);
        return redirect('/admin/tours/list-tour');
    } 

    public function delTour(Request $request): JsonResponse
    {
        $result = $this->tourService->delTour($request); 
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Đã xoá tour.'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function detail(Tour $tour, $id)
    {
        $tour = $this->tourService->getId($id);
        return view('admin.tour.detail',[
            'title' => 'Thông tin chi tiết - ' . $tour->name,
            'tour' => $tour
        ]);
    }
}
