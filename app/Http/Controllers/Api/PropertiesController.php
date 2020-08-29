<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Properties\IndexRequest;
use App\Http\Resources\PropertyResource;
use App\Models\Property;
use App\Repositories\PropertyRepository;

class PropertiesController extends Controller
{
    /**
     * @param IndexRequest $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(IndexRequest $request)
    {
        $properties = (new PropertyRepository)
            ->with('contract')
            ->all($request->get('order_by', 'created_at'));

        return PropertyResource::collection($properties);
    }

    /**
     * @param Property $property
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return response([], 200);
    }
}
