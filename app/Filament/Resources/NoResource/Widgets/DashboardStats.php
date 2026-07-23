<?php

namespace App\Filament\Resources\NoResource\Widgets;

use App\Models\Category;
use App\Models\CyberAlert;
use App\Models\Document;
use App\Models\Setting;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Documents', Document::count())
                ->description('Total Documents')
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description('Total Categories')
                ->color('success'),

            Stat::make('Users', User::count())
                ->description('Registered Users')
                ->color('warning'),

            Stat::make('Cyber Alerts', CyberAlert::count())
                ->description('Active Alerts')
                ->color('danger'),

            Stat::make('Settings', Setting::count())
                ->description('System Settings')
                ->color('info'),

        ];
    }
}