<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\ListingFile;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::with('category')->latest()->get();

        return view(
            'admin.listings.index',
            compact('listings')
        );
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view(
            'admin.listings.create',
            compact('categories')
        );
    }

    public function store(Request $request)
    {
       $validated = $request->validate([

    'title' => 'required|max:255',

    'category_id' => 'required|exists:categories,id',

    'location' => 'required|max:255',

    'price' => 'required|numeric',

    'cash_flow' => 'required|numeric',

    'description' => 'required',

    'files' => 'nullable|array',

    'files.*' => 'file|mimes:pdf,doc,docx,xls,xlsx,txt,jpg,jpeg,png,webp|max:10240',

]);

        $validated['featured'] = $request->boolean('featured');

       $listing = Listing::create($validated);

if ($request->hasFile('files')) {

    foreach ($request->file('files') as $file) {

        $path = $file->store('listing-files', 'public');

        $listing->files()->create([

            'file_name' => $file->getClientOriginalName(),

            'file_path' => $path,

            'file_type' => $file->getClientOriginalExtension(),

            'file_size' => $file->getSize(),

        ]);

    }

}

        return redirect()
            ->route('admin.listings.index')
            ->with('success', 'Business created successfully.');
    }

    public function show(Listing $listing)
{
    $listing->load([
        'category',
        'files'
    ]);

    return view(
        'admin.listings.show',
        compact('listing')
    );
}

    public function edit(Listing $listing)
{
    $categories = Category::orderBy('name')->get();

    $listing->load('files');

return view(
    'admin.listings.edit',
    compact(
        'listing',
        'categories'
    )
);
}

public function update(Request $request, Listing $listing)
{
    $validated = $request->validate([

        'title' => 'required|max:255',

        'category_id' => 'required|exists:categories,id',

        'location' => 'required|max:255',

        'price' => 'required|numeric',

        'cash_flow' => 'required|numeric',

        'description' => 'required',

        'files' => 'nullable|array',

        'files.*' => 'file|mimes:pdf,doc,docx,xls,xlsx,txt,jpg,jpeg,png,webp|max:10240',

    ]);

    $validated['featured'] = $request->boolean('featured');

    $listing->update($validated);

    if ($request->hasFile('files')) {

        foreach ($request->file('files') as $file) {

            $path = $file->store('listing-files', 'public');

            $listing->files()->create([

                'file_name' => $file->getClientOriginalName(),

                'file_path' => $path,

                'file_type' => $file->getClientOriginalExtension(),

                'file_size' => $file->getSize(),

            ]);

        }

    }

    return redirect()
        ->route('admin.listings.index')
        ->with('success', 'Business updated successfully.');
}

public function destroy(Listing $listing)
{
    // Delete all uploaded files from storage
    foreach ($listing->files as $file) {

        if (Storage::disk('public')->exists($file->file_path)) {
            Storage::disk('public')->delete($file->file_path);
        }

        $file->delete();
    }

    // Delete business
    $listing->delete();

    return redirect()
        ->route('admin.listings.index')
        ->with('success', 'Business deleted successfully.');
}
}