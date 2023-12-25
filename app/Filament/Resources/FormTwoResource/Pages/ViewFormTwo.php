<?php

namespace App\Filament\Resources\FormTwoResource\Pages;

use App\Filament\Resources\FormTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormTwo extends ViewRecord
{
    protected static string $resource = FormTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
