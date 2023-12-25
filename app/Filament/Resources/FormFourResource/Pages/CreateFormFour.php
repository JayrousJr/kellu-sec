<?php

namespace App\Filament\Resources\FormFourResource\Pages;

use App\Filament\Resources\FormFourResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFormFour extends CreateRecord
{
    protected static string $resource = FormFourResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
