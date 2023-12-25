<?php

namespace App\Filament\Resources\FormTwoResource\Pages;

use App\Filament\Resources\FormTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFormTwo extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = FormTwoResource::class;
}
