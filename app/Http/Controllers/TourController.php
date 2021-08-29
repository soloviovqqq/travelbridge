<?php

namespace App\Http\Controllers;

use App\Models\GroupTour;
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
        $tours = Tour::query()
            ->where('tour_type_id', $tour->tour_type_id)
            ->whereKeyNot($tour->getKey())
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('tour', [
            'tour' => $tour,
            'tours' => $tours,
        ]);
    }

    public function groupTours()
    {
        dd(123);
    }

    /**
     * @param GroupTour $groupTour
     * @return View
     */
    public function groupTour(GroupTour $groupTour): View
    {
        return view('group-tour', [
            'groupTour' => $groupTour,
            'tours' => $groupTour->tours()->visible()->paginate(),
        ]);
    }
}
