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
        $calculationResults = [];

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

            $id = 0;
            $score = 0;
            $title = 0;
            $price = 0;
            $core = 0;
            $thread = 0;
            $boost_clock = 0;
            $cache = 0;
            $tdp = 0;
            $socket = 0;
            $launch = 0;
            
            foreach ($criterias as $criteria) {
                $data;
                if ($criteria == 'id') {
                    $data = $processor->id;
                    $id = $processor->id;
                } elseif ($criteria == 'title') {
                    $title = $processor->title;
                    $counterCostBenefits += 1;
                    continue;
                } elseif ($criteria == 'price') {
                    $data = $processor->price;
                    $price = $processor->price;
                } elseif ($criteria == 'core') {
                    $data = $processor->core;
                    $core = $processor->core;
                } elseif ($criteria == 'thread') {
                    $data = $processor->thread;
                    $thread = $processor->thread;
                } elseif ($criteria == 'boost_clock') {
                    $data = $processor->boost_clock;
                    $boost_clock = $processor->boost_clock;
                } elseif ($criteria == 'cache') {
                    $data = $processor->cache;
                    $cache = $processor->cache;
                } elseif ($criteria == 'tdp') {
                    $data = $processor->tdp;
                    $tdp = $processor->tdp;
                } elseif ($criteria == 'socket') {
                    $socket = $processor->socket;
                    $counterCostBenefits += 1;
                    continue;
                } elseif ($criteria == 'launch') {
                    $launch = $processor->launch;
                    $counterCostBenefits += 1;
                    continue;
                }

                if ($costBenefit[$counterCostBenefits] == 'c') {
                    $valueOfCriteria =
                        ($cMin[$counter] / $data) * ($weight[$counter]);
                    $score += $valueOfCriteria;
                    $counter += 1;
                } elseif ($costBenefit[$counterCostBenefits] == 'b') {
                    $valueOfCriteria =
                        ($data / $cMax[$counter]) * ($weight[$counter]);
                    $score += $valueOfCriteria;
                    $counter += 1;
                } 

                $counterCostBenefits += 1;
            }

            $calculationResults[] = array(
                'id' => $id, 
                'score' => substr($score, 0, 6),
                'title' => $title,
                'price' => $price,
                'core' => $core,
                'thread' => $thread,
                'boost_clock' => $boost_clock,
                'cache' => $cache,
                'tdp' => $tdp,
                'socket' => $socket,
                'launch' => $launch,
            );

        }

        $columns = array_column($calculationResults, 'score');
        array_multisort($columns, SORT_DESC, $calculationResults);

        // var_dump($calculationResults);


        return view('pages.compare', compact('title', 'active', 'calculationResults'));
    }
}
