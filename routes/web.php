<?php

use Illuminate\Support\Facades\Route;
use Spatie\SchemaOrg\Schema;

Route::get('/', function () {
    $title = config('app.name');
    $description = 'See every site you have access to from one Pelican-style home base.';

    seo()
        ->title($title)
        ->description($description)
        ->canonical($url = route('home'))
        ->addSchema(
            Schema::webPage()
                ->name($title)
                ->description($description)
                ->url($url)
                ->author(Schema::organization()->name($title))
        );

    $user = auth()->user();

    $sites = $user
        ? $user->sites()
            ->latest()
            ->get()
        : collect();

    return view('home', compact('sites'));
})
    ->middleware('auth')
    ->name('home');
