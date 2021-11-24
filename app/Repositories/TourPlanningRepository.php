<?php

namespace App\Repositories;

use App\Models\TourPlan;
use App\Repositories\Contracts\TourPlanningRepository as RepositoryInterface;
use WhoJonson\LaravelOrganizer\Repositories\Repository;

class TourPlanningRepository extends Repository implements RepositoryInterface {

    public function __construct(TourPlan $model)
    {
        parent::__construct($model);
    }
}
