<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Requests\Schedule\ScheduleRequest;
use App\Models\Tour;
use App\Http\Services\Schedule\ScheduleService;

class ScheduleController extends Controller
{

    protected $scheduleService;

    public function __construct(ScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
    }

    public function addSchedule()
    {
        return view('admin.schedule.add-schedule', [
            'title' => 'Thêm lịch trình',
            'tours' => $this->scheduleService->getTour()
        ]);
    }

    public function store(Request $request)
    {

        $result = $this->scheduleService->saveDayData($request); 

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Thêm lịch trình thành công'
            ]);

        }
        return response()->json([
            'error' => true

        ]);
    }

    public function listSchedule()
    {
        return view('admin.schedule.list-schedule', [
            'title' => 'Danh sách các Tour',
            'schedules' => $this->scheduleService->get()
        ]);
    }

    public function editSchedule(Schedule $schedule)
    {
        return view('admin.schedule.edit-schedule', [
            'title' => 'Chỉnh sửa thông tin Tour',
            'schedule' => $schedule,
            'tours' => $this->scheduleService->getTour()
        ]);
    }

    public function updateSchedule(Schedule $schedule, ScheduleRequest $request)
    {
        $this->scheduleService->updateSchedule($request, $schedule);
        return redirect('/admin/schedules/list-schedule');
    }

    public function delSchedule(Request $request): JsonResponse
    {
        $result = $this->scheduleService->delSchedule($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Đã xoá lịch trình.'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function detail($id, $url)
    {
        $tour = $this->scheduleService->getId($id); 
        $schedules = $this->scheduleService->getSchedule($tour);

        return view('admin.schedule.list-schedule',[
            'title' => 'Lịch trình của Tour - ' . $tour->name,
            'tour' => $tour,
            'schedules' => $schedules,
        ]);
    }
}
