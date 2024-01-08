<?php

namespace App\Filament\Widgets;

use App\Models\FormFour;
use Carbon\Carbon;
use App\Models\FormTwo;
use Filament\Widgets\ChartWidget;

class FormTwoResults extends ChartWidget
{
    protected static ?string $heading = 'Fotm Two Results';
    protected int | string | array $columnSpan = 'full';
    protected static bool $isLazy = false;
    protected static ?string $maxHeight = '250px';
    protected function getData(): array
    {
        // Fetch results from the Result model
        $results = FormTwo::select('year', 'div_one', 'div_two', 'div_three', 'div_four', 'div_zero')->get();

        $labels = $results->pluck('year')->unique()->map(function ($year) {
            return date('Y', strtotime($year));
        })->toArray(); // Unique years formatted as 'Y'

        $datasets = [];

        // Specify colors for each division
        $divisionColors = [
            'div_one' => '#FF5733',
            'div_two' => '#33FF57',
            'div_three' => '#5733FF',
            'div_four' => '#33FFFF',
            'div_zero' => '#FF33E6',
        ];

        foreach (['div_one', 'div_two', 'div_three', 'div_four', 'div_zero'] as $division) {
            $data = $results->pluck($division)->toArray();

            $datasets[] = [
                'label' => ucfirst($division),
                'data' => $data,
                'fill' => 'origin',
                'borderColor' => $divisionColors[$division],
                'tension' => 0.5,
            ];
        }

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
