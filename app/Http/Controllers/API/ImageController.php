<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function viewImage(string $dir, string $title)
    {
        $path = Storage::disk('local')->path('public\img\\' . $dir . '\\' . $title . '.png');
        return response()->file($path);
    }
}
