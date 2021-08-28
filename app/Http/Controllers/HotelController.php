<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Contracts\View\View;

/**
 * Class HotelController
 * @package App\Http\Controllers
 */
class HotelController extends Controller
{
    /**
     * @param Hotel $hotel
     * @return View
     */
    public function index(Hotel $hotel): View
    {
        $hotels = Hotel::query()
            ->where('country_id', $hotel->country_id)
            ->whereKeyNot($hotel->getKey())
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('hotel', [
            'hotel' => $hotel,
            'hotels' => $hotels,
        ]);
    }
}
