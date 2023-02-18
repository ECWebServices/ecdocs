<?php

namespace ECDoc\Ecdocs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoute('web')
            ->hasViews('ecdocs');
    }
}
