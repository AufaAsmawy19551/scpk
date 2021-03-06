<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Processor;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $processors = [
            ['Core i9 11900K',  539,    8,      16,	    5.2,    16,     125,    'LGA 1200', '2021'],
            ['Core i9 11900KF', 513,    8,      16,	    5.2,    16,     125,    'LGA 1200', '2021'],
            ['Core i9 11900',   439,    8,      16,	    5.1,    16,     65,     'LGA 1200', '2021'],
            ['Core i9 11900F',  422,    8,      16,	    5.1,    16,     65,     'LGA 1200', '2021'],
            ['Core i9 11900T',  439,    8,      16,	    4.9,    16,     35,     'LGA 1200', '2021'],
            ['Core i7 11700K',  399,    8,      16,	    5.0,    16,     125,    'LGA 1200', '2021'],
            ['Core i7 11700KF', 374,    8,      16,	    5.0,    16,     125,    'LGA 1200', '2021'],
            ['Core i7 11700',   323,    8,      16,	    4.9,    16,     65,     'LGA 1200', '2021'],
            ['Core i7 11700F',  298,    8,      16,	    4.9,    16,     65,     'LGA 1200', '2021'],
            ['Core i7 11700T',  323,    8,      16,	    4.6,    16,     35,     'LGA 1200', '2021'],
            ['Core i5 11600K',  262,    6,      12,	    4.9,    12,     125,    'LGA 1200', '2021'],
            ['Core i5 11600KF', 237,    6,      12,	    4.9,    12,     125,    'LGA 1200', '2021'],
            ['Core i5 11600',   213,    6,      12,	    4.8,    12,     65,     'LGA 1200', '2021'],
            ['Core i5 11600T',  213,    6,      12,	    4.1,    12,     35,     'LGA 1200', '2021'],
            ['Core i5 11500',   192,    6,      12,	    4.6,    12,     65,     'LGA 1200', '2021'],
            ['Core i5 11500T',  192,    6,      12,	    3.9,    12,     35,     'LGA 1200', '2021'],
            ['Core i5 11400',   182,    6,      12,	    4.4,    12,     65,     'LGA 1200', '2021'],
            ['Core i5 11400F',  157,    6,      12,	    4.4,    12,     65,     'LGA 1200', '2021'],
            ['Core i5 11400T',  182,    6,      12,	    3.7,    12,     35,     'LGA 1200', '2021'],
            ['Core i9 10900T',  439,    10,     20,     4.6,    20,     35,     'LGA 1200', '2020'],
            ['Core i9 10900KF', 463,    10,     20,     5.3,    20,     125,    'LGA 1200', '2020'],
            ['Core i9 10900K',  488,    10,     20,     5.3,    20,     125,    'LGA 1200', '2020'],
            ['Core i9 10900F',  422,    10,     20,     5.2,    20,     65,     'LGA 1200', '2020'],
            ['Core i9 10900E',  440,    10,     20,     4.7,    20,     65,     'LGA 1200', '2020'],
            ['Core i9 10900',   439,    10,     20,     5.2,    20,     65,     'LGA 1200', '2020'],
            ['Core i9 10850K',  453,    10,     20,     5.2,    20,     125,    'LGA 1200', '2020'],
            ['Core i7 10700TE', 330,    8,      16,	    4.4,    16,     35,     'LGA 1200',	'2020'],
            ['Core i7 10700T',  323,    8,      16,	    4.5,    16,     35,     'LGA 1200',	'2020'],
            ['Core i7 10700KF', 349,    8,      16,	    5.1,    16,     125,    'LGA 1200',	'2020'],
            ['Core i7 10700K',  374,    8,      16,	    5.1,    16,     125,    'LGA 1200',	'2020'],
            ['Core i7 10700F',  298,    8,      16,	    4.8,    16,     65,     'LGA 1200',	'2020'],
            ['Core i7 10700E',  330,    8,      16,	    4.5,    16,     65,     'LGA 1200',	'2020'],
            ['Core i7 10700',   323,    8,      16,	    4.8,    16,     65,     'LGA 1200',	'2020'],
            ['Core i5 10600T',  213,    6,      12,	    4.0,    12,     35,     'LGA 1200',	'2020'],
            ['Core i5 10600KF', 237,    6,      12,	    4.8,    12,     125,    'LGA 1200',	'2020'],
            ['Core i5 10600K',  262,    6,      12,	    4.8,    12,     125,    'LGA 1200',	'2020'],
            ['Core i5 10600',   213,    6,      12,	    4.8,    12,     65,     'LGA 1200',	'2020'],
            ['Core i5 10505',   192,    6,      12,	    4.6,    12,     65,     'LGA 1200',	'2021'],
            ['Core i5 10500TE', 195,    6,      12,	    3.7,    12,     35,     'LGA 1200',	'2020'],
            ['Core i5 10500T',  192,    6,      12,	    3.8,    12,     35,     'LGA 1200',	'2020'],
            ['Core i5 10500E',  195,    6,      12,	    4.2,    12,     65,     'LGA 1200',	'2020'],
            ['Core i5 10500',   192,    6,      12,	    4.5,    12,     65,     'LGA 1200',	'2020'],
            ['Core i5 10400T',  182,    6,      12,	    3.6,    12,     35,     'LGA 1200',	'2020'],
            ['Core i5 10400F',  155,    6,      12,	    4.3,    12,     65,     'LGA 1200',	'2020'],
            ['Core i5 10400',   182,    6,      12,	    4.3,    12,     65,     'LGA 1200',	'2020'],
            ['Core i3 10320',   154,    4,      8,      4.6,    8,      65,     'LGA 1200', '2020'],
            ['Core i3 10300T',  143,    4,      8,      3.9,    8,      35,     'LGA 1200', '2020'],
            ['Core i3 10300',   143,    4,      8,      4.4,    8,      65,     'LGA 1200', '2020'],
            ['Core i3 10100TE', 125,    4,      8,      3.6,    6,      35,     'LGA 1200', '2020'],
            ['Core i3 10100T',  122,    4,      8,      3.8,    6,      35,     'LGA 1200', '2020'],
            ['Core i3 10100F',  79,	    4,	    8,      4.3,    6,      65,     'LGA 1200', '2020'],
            ['Core i3 10100E',  125,    4,	    8,      3.8,    6,      65,     'LGA 1200', '2020'],
            ['Core i3 10100',   122,    4,	    8,      4.3,    6,      65,     'LGA 1200', '2020'],
            ['Core i9 9900KS',  524,    8,      1,      5.0,	16,     127,    'LGA 1151', '2019'],
            ['Core i9 9900K',   499,    8,      1,      5.0,	16,     95,     'LGA 1151', '2018'],
            ['Core i9 9900',    449,    8,      1,      5.0,	16,     65,     'LGA 1151', '2019'],
            ['Core i9 9900T',   439,    8,      1,      4.4,	16,     35,     'LGA 1151', '2019'],
            ['Core i7 9700K',   385,    8,      8,      4.9,	12,     95,     'LGA 1151', '2018'],
            ['Core i7 9700',    335,    8,      8,      4.7,	12,     65,     'LGA 1151', '2019'],
            ['Core i7 9700T',   323,    8,      8,      4.3,	12,     35,     'LGA 1151', '2019'],
            ['Core i7 9700TE',  323,    8,      8,      3.8,	12,     35,     'LGA 1151', '2019'],
            ['Core i5 9600K',   263,    6,      6,      4.6,	9,      95,     'LGA 1151', '2018'],
            ['Core i5 9600KF',  262,    6,      6,      4.6,	9,      95,     'LGA 1151', '2019'],
            ['Core i5 9600',    224,    6,      6,      4.6,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9600T',   213,    6,      6,      3.9,	9,      35,     'LGA 1151', '2019'],
            ['Core i5 9500',    202,    6,      6,      4.4,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9500E',   192,    6,      6,      4.2,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9500F',   192,    6,      6,      4.4,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9500T',   192,    6,      6,      3.7,	9,      35,     'LGA 1151', '2019'],
            ['Core i5 9500TE',  192,    6,      6,      3.6,	9,      35,     'LGA 1151', '2019'],
            ['Core i5 9400',    182,    6,      6,      4.1,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9400F',   149,    6,      6,      4.1,	9,      65,     'LGA 1151', '2019'],
            ['Core i5 9400T',   182,    6,      6,      3.4,	9,      35,     'LGA 1151', '2019'],
            ['Core i3 9350K',   184,    4,      4,      4.6,	8,      91,     'LGA 1151', '2019'],
            ['Core i3 9350KF',  184,    4,      4,      4.6,	8,      91,     'LGA 1151', '2019'],
            ['Core i3 9320',    162,    4,      4,      4.4,	8,      65,     'LGA 1151', '2019'],
            ['Core i3 9300',    152,    4,      4,      4.3,	8,      65,     'LGA 1151', '2019'],
            ['Core i3 9300T',   143,    4,      4,      3.8,	8,      35,     'LGA 1151', '2019'],
            ['Core i3 9100',    122,    4,      4,      4.2,	6,      65,     'LGA 1151', '2019'],
            ['Core i3 9100E',   122,    4,      4,      3.7,	6,      65,     'LGA 1151', '2019'],
            ['Core i3 9100F',   88,     4,      4,      4.2,	6,      65,     'LGA 1151', '2019'],
            ['Core i3 9100T',   122,    4,      4,      3.7,	6,      35,     'LGA 1151', '2019'],
            ['Core i3 9100TE',  122,    4,      4,      3.2,	6,      35,     'LGA 1151', '2019'],
            ['Core i9 8950H',   583,    6,      12,     4.8,    12,     45,     'BGA 1440', '2018'],
            ['Core i7 8850H',   395,    6,      12,     4.3,    9,      45,     'BGA 1440', '2018'],
            ['Core i7 8750H',   395,    6,      12,     4.1,    9,      45,     'BGA 1440', '2018'],
            ['Core i7 8700B',   303,    6,      12,     4.6,    12,     65,     'BGA 1440', '2018'],
            ['Core i7 8665U',   409,    4,	    8,      4.8,	8,      15,     'BGA 1528', '2019'],
            ['Core i7 8650U',   409,    4,	    8,      4.2,	8,      15,     'BGA 1356', '2017'],
            ['Core i7 8569U',   431,    4,	    8,      4.7,	8,      28,     'BGA 1528', '2019'],
            ['Core i7 8565U',   409,    4,	    8,      4.6,	8,      15,     'BGA 1528', '2018'],
            ['Core i7 8559U',   431,    4,	    8,      4.5,	8,      28,     'BGA 1528', '2018'],
            ['Core i7 8557U',   431,    4,	    8,      4.5,	8,      15,     'BGA 1528', '2019'],
            ['Core i7 8550U',   409,    4,	    8,      4.0,	8,      15,     'BGA 1356', '2017'],
            ['Core i7 8500Y',   393,    2,	    4,      4.2,	4,      5,      'BGA 1515', '2019'],
            ['Core i5 8500B',   192,    6,	    6,      4.1,	9,      65,     'BGA 1440', '2018'],
            ['Core i5 8400H',   250,    4,	    8,      4.2,	8,      45,     'BGA 1440', '2018'],
            ['Core i5 8400B',   182,    6,	    6,      4.0,	9,      65,     'BGA 1440', '2018'],
            ['Core i5 8365U',   297,    4,	    8,      4.1,	6,      15,     'BGA 1528', '2019'],
            ['Core i5 8350U',   297,    4,	    8,      3.6,	6,      15,     'BGA 1356', '2017'],
            ['Core i5 8310Y',   281,    2,	    4,      3.9,	4,      7,      'BGA 1515', '2019'],
            ['Core i5 8300H',   250,    4,	    8,      4.0,	8,      45,     'BGA 1440', '2018'],
            ['Core i5 8279U',   320,    4,	    8,      4.1,	6,      28,     'BGA 1440', '2019'],
            ['Core i5 8269U',   320,    4,	    8,      4.2,	6,      28,     'BGA 1528', '2018'],
            ['Core i5 8265U',   297,    4,	    8,      3.9,	6,      15,     'BGA 1528', '2018'],
            ['Core i5 8260U',   297,    4,	    8,      3.9,	6,      15,     'BGA 1528', '2019'],
            ['Core i5 8259U',   320,    4,	    8,      3.8,	6,      28,     'BGA 1528', '2018'],
            ['Core i5 8257U',   320,    4,	    8,      3.9,	6,      15,     'BGA 1528', '2019'],
            ['Core i5 8250U',   297,    4,	    8,      3.4,	6,      15,     'BGA 1356', '2017'],
            ['Core i5 8210Y',   281,    2,	    4,      3.6,	4,      7,      'BGA 1515', '2019'],
            ['Core i5 8200Y',   291,    2,	    4,      3.9,	4,      5,      'BGA 1515', '2018'],
            ['Core i3 8145U',   281,    2,	    4,      3.9,	4,      15,     'BGA 1528', '2018'],
            ['Core i3 8140U',   281,    2,	    4,      3.9,	4,      15,     'BGA 1528', '2019'],
            ['Core i3 8130U',   281,    2,	    4,      3.4,	4,      15,     'BGA 1356', '2018'],
            ['Core i3 8109U',   304,    2,	    4,      3.6,	4,      28,     'BGA 1528', '2018'],
            ['Core i3 8100H',   225,    4,	    4,      3.0,	6,      45,     'BGA 1440', '2018'],
            ['Core i3 8100B',   133,    4,	    4,      3.6,	6,      65,     'BGA 1440', '2018'],
            ['Core i9 7980XE',  1999,   18,     36,     4.2,    24.75,  165,    'LGA 2066', '2017'],
            ['Core i9 7960X',   1699,   16,     32,     4.2,    22.00,  165,    'LGA 2066', '2017'],
            ['Core i9 7940X',   1399,   14,     28,     4.3,    19.25,  165,    'LGA 2066', '2017'],
            ['Core i9 7920X',   1189,   12,     24,     4.3,    16.50,  140,    'LGA 2066', '2017'],
            ['Core i9 7900X',   989,    10,     20,     4.3,    13.75,  140,    'LGA 2066', '2017'],
            ['Core i7 7820X',   589,    8,	    16,	    4.3,    11.00,  140,    'LGA 2066', '2017'],
            ['Core i7 7800X',   383,    6,	    12,	    4.0,    8.25,   140,    'LGA 2066', '2017'],
            ['Core i7 7740X',   339,    4,	    8,	    4.5,	8,	    112,    'LGA 2066', '2017'],
            ['Core i7 7700K',	350,    4,	    8,      4.5,	8,	    91,     'LGA 1151', '2017'],
            ['Core i7 7700',	303,    4,	    8,      4.2,	8,	    65,     'LGA 1151', '2017'],
            ['Core i7 7700T',	303,    4,	    8,      3.8,	8,	    35,     'LGA 1151', '2017'],
            ['Core i5 7640X',	242,    4,	    4,      4.2,	6,	    112,    'LGA 2066', '2017'],
            ['Core i5 7600K',	243,    4,	    4,      4.2,	6,	    91,     'LGA 1151', '2017'],
            ['Core i5 7600',	224,    4,	    4,      4.1,	6,	    65,     'LGA 1151', '2017'],
            ['Core i5 7600T',	224,    4,	    4,      3.7,	6,	    35,     'LGA 1151', '2017'],
            ['Core i5 7500',	192,    4,	    4,      3.8,	6,	    65,     'LGA 1151', '2017'],
            ['Core i5 7500T',	192,    4,	    4,      3.3,	6,	    35,     'LGA 1151', '2017'],
            ['Core i5 7400',	182,    4,	    4,      3.5,	6,	    65,     'LGA 1151', '2017'],
            ['Core i5 7400T',	187,    4,	    4,      3.0,	6,	    35,     'LGA 1151', '2017'],
            ['Core i3 7350K',	179,	2,	    4,	    4.2,	4,	    60,     'LGA 1151',	'2017'],
            ['Core i3 7320',	157,	2,	    4,	    4.1,	4,	    51,     'LGA 1151',	'2017'],
            ['Core i3 7300',	147,	2,	    4,	    4.0,	4,	    51,     'LGA 1151',	'2017'],
            ['Core i3 7300T',	147,	2,	    4,	    3.5,	4,	    35,     'LGA 1151',	'2017'],
            ['Core i3 7100',	117,	2,	    4,	    3.9,	3,	    51,     'LGA 1151',	'2017'],
            ['Core i3 7100T',	117,	2,	    4,	    3.4,	3,	    35,     'LGA 1151',	'2017'],
            ['Core i3 7101E',   117,	2,	    4,	    3.9,	3,	    54,     'LGA 1151',	'2017'],
            ['Core i3 7101TE',  117,	2,	    4,	    3.4,	3,	    35,     'LGA 1151',	'2017'],
        ];

        foreach($processors as $processor){
            Processor::create([
                'title' => $processor[0],
                'price' => $processor[1],
                'core' => $processor[2],
                'thread' => $processor[3],
                'boost_clock' => $processor[4],
                'cache' => $processor[5],
                'tdp' => $processor[6],
                'socket' => $processor[7],
                'launch' => $processor[8]
            ]);
        }
    }
}
