<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        include 'jdf.php';
        Carbon::setLocale('fa_IR');

        Carbon::macro('jdate', function ($format, $tr_num = 'fa') {
            return jdate($format, self::this()->timestamp, '', '', $tr_num);
        });

        Carbon::macro('jmktime', function ($year, $month, $day, $hour = 0, $minute = 0, $second = 0) {
            $timestamp = jmktime($hour, $minute, $second, $month, $day, $year);
            return self::createFromTimestamp($timestamp);
        });

        Paginator::defaultView('vendor.pagination.bootstrap-5');

        Paginator::defaultSimpleView('vendor.pagination.bootstrap-5');
    }
}
