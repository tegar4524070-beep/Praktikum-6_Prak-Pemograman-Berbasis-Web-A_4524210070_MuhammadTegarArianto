<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\ChartWidget;

class BookStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Books Available vs Borrowed';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total Books',
                    'data' => [
                        Book::where('status', 'available')->count(),
                        Book::where('status', 'borrowed')->count(),
                    ],
                    'backgroundColor' => [
                        '#22c55e',
                        '#f59e0b',
                    ],
                ],
            ],
            'labels' => [
                'Available',
                'Borrowed',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
