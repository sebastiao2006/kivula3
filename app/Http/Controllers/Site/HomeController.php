<?php

namespace App\Http\Controllers\Site;

use App\Models\Partner;  // Asegure-se de que a classe Partner está sendo importada
/* use App\Models\Portfolio; */
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Portfolio;

class HomeController extends Controller
{
public function index()
{
    $partners = Partner::all();
/*     $portfolios = Portfolio::all(); */
    $news = News::latest()->take(3)->get();
    $portfolios = Portfolio::latest()->get();

    return view('site.home.index', compact('partners'/* , 'portfolios' */, 'news','portfolios'));
}


    
}

