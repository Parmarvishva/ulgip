<?php

namespace App\Filament\Pages;

use App\Models\Category;
use App\Models\CyberAlert;
use App\Models\Document;
use App\Models\User;
use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $title = '';

    protected static ?string $slug = 'custom-dashboard';

    protected static string $view = 'filament.pages.custom-dashboard';

    public int $documents;
    public int $categories;
    public int $users;
    public int $alerts;

    public function mount(): void
    {
        $this->documents = Document::count();
        $this->categories = Category::count();
        $this->users = User::count();
        $this->alerts = CyberAlert::count();
    }

    public function getHeading(): string
    {
        return '';
    }

    public function getSubheading(): ?string
    {
        return null;
    }

    public function getMaxContentWidth(): string
    {
        return 'full';
    }
}