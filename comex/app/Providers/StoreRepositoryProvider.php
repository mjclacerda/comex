<?php

namespace App\Providers;

use App\Repositories\EloquentStoreRepository;
use App\Repositories\StoreRepository;
use Illuminate\Support\ServiceProvider;

class StoreRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
StoreRepository::class => EloquentStoreRepository::class
    ];
}
