<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\BinhLuan;
use App\User;

class AjaxController extends Controller
{

    public function postBinhLuan(Request $request)
    {
		$comment = new BinhLuan();
        $comment->tour_id = $request->tour_id;
        $comment->parent_id = $request->parent_id;
        $comment->noidung = $request->noidung;
        $comment->users_id = $request->users_id;
        $comment->save();

        $user = User::find($request->users_id);
    
		echo json_encode(array("comment"=>$comment, "user"=>$user, "tour_id"=>$request->tour_id, "user_id"=>$request->users_id));
    }

    public function postTimKiem(Request $request){
        $tk = $request->search;
        $tourtimkiem = Tour::where([['tentour','like','%'.$tk.'%'],['trangthaitour',1]])
                        ->orWhere([['giatour',$tk],['trangthaitour',1]])->get();
        return json_encode( ["ketqua" => $tourtimkiem, "soluong" => $tourtimkiem->count()] );
    }
}
