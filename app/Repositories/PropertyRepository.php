<?php

namespace App\Repositories;

class PropertyRepository extends Repository
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAvailable()
    {
        return $this->newQuery()
            ->whereDoesntHave('contract')
            ->orderBy('street')
            ->get();
    }
}
