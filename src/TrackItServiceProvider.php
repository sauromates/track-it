<?php

declare(strict_types=1);

namespace Sauromates\TrackIt;

use Illuminate\Contracts\Foundation\Application;
use Spatie\LaravelPackageTools\Exceptions\InvalidPackage;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class TrackItServiceProvider extends PackageServiceProvider
{
    /**
     * @throws InvalidPackage
     */
    public function register(): void
    {
        parent::register();

        $this->app->singleton(
            abstract: TrackIt::class,
            concrete: fn (Application $app) => new TrackIt($app),
        );
    }

    /**
     * @link https://github.com/spatie/laravel-package-tools
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('track-it')
            ->hasConfigFile()
            ->publishesServiceProvider('TrackItServiceProvider')
            ->hasMigrations('create_issues_table', 'create_trackers_table')
            ->runsMigrations();
    }
}
