<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonaciController extends Controller
{
    public function index(Request $request)
    {
        $fibonaci = '';
        if ($request->input) {
            $fibonaci = $this->fibonaci($request->input);
        }

        $data['fibonaci'] = $fibonaci;
        
        return view('fibonaci.index', $data);
    }

    private function fibonaci($number)
    {
        $arr = [];

        for ($i=0; $i < $number; $i++) { 
            if ($i == 0) {
                $arr[] = 1;
                continue;
            }

            $arr[] = ($arr[$i-1] ?? 0) + ($arr[$i-2] ?? 0);
        }

        return implode(', ', $arr);
    }
}
