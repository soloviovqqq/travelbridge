<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return View
     */
    public function agents(): View
    {
        return view('agents');
    }

    /**
     * @return View
     */
    public function tours(): View
    {
        $hotTours = Tour::query()->where('hot', 1)->visible()->limit(2)->get();
        $tours = Tour::query()->visible()->paginate();
        return view('tours', [
            'hotTours' => $hotTours,
            'tours' => $tours,
        ]);
    }
}
