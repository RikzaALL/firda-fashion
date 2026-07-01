<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');

    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'text/xml']);
    }

    return Sitemap::create()
        ->add(Url::create('/')
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(1.0))
        ->toResponse(request());
});
