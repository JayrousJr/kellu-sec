<?php

namespace App\Filament\Resources\FormTwoResource\Pages;

use App\Filament\Resources\FormTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormTwo extends EditRecord
{
    protected static string $resource = FormTwoResource::class;
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
