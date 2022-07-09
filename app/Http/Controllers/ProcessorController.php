<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function compareProcessors()
    {
        $weight = [1, 1, 1, 1, 1, 1];
        $processors = Processor::all();
        $criterias = [
            'id',
            'title',
            'price',
            'core',
            'thread',
            'boost_clock',
            'cache',
            'tdp',
            'socket',
            'launch',
        ];
        $calculatedCriterias = [
            'price',
            'core',
            'thread',
            'boost_clock',
            'cache',
            'tdp',
        ];
        $costBenefit = ['n', 'n', 'c', 'b', 'b', 'b', 'b', 'c', 'n', 'n'];
        $cMin = [1000, 1000, 1000, 1000, 1000, 1000];
        $cMax = [0, 0, 0, 0, 0, 0];
        $normalizeDatas = [];

        foreach ($processors as $processor) {
            $counter = 0;
            foreach ($calculatedCriterias as $calculatedCriteria) {
                $data = '';
                if ($calculatedCriteria == 'price') {
                    $data = $processor->price;
                } elseif ($calculatedCriteria == 'core') {
                    $data = $processor->core;
                } elseif ($calculatedCriteria == 'thread') {
                    $data = $processor->thread;
                } elseif ($calculatedCriteria == 'boost_clock') {
                    $data = $processor->boost_clock;
                } elseif ($calculatedCriteria == 'cache') {
                    $data = $processor->cache;
                } elseif ($calculatedCriteria == 'tdp') {
                    $data = $processor->tdp;
                }

                if ($data > $cMax[$counter]) {
                    $cMax[$counter] = $data;
                } elseif ($data < $cMin[$counter]) {
                    $cMin[$counter] = $data;
                }

                $counter += 1;
            }
        }

        // var_dump($cMin);
        // var_dump($cMax);

        foreach ($processors as $processor) {
            $counterCostBenefits = 0;
            $counter = 0;
            $score = 0;
            $dataProcessor = [];
            foreach ($criterias as $criteria) {
                $data = '';
                if ($criteria == 'id') {
                    $data = $processor->id;
                } elseif ($criteria == 'title') {
                    $data = $processor->title;
                } elseif ($criteria == 'price') {
                    $data = $processor->price;
                } elseif ($criteria == 'core') {
                    $data = $processor->core;
                } elseif ($criteria == 'thread') {
                    $data = $processor->thread;
                } elseif ($criteria == 'boost_clock') {
                    $data = $processor->boost_clock;
                } elseif ($criteria == 'cache') {
                    $data = $processor->cache;
                } elseif ($criteria == 'tdp') {
                    $data = $processor->tdp;
                } elseif ($criteria == 'socket') {
                    $data = $processor->socket;
                } elseif ($criteria == 'launch') {
                    $data = $processor->launch;
                }

                // var_dump($data);

                // $counter += 1;
                // var_dump($counter);
                // var_dump($weight[$counter]);


                if ($costBenefit[$counterCostBenefits] == 'c') {
                    $valueOfCriteria =
                        ($cMin[$counter] / $data) * ($weight[$counter]);
                    $score += $valueOfCriteria;
                    array_push($dataProcessor, $valueOfCriteria);
                    $counter += 1;
                } elseif ($costBenefit[$counterCostBenefits] == 'b') {
                    $valueOfCriteria =
                        ($data / $cMax[$counter]) * ($weight[$counter]);
                    $score += $valueOfCriteria;
                    array_push($dataProcessor, $valueOfCriteria);
                    $counter += 1;
                } elseif ($costBenefit[$counterCostBenefits] == 'n') {
                    array_push($dataProcessor, $data);
                }

                $counterCostBenefits += 1;
            }
            array_push($dataProcessor, $score);
            // var_dump($score);

            array_push($normalizeDatas, $dataProcessor);
        }

        // var_dump($cMin);
        // var_dump($cMax);
        // var_dump($normalizeDatas);
        return json_encode($normalizeDatas);
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
