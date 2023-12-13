<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Destination\AddDesFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Destination\DestinationService;
use \Illuminate\Http\JsonResponse;
use App\Models\Destination;

class DestinationController extends Controller
{
    protected $destinationService;

    public function __construct(DestinationService $destinationService) 
    {
        $this->destinationService = $destinationService;
    }

    public function addDes() 
    {
        return view('admin.destination.add-destination', [
            'title' => 'Thêm điểm đến'
        ]);
    }

    public function handle(AddDesFormRequest $request) 
    {
        $this->destinationService->create($request);
        return redirect()->back();
    }

    public function listDes()
    {
        return view('admin.destination.list-destination', [
            'title' => 'Danh sách các điểm đến',
            'lists' => $this->destinationService->getAll()
        ]);
    }

    public function editDes(Destination $destination)
    {
        return view('admin.destination.edit', [
            'title' => 'Chỉnh sửa điểm đến - ' . $destination->name,
            'destination' => $destination
        ]);
    }

    public function updateDes(Destination $destination, AddDesFormRequest $request)
    {
        $this->destinationService->updateDes($request, $destination);
        return redirect('/admin/destinations/list-destination');
    } 

    public function delDes(Request $request): JsonResponse
    {
        $result = $this->destinationService->delDes($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Đã xoá điểm đến.'
            ]);
        } 

        return response()->json([
            'error' => true
        ]);
    }
}
