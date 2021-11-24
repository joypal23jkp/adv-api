<?php

namespace App\Repositories;

use App\Models\Event;
use App\Repositories\Contracts\EventRepository as RepositoryInterface;
use WhoJonson\LaravelOrganizer\Repositories\Repository;

class EventRepository extends Repository implements RepositoryInterface {

    public function __construct(Event $model)
    {
        parent::__construct($model);
    }
}
