<?php

namespace Sauromates\TrackIt;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sauromates\TrackIt\Commands\TrackItCommand;

class TrackItServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('track-it')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_track-it_table')
            ->hasCommand(TrackItCommand::class);
    }
}
