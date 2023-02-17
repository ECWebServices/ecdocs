<?php

namespace ECDoc\Ecdocs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ECDoc\Ecdocs\Commands\EcdocsCommand;

class EcdocsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ecdocs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ecdocs_table')
            ->hasCommand(EcdocsCommand::class);
    }
}
