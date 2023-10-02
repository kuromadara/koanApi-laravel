<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Koan;
use Illuminate\Http\Request;

class KoanController extends Controller
{

    public function count(){
        try{

            $data = Koan::where('status', 1)->count();

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Koans count loaded successfully',
                    'data' => [
                        'count' => $data,
                    ],
                ],
                200
            );

        }  catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong' . $th->getMessage(),
                ],
                401
            );
        }
    }

    public function allKoans()
    {
        try{

            $data = Koan::where('status', 1)->get();

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Koans loaded successfully',
                    'data' => $data
                ],
                200
            );

        }  catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong' . $th->getMessage(),
                ],
                401
            );
        }
    }

    public function koan(Request $request){
        try{

            $data = Koan::where('id', $request->id)->where('status', 1)->first();

            if(!$data){
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Something went wrong',
                    ],
                    401
                );
            }

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Koan loaded successfully',
                    'data' => $data
                ],
                200
            );

        }  catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong' . $th->getMessage(),
                ],
                401
            );
        }
    }
}
