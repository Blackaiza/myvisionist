<?php

namespace App\Filament\Admin\Resources\WorkshopResource\Pages;

use App\Filament\Admin\Resources\WorkshopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkshop extends EditRecord
{
    protected static string $resource = WorkshopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
}
