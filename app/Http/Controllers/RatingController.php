<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\ratings;
use App\Models\Check;
use Brian2694\Toastr\Facades\Toastr;


use DB;
use Auth;

class RatingController extends Controller
{
    public function likes($id){
        
    if (ratings::where('user_id', '=', Auth::user()->id)->exists() && ratings::where('idea_id', '=', $id)->exists() )  {
        $data=ratings::select('likes')->where('user_id', Auth::user()->id)->where('idea_id', '=', $id)->first();
        $likes=$data->likes;

        if($likes==0){
        $data=Idea::select('unlikes')->where('id', $id)->first();
        $unlikes=$data->unlikes;
        $likedata=Idea::select('likes')->where('id', $id)->first();
        $datalikes=$likedata->likes;
        $sub=$datalikes+1;
        $add=$unlikes - 1;

        if($unlikes>0){
            Idea::where('id', $id)
            ->update([
                'unlikes' => $add,
                'likes'=>$sub
            ]);
        }else{
            Idea::where('id', $id)
            ->update([
                // 'unlikes' => $add,
                'likes'=>$sub
            ]);
        
        }

        }
    
        ratings::where('user_id', Auth::user()->id)
        ->update([
            'likes' => 1,
            'unlikes' => 0
        ]);
        return redirect()->back();
    }else{
        $likes=new ratings;
        $likes->user_id = Auth::user()->id;
        $likes->idea_id = $id;    
        $likes->likes=1;
        $likes->unlikes=0;
        $likes->save();

        $data=Idea::select('likes')->where('id', $id)->first();
        $likes=$data->likes;
     
        $add=$likes + 1;
 
        Idea::where('id', $id)
            ->update([
                'likes' => $add
            ]);
       
        return redirect()->back();
    }
}
public function unlikes($id){
        
  
    if (ratings::where('user_id', '=', Auth::user()->id)->exists() && ratings::where('idea_id', '=', $id)->exists() )  {
        $data=ratings::select('unlikes')->where('user_id', Auth::user()->id)->where('idea_id', '=', $id)->first();
          
        $likes=$data->unlikes;

        if($likes==0){
        $data=Idea::select('unlikes')->where('id', $id)->first();
        $unlikes=$data->unlikes;
        $likedata=Idea::select('likes')->where('id', $id)->first();
        $datalikes=$likedata->likes;
        $sub=$datalikes-1;
        $add=$unlikes + 1;
        Idea::where('id', $id)
            ->update([
                'unlikes' => $add,
                'likes'=>$sub
            ]);
        }
        ratings::where('user_id', Auth::user()->id)
        ->update([
            'unlikes' => 1,
            'likes' =>0
        ]);
    
        return redirect()->back();
 }else{
        $likes=new ratings;
        $likes->user_id = Auth::user()->id;
        $likes->idea_id = $id;    
        $likes->likes=1;
        $likes->unlikes=0;
        $likes->save();

        $data=Idea::select('likes')->where('id', $id)->first();
        $likes=$data->likes;
        $add=$likes + 1;
        Idea::where('id', $id)
            ->update([
                'likes' => $add

            ]);
       
        return redirect()->back();
    }
}
public function ratings(){
    $data = DB::table('ratings')->get();
    return view('usermanagement.ratings',compact('data'));
}
}
