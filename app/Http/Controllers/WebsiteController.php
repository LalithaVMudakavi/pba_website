<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Testimonial;

class WebsiteController extends Controller
{

public function about()
{
    return view('website.about.about-page');
}

public function services()
{
    return view('website.services.services-page');
}

public function listings()
{
    $categories = collect([
        (object)[
            'id' => 0,
            'name' => 'All',
            'slug' => 'all',
        ]
    ])->merge(
        Category::orderByRaw("
            FIELD(name,
                'Manufacturing',
                'Healthcare',
                'Technology',
                'Retail',
                'Services'
            )
        ")->get()
    );

    $businesses = Listing::with([
        'category',
        'files' => function ($query) {
            $query->whereIn('file_type', [
                'jpg',
                'jpeg',
                'png',
                'webp'
            ]);
        }
    ])->get();

    return view(
        'website.listings.listings-page',
        compact('categories', 'businesses')
    );
}

public function valuation()
{
    return view('website.valuation.valuation-page');
}

public function testimonials()
{
    $testimonials = Testimonial::all();

    return view(
        'website.testimonials.testimonials-page',
        compact('testimonials')
    );
}

public function contact()
{
    return view('website.contact.contact-page');
}

public function process()
{
    return view('website.process.process-page');
}

   public function index()
{
    // $categories = Category::orderBy('name')->get();
    $categories = collect([
        (object)[
            'id' => 0,
            'name' => 'All',
            'slug' => 'all',
        ]
    ])->merge(
        Category::orderByRaw("
            FIELD(name,
                'Manufacturing',
                'Healthcare',
                'Technology',
                'Retail',
                'Services'
            )
        ")->get()
    );


    $businesses = Listing::with([
    'category',
    'files' => function ($query) {
        $query->whereIn('file_type', [
            'jpg',
            'jpeg',
            'png',
            'webp'
        ]);
    }
])->get();

     $testimonials = Testimonial::all();

    return view(
        'website.index',
        compact(
            'categories',
            'businesses',
            'testimonials'
        )
    );
}

public function show(Listing $listing)
{
    $listing->load([
        'category',
        'files',
    ]);

    return view(
        'website.listings.listings-details',
        compact('listing')
    );
}

public function buyerService()
{
    return view('website.services.buyer');
}

public function sellerService()
{
    return view('website.services.seller');
}

public function appraisalService()
{
    return view('website.services.appraisal');
}
}