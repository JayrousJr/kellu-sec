<?php

namespace App\Filament\Resources\FormTwoResource\Pages;

use App\Filament\Resources\FormTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormTwos extends ListRecords
{
    protected static string $resource = FormTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
