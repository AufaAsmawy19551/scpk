<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function compareProcessors()
    {
        $title = 'Compare';
        $active = 'Compare';
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
        $calculationResult = [];

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
            array_push($calculationResult, $dataProcessor);
        }

        // var_dump($calculationResult);

        return view('pages.compare', compact('title', 'active', 'processor', 'calculationResult'));
    }
}
