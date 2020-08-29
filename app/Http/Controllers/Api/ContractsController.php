<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContractResource;
use App\Models\Contract;
use App\Repositories\ContractRepository;

class ContractsController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $contracts = (new ContractRepository)
            ->with('property')
            ->all('created_at');

        return ContractResource::collection($contracts);
    }

    /**
     * @param Contract $contract
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();

        return response([], 200);
    }
}
