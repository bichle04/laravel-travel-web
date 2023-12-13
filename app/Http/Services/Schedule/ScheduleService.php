<?php


namespace App\Http\Services\Schedule;


use App\Models\Schedule;
use App\Models\Tour;

class ScheduleService
{
    public function getTour()
    {
        return Tour::get();
    }

    public function saveDayData($request)
    {
        try {
            $scheduleData = $request->input('schedule');

            foreach ($scheduleData as $data) {
                $tour = $data['idtour'];
                $date = $data['date'];

                Schedule::create([
                    'id_tour' => $tour,
                    'date' => $date
                ]);

            }
            return true;
        } catch (\Exception $e) {
            return false;

        }
    }

    public function get()
    {
        return Schedule::with('tour')->orderByDesc('date')->paginate(10);
    }
    public function updateSchedule($request, $schedule)
    {
        try {
            $schedule->fill($request->input());

            $schedule->save();

            session()->flash('success', 'Cập nhật thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Lỗi. Cập nhật thất bại');
            \Log::info($e->getMessage());

            return false;
        }

        return true;
    }

    public function delSchedule($request)
    {
        $id = (int) $request->input('id');

        // Trả về giá trị đầu tiên của bảng category trong csdl nếu id nhận từ input khớp với id trong csdl
        $schedule = Schedule::where('id', $id)->first();

        if ($schedule) {
            return Schedule::where('id', $id)->delete();
        }
        return false;
    }

    public function getId($id)
    {
        return Tour::where('id', $id)->firstOrFail();
    }

    public function getSchedule($tour)
    {
        return $tour->schedules()
                           ->select('id', 'id_tour', 'date', 'created_at')
                           ->orderByDesc('date')
                           ->paginate(15);
    }
}