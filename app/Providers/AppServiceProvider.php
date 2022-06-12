<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Eliminamos el wraper data 
     *
     * @return void
     */
    public function boot()
    {
       JsonResource::withoutWrapping();
    }
}
