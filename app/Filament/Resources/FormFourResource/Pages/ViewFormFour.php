<?php

namespace App\Filament\Resources\FormFourResource\Pages;

use App\Filament\Resources\FormFourResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormFour extends ViewRecord
{
    protected static string $resource = FormFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
