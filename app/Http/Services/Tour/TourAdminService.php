<?php


namespace App\Http\Services\Tour;


use App\Models\Comment;
use App\Models\Destination;
use App\Models\Programe;
use App\Models\Tour;
use Illuminate\Support\Str;

class TourAdminService
{
    public function getMenu()
    {
        return Destination::where('status', 1)->get();
    }

    public function insert($request)
    {
        try {
            Tour::create([
                'name' => (string) $request->input('name'),
                'time' => (string) $request->input('time'),
                'price' => (int) $request->input('price'),
                'price_child' => (int) $request->input('price_child'),
                'description' => (string) $request->input('description'),
                'file' => (string) $request->input('file'),
                'status' => (string) $request->input('status'),
                'id_destination' => (int) $request->input('id_destination'),
                'url' => Str::slug($request->input('name'), '-')
            ]);

            session()->flash('success', 'Thêm Tour thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Không thể thêm');
            \Log::info($e->getMessage());
            return  false;
        }

        return  true;
    }

    public function get()
    {
        return Tour::with('destination')->search()->paginate(15);
    }

    public function updateTour($request, $tour)
    {
        try {
            $tour->fill($request->input());
            $tour->url = Str::slug($request->input('name'), '-');
            
            $tour->save();

            session()->flash('success', 'Cập nhật thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Lỗi. Cập nhật thất bại');
            \Log::info($e->getMessage());
            
            return false;
        }

        return true;
    }

    public function delTour($request)
    {
        $id = (int) $request->input('id');

        // Trả về giá trị đầu tiên của bảng category trong csdl nếu id nhận từ input khớp với id trong csdl
        $tour = Tour::where('id', $id)->first();

        if ($tour) {
            return Tour::where('id', $id)->delete();
        }
        return false;
    }

    public function getId($id)
    {
        return Tour::where('id', $id)
                    ->with('destination')
                    ->firstOrFail();
    }

    public function getContent($id)
    {
        return Programe::where('id_tour', $id)->first();
    }

    //
    public function getComment($id) {
        return Comment::where('id_tour', $id)->orderbyDesc('created_at')->with('user')->paginate(5);
    }


    // ============================= PROGRAME =============================
    public function addPrograme($request)
    {
        try {
            $request->except('_token');
            Programe::create($request->all());

            session()->flash('success', 'Thêm Chương trình Tour thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Không thể thêm');
            \Log::info($e->getMessage());
            return  false;
        }

        return  true;
    }

    public function updatePrograme($request, $programe)
    {
        try {
            $programe->fill($request->input());
            
            $programe->save();

            session()->flash('success', 'Cập nhật thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Lỗi. Cập nhật thất bại');
            \Log::info($e->getMessage());
            
            return false;
        }

        return true;
    }
}