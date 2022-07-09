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
        $cMin = [];
        $cMax = [];

        foreach ($processors as $processor) {
            
        }
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
