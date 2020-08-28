<?php

namespace App\Http\Controllers;

use App\Http\Requests\Properties\StoreRequest;
use App\Repositories\PropertyRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PropertiesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('properties.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $states = config('states');

        return view('properties.form', compact('states'));
    }

    /**
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        (new PropertyRepository)
            ->create($request->validated());

        return redirect()->route('web.properties.index');
    }
}
