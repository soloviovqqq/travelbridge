<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Country;

/**
 * Class CountryController
 * @package App\Http\Controllers
 */
class CountryController extends Controller
{
    /**
     * @param Country $country
     * @return View
     */
    public function index(Country $country): View
    {
        return view('country', [
            'country' => $country,
            'hotels' => $country->hotels()->paginate(),
            'countries' => Country::query()->whereKeyNot($country->getKey())->inRandomOrder()->limit(4)->get(),
        ]);
    }
}
