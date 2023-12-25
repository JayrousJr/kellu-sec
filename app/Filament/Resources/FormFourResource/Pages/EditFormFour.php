<?php

namespace App\Filament\Resources\FormFourResource\Pages;

use App\Filament\Resources\FormFourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormFour extends EditRecord
{
    protected static string $resource = FormFourResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
