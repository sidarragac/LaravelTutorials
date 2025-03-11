<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NinjaController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Ninjas - 1st Exam';
        $viewData['subtitle'] = 'List of ninjas';
        $viewData['ninjas'] = Ninja::orderBy('chakra', 'desc')->get();

        return view('ninja.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create Ninja';

        return view('ninja.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Ninja::validate($request);
        Ninja::create($request->only(['name', 'village', 'chakra']));

        return back();
    }

    public function stats(): View
    {
        $hojaVillageCount = Ninja::where('village', 'Hoja')->count();
        $nieblaVillageCount = Ninja::where('village', 'Niebla')->count();
        $ninjasChakraSumatory = Ninja::sum('chakra');

        $viewData = [];
        $viewData['title'] = 'Statistics - 1st Exam';
        $viewData['subtitle'] = 'Ninjas Statistics';
        $viewData['hojaVillageCount'] = $hojaVillageCount;
        $viewData['nieblaVillageCount'] = $nieblaVillageCount;
        $viewData['ninjasChakraSumatory'] = $ninjasChakraSumatory;

        return view('ninja.stats')->with('viewData', $viewData);
    }
}
