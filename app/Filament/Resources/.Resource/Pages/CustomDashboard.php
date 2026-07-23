<?php

namespace App\Filament\Resources\.Resource\Pages;

use App\Filament\Resources\.Resource;
use Filament\Resources\Pages\Page;

class CustomDashboard extends Page
{
    protected static string $resource = .Resource::class;

    protected static string $view = 'filament.resources..-resource.pages.custom-dashboard';
}
