<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessageRequest;
use App\Models\ContactMessage;
use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

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
            'countries' => Country::query()->whereKeyNot($country->getKey())->inRandomOrder()->limit(4)->get(),
        ]);
    }
}
