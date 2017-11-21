<?php
    /**
     * Created by PhpStorm.
     * User: GAlima
     * Date: 21/11/2017
     * Time: 08:22
     */

    namespace Modules\Pages\Providers;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\Route;
    class PageServiceProvider  extends ServiceProvider
    {
        public function boot (  )
        {
            Route::namespace ('Modules\Pages\Http\Controllers')
                ->group(__DIR__ . '/../Routes/web.php');

            $this->loadViewsFrom (__DIR__ . '/../Views', 'Page');
        }

        public function register (  )
        {
            
        }
    }