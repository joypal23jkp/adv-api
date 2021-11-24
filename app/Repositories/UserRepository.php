<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepository as RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use WhoJonson\LaravelOrganizer\Repositories\Repository;

class UserRepository extends Repository implements RepositoryInterface {

    public function __construct(?Model $model)
    {
        parent::__construct($model);
    }
}
