<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Books',
                Book::count()
            ),

            Stat::make(
                'Total Authors',
                Author::count()
            ),

            Stat::make(
                'Books Available',
                Book::where('status', 'available')->count()
            ),

            Stat::make(
                'Books Borrowed',
                Book::where('status', 'borrowed')->count()
            ),
        ];
    }
}