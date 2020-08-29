<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Properties\IndexRequest;
use App\Http\Resources\PropertyResource;
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
            ->all($request->get('order_by', 'created_at'));

        return PropertyResource::collection($properties);
    }
}
