<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contracts\StoreRequest;
use App\Models\Contract;
use App\Repositories\ContractRepository;
use App\Repositories\PropertyRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ContractsController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('contracts.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $properties = (new PropertyRepository)->getAvailable();
        $contractorTypes = Contract::CONTRACTOR_TYPES;

        return view('contracts.form', compact('properties', 'contractorTypes'));
    }

    /**
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        (new ContractRepository)
            ->create($request->validated());

        return redirect()->route('web.contracts.index');
    }
}
