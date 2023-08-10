<?php

namespace WJGilmore\LaravelEmailreputationapi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use WJGilmore\LaravelEmailreputationapi\Commands\LaravelEmailreputationapiCommand;

class LaravelEmailreputationapiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('laravel-emailreputationapi')
            ->hasConfigFile()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile();
            });

    }
}
