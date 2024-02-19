<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardControllor extends Controller
{
    public function index()
    {
        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];
        //resources/views/awards/index.blade.php
        return view(
            'awards.index',
            [
                'title' => 'Movie awards',
                'awards' => $awards,
                'current_time' => date('G:i:s'),
            ]
        );
    }

    public function index2() {
        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];

       

        $title = 'Movie awards';

        $current_time = date('G:i:s');

        // dd($current_time);

        return view(
            'awards.index',
            [
                'title' => $title,
                'awards' => $awards,
                'current_time' => $current_time
            ]
        );

        // equivalent to previous return!
        // return view(
        //     'awards.index', compact('title', 'awards', 'current_time'));
    }
}
