<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\TourType;

/**
 * Class TourTypeController
 * @package App\Http\Controllers
 */
class TourTypeController extends Controller
{
    /**
     * @param TourType $tourType
     * @return View
     */
    public function index(TourType $tourType): View
    {
        return view('tour-type', [
            'tourType' => $tourType,
        ]);
    }
}
