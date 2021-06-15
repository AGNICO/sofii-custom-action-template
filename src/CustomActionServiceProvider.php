<?php

namespace Agnico\SofiiCustomActionTemplate;

use App\Facades\Sofii;
use Illuminate\Support\ServiceProvider;
use Agnico\SofiiCustomActionTemplate\Http\Middleware\Authorize;

class CustomActionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Sofii::customActions($this->customActions());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the custom actions.
     *
     * @return array
     */
    public function customActions()
    {
        return [
            new SofiiCustomActionTemplate,
        ];
    }
}
