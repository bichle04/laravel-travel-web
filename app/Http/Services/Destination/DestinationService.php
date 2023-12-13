<?php

namespace App\Http\Services\Destination;
use Illuminate\Support\Str;
use App\Models\Destination;

class DestinationService 
{
    public function create($request)
    {
        try {
            Destination::create([
                'name' => (string) $request->input('name'),
                'area' => (int) $request->input('area'),
                'file' => (string) $request->input('file'),
                'status' => (string) $request->input('status'),
                'url' => Str::slug($request->input('name'), '-')   // Chuyển tên danh mục thành dạng phù hợp với url (Điện thoại -> dien-thoai)
            ]);
            session()->flash('success', 'Thêm điểm đến thành công');
        } catch (\Exception $e) {
            session()->flash('error', 'Điểm đến này đã tồn tại');
            return false;
        }
        return true;
    }

    public function getAll()
    {
        // return Menu::orderbyDesc('id')->paginate(3);    // sắp xếp danh mục được thêm mới nhất, 3 mục / trang
        return Destination::paginate(10);
    }

    public function updateDes($request, $destination): bool
    {
        $destination->fill($request->input());
        $destination->url = Str::slug($request->input('name'), '-');

        $destination->save();

        session()->flash('success', 'Cập nhật thành công.');
        return true;
    }

    public function delDes($request)
    {
        $id = (int) $request->input('id');
        $des = Destination::where('id', $id)->first();

        if ($des) {
            return Destination::where('id', $id)->delete();
        }
        return false;
    }

// HOME PAGE
    public function inVN_Home()
    {
        return Destination::select('id', 'name', 'file', 'url')
                            ->orderbyDesc('id')
                            ->where([
                                ['area', 0],
                                ['status', 1],
                            ])
                            ->take(6)
                            ->get();
    }

    public function otherCountry_Home()
    {
        return Destination::select('id', 'name', 'file', 'url')
                            ->orderbyDesc('id')
                            ->where([
                                ['area', 1],
                                ['status', 1],
                            ])
                            ->take(6)
                            ->get();
    }


// Destination Page
    public function showAll()
    {
        return Destination::select('id', 'name', 'file', 'url')->paginate(12);
    }

    public function getId($id)
    {
        return Destination::where('id', $id)->where('status', 1)->firstOrFail();
    }

    public function getTour($destination)
    {
        return $destination->tours()
                           ->select('id', 'name', 'file', 'time', 'price', 'description', 'url')
                           ->where('status',1)
                           ->paginate(15);
    }

    public function inVN()
    {
        return Destination::select('id', 'name', 'file', 'url')
                            ->where([
                                ['area', 0],
                                ['status', 1]
                            ])
                            ->paginate(15);
    }

    public function otherCountry()
    {
        return Destination::select('id', 'name', 'file', 'url')
                            ->where([
                                ['area', 1],
                                ['status', 1]
                            ])
                            ->paginate(15);
    }
}