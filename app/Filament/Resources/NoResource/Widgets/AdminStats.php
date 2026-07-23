<?php

namespace App\Filament\Resources\NoResource\Widgets;

use App\Models\Document;
use App\Models\Category;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Documents', Document::count())
                ->description('All uploaded documents')
                ->color('primary'),

            Stat::make('Categories', Category::count())
                ->description('Total categories')
                ->color('success'),

            Stat::make('Users', User::count())
                ->description('Registered users')
                ->color('warning'),
        ];
    }
}