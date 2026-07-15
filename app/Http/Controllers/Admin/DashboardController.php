<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $listingsCount = Listing::count();

        $categoriesCount = Category::count();

        $testimonialsCount = Testimonial::count();

        $recentListings = Listing::with('category')
            ->latest()
            ->take(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'listingsCount',
                'categoriesCount',
                'testimonialsCount',
                'recentListings'
            )
        );
    }
}