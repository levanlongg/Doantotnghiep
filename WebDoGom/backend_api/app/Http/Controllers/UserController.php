<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //get method
    public function user()
    {
        $userlist=User::paginate(2);
        return response()->json($userlist,200);
        // return response()->json(ProducerModel::get(),200);
    }
    //get method by id
    public function producttypeById($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message'=>'Người dùng cần tìm không tồn tại!'], 404);
        }
        return response()->json($user,200);
        //return response()->json(ProducerModel::find($id),200);
    }
    //post method
    // public function producttypeSave(Request $request)
    // {
    //     $rules = [
    //         'name'=>'required|min:1',
    //         'describle'=>'required|min:1',
    //     ];
    //     $validator= Validator::make($request->all(),$rules);
    //     if($validator->fails())
    //     {
    //        return response()->json($validator->errors(),400);
    //     }
    //     $user=User::create($request->all());
    //     return response()->json($user,201);
    // }
    //update method
    public function producttypeUpdate(Request $request, $id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message'=>'Chưa cập nhật người dùng!'], 404);
        }
        else
        {
            return response()->json(['message'=>'Cập nhật người dùng thành công!'], 404);
        }
        $user->update($request->all());
        return response()->json($user,200);
    }
    //delete method
    public function producttypeDelete($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['message'=>'Xóa người dùng không thành công!'], 404);
        }
        else
        {
            return response()->json(['message'=>'Xóa người dùng thành công!'], 404);
        }
        $user->delete();
        return response()->json(null,204);
    }
}
