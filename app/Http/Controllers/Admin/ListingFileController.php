<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListingFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ListingFileController extends Controller
{
   public function destroy(ListingFile $listingFile)
{
    if (
        Storage::disk('public')->exists($listingFile->file_path)
    ) {
        Storage::disk('public')->delete($listingFile->file_path);
    }

    $listingFile->delete();

    return response()->json([
        'success' => true,
         'message' => 'File deleted successfully.'
    ]);
}

 public function view(ListingFile $listingFile)
{
    $path = storage_path(
        'app/public/' . $listingFile->file_path
    );

    return response()->file($path);
}
}

