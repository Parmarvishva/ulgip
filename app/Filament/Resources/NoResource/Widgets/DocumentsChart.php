<?php

namespace App\Filament\Resources\NoResource\Widgets;

use App\Models\Document;
use Filament\Widgets\ChartWidget;

class DocumentsChart extends ChartWidget
{
    protected static ?string $heading = '📊 Monthly Document Analytics';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Uploaded Documents',
                    'data' => [
                        Document::whereMonth('created_at',1)->count(),
                        Document::whereMonth('created_at',2)->count(),
                        Document::whereMonth('created_at',3)->count(),
                        Document::whereMonth('created_at',4)->count(),
                        Document::whereMonth('created_at',5)->count(),
                        Document::whereMonth('created_at',6)->count(),
                        Document::whereMonth('created_at',7)->count(),
                        Document::whereMonth('created_at',8)->count(),
                        Document::whereMonth('created_at',9)->count(),
                        Document::whereMonth('created_at',10)->count(),
                        Document::whereMonth('created_at',11)->count(),
                        Document::whereMonth('created_at',12)->count(),
                    ],

                    'borderColor' => '#2563EB',
                    'backgroundColor' => 'rgba(37,99,235,.15)',
                    'fill' => true,
                    'tension' => .45,
                    'pointRadius' => 5,
                    'pointHoverRadius' => 7,
                ],
            ],

            'labels' => [
                'Jan','Feb','Mar','Apr','May','Jun',
                'Jul','Aug','Sep','Oct','Nov','Dec',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}