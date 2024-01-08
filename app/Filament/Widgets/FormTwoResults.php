<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class FormTwoResults extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $visitors = FormTwoResults::select('created_at', 'id')->get()->groupBy(function ($Visitor) {
            return FormTwoResults::parse($Visitor->created_at)->format('M');
        });
        $VisitorCount = [];
        foreach ($visitors as $oneVisitor => $VisitorGroup) {
            $VisitorCount[$oneVisitor] = $VisitorGroup->count();
        }
        $labels = array_keys($VisitorCount);
        $data = array_values($VisitorCount);
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Visitors',
                    'data' => $data,
                    'fill' => [
                        'target' => 'origin',
                        'below' => 'rgba(54, 162, 235, 0.2)',
                        'above' => 'rgba(54, 162, 235, 0.2)',
                    ],
                    'borderColor' => 'rgba(54, 162, 235, 0.7)',
                    'tension' => 0.5,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
