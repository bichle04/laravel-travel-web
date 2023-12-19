<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\Tour\TourService;
use App\Models\Comment;
use App\Models\Tour;
use Illuminate\Http\Request;
use Validator;

class TourController extends Controller
{

    protected $tourService;

    public function __construct(TourService $tourService)
    {
        $this->tourService = $tourService;
    }

    public function allTour()
    {
        return view('user.tour', [
            'title' => "Tất cả các tour",
            'tours' => $this->tourService->get(),
            'isDetail' => false,
            'class_css' => '__des'
        ]);
    }

    public function detail(Tour $tour, $id, $idDes)
    {
        $tour = $this->tourService->getId($id);

        $idDes = $tour->destination->id;
        $tours = $this->tourService->getIdDes($id, $idDes);

        $programe = $this->tourService->getContent($id);
        return view('user.detail', [
            'title' => 'Tour ' . $tour->name,
            'isDetail' => true,
            'tour' => $tour,
            'tours' => $tours,
            'programe' => $programe,
        ]);
    }

    public function load_comment(Request $request)
    {
        $id_tour = $request->id_tour;
        $comment = Comment::where('id_tour', $id_tour)->orderbyDesc('created_at')->with('user')->take(5)->get();

        $html = '';
        foreach ($comment as $key => $cmt) {
            $html .= '
                <div class="all__cmt ">
                    <label style="font-weight: bold">' . $cmt->user->name . '</label>
                    <span style="font-size: 15px; color: #7F8487">' . $cmt->created_at . '</span><br>
                    <p>' . $cmt->star . ' <i class="ri-star-fill"></i></p>
                    <p>' . $cmt->content . '</p>
                </div>
            ';
        }

        echo $html;
    }

    public function add_comment(Request $request)
    {
        $id_user = $request->id_user;
        $id_tour = $request->id_tour;
        $content = $request->content;
        $star    = $request->star;

        $comment = new Comment;
        $comment->id_tour = $id_tour;
        $comment->id_user = $id_user;
        $comment->content = $content;
        $comment->star    = $star;
        $comment->save();
    }
}
