<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'ParkSecure — Smart Parking',
            'desc'  => 'Sistem parkir modern: dashboard real-time, laporan pajak otomatis, integrasi tapping box.',
            'tags'  => ['Laravel','Tailwind','Livewire','MySQL'],
            'image' => '/images/parksecure.jpg',
            'link'  => '#'
            ],
            [
            'title' => 'Nuansa Gym — CMS Artikel',
            'desc'  => 'CMS CRUD artikel dengan editor, SEO meta, dan arsip.',
            'tags'  => ['Laravel','Blade','Alpine'],
            'image' => '/images/gym.jpg',
            'link'  => '#'
            ],
            [
            'title' => 'Techno Solusi — Company Profile',
            'desc'  => 'Company profile responsif dengan SEO dasar & komponen reusable.',
            'tags'  => ['Laravel','Tailwind'],
            'image' => '/images/tsi.jpg',
            'link'  => '#'
            ],
            [
            'title' => 'LPK Asa Optima',
            'desc'  => 'Lpk Asa Optima: website responsif, SEO dasar, dan komponen reusable.',
            'tags'  => ['Laravel','Tailwind','Alpine'],
            'image' => '/images/skyblue.jpg',
            'link'  => 'https://asaoptima.co.id/'
        ],
    ];

    $skills = [
        ['Laravel', 90], ['PHP', 88], ['TailwindCSS', 92], ['MySQL', 85],
        ['Alpine/Livewire', 80], ['JavaScript', 82], ['Git', 80]
    ];

    return view('pages.home', [
        'title'   => 'Sky Blue — Portfolio',
        'meta'    => 'Portfolio Sky Blue: proyek, keahlian, kontak.',
        'projects'=> $projects,
        'skills'  => $skills,
    ]);
});
