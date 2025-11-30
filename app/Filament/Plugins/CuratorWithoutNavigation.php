<?php

namespace App\Filament\Plugins;

use App\Filament\Resources\MediaResource;
use Awcodes\Curator\CuratorPlugin;

class CuratorWithoutNavigation extends CuratorPlugin
{
    public function getResources(): array
    {
        return [
            MediaResource::class,
        ];
    }

    public function getNavigationItems(): array
    {
        return [];
    }
}
