<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Repository
{
    /**
     * @var Model|string
     */
    private $model;

    /**
     * @var string|array
     */
    public $with;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->model = $this->model();
    }

    /**
     * @return Model
     */
    private function model(): string
    {
        $thisClassName = Arr::last(explode('\\', get_class($this)));
        $modelClassName = str_replace('Repository', '', $thisClassName);

        return '\\App\\Models\\' . $modelClassName;
    }

    /**
     * @param array|string $with
     * @return $this
     */
    public function with($with)
    {
        $this->with = $with;

        return $this;
    }

    /**
     * @return Builder
     */
    protected function newQuery()
    {
        $query = $this->model::query();

        if ($this->with) {
            $query->with($this->with);
        }

        return $query;
    }

    /**
     * @param array $data
     * @return Builder|Model
     */
    public function create(array $data)
    {
        return $this->newQuery()->create($data);
    }

    /**
     * @param string $orderBy
     * @param string $orderDir
     * @return Collection
     */
    public function all(string $orderBy = 'created_at', string $orderDir = 'asc'): Collection
    {
        return $this->newQuery()
            ->orderBy($orderBy, $orderDir)
            ->get();
    }
}
