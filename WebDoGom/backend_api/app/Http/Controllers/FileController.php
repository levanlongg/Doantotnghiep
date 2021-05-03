<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProductTypeModel;

class FileController extends Controller
{
    public function producerList()
    {
        return response()->download(public_path('u.img','user.img'));
    }
    public function producerSave(Request $request)
    {
        $fileName="use_image.jpg";
        $path = $request -> file('photo')->move(public_path("/"), $fileName);
        $photoURL=url('/'.$fileName);
        return response()->json(['url' => $photoURL],200);
    }
}
