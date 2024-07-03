<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WebsitePortfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $allportfolios = WebsitePortfolio::all();

        return view('frontend.portfolio.portfolio', compact('allportfolios'));
    }
}
