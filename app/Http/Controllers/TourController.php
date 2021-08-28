<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Contracts\View\View;

/**
 * Class TourController
 * @package App\Http\Controllers
 */
class TourController extends Controller
{
    /**
     * @param Tour $tour
     * @return View
     */
    public function index(Tour $tour): View
    {
        return view('tour', [
            '$tour' => $tour,
        ]);
    }
}
