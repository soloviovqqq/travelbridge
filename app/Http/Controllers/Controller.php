<?php

namespace App\Http\Controllers;

use App\Models\GroupTour;
use App\Models\MainInfo;
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
        return view('agents', [
            'agency_text' => MainInfo::query()->first()->agency_text,
        ]);
    }

    /**
     * @return View
     */
    public function tours(): View
    {
        $hotTours = Tour::query()
            ->where('type', Tour::PUBLIC_TYPE)
            ->where('hot', 1)
            ->visible()
            ->limit(2)
            ->get();

        $tours = Tour::query()
            ->where('type', Tour::PUBLIC_TYPE)
            ->visible()
            ->paginate();

        return view('tours', [
            'hotTours' => $hotTours,
            'tours' => $tours,
        ]);
    }

    /**
     * @return View
     */
    public function groupTours(): View
    {
        $hotTours = Tour::query()
            ->where('type', Tour::GROUP_TYPE)
            ->where('hot', 1)
            ->visible()
            ->limit(2)
            ->get();

        $groupTours = GroupTour::query()
            ->visible()
            ->paginate();

        return view('group-tours', [
            'groupTours' => $groupTours,
            'hotTours' => $hotTours,
        ]);
    }
}
