<?php

use App\Http\Controllers\ContactController;
use App\Support\ServiceCatalog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/marketplace', function () {
    return view('marketplace');
})->name('marketplace');

Route::get('/services/{slug}', function (string $slug) {
    $service = ServiceCatalog::all()[$slug] ?? abort(404);

    return view('service', ['service' => $service]);
})->name('service.show');

Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')
    ->name('contact.send');

Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => url('/about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/services'), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => url('/marketplace'), 'changefreq' => 'weekly', 'priority' => '0.8'],
    ];

    foreach (array_keys(ServiceCatalog::all()) as $slug) {
        $urls[] = ['loc' => url('/services/'.$slug), 'changefreq' => 'monthly', 'priority' => '0.7'];
    }

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($urls as $url) {
        $xml .= "  <url>\n";
        $xml .= '    <loc>'.htmlspecialchars($url['loc'])."</loc>\n";
        $xml .= '    <changefreq>'.$url['changefreq']."</changefreq>\n";
        $xml .= '    <priority>'.$url['priority']."</priority>\n";
        $xml .= '    <lastmod>'.now()->toDateString()."</lastmod>\n";
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
