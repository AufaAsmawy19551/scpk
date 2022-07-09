<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function compareProcessors()
    {
        $processors = Processor::all();
        $costBenefit = ['n', 'n', 'c', 'b', 'b', 'b', 'b', 'c', 'n', 'n'];
        $cMin = [1000, 1000, 1000, 1000, 1000, 1000];
        $cMax = [0, 0, 0, 0, 0, 0];
        $min = 0;
        $max = 0;

        foreach ($processors as $processor) {
            $price = $processor->price;
            $core = $processor->core;
            $thread = $processor->thread;
            $boost_clock = $processor->boost_clock;
            $cache = $processor->cache;
            $tdp = $processor->tdp;

            if ($price > $cMax[0]) {
                $cMax[0] = $price;
            }else if ($price < $cMin[0]) {
                $cMin[0] = $price;
            }

            if ($core > $cMax[1]) {
                $cMax[1] = $core;
            }else if ($core < $cMin[1]) {
                $cMin[1] = $core;
            }

            if ($thread > $cMax[2]) {
                $cMax[2] = $thread;
            }else if ($thread < $cMin[2]) {
                $cMin[2] = $thread;
            }

            if ($boost_clock > $cMax[3]) {
                $cMax[3] = $boost_clock;
            }else if ($boost_clock < $cMin[3]) {
                $cMin[3] = $boost_clock;
            }

            if ($cache > $cMax[4]) {
                $cMax[4] = $cache;
            }else if ($cache < $cMin[4]) {
                $cMin[4] = $cache;
            }

            if ($tdp > $cMax[5]) {
                $cMax[5] = $tdp;
            }else if ($tdp < $cMin[5]) {
                $cMin[5] = $tdp;
            }

            // var_dump($price); 
            // var_dump($core); 
            // var_dump($thread); 
            // var_dump($boost_clock); 
            // var_dump($cache); 
            // var_dump($tdp); 
            // if (condition) {
            //     # code...
            // }
        }

        var_dump($cMin); 
        var_dump($cMax); 
    }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Processor  $processor
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Processor $processor)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Processor  $processor
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Processor $processor)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Processor  $processor
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Processor $processor)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Processor  $processor
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Processor $processor)
    // {
    //     //
    // }
}
