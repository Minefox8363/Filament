<?php

namespace App\Filament\Plugins;

use Awcodes\Curator\CuratorPlugin;

class CuratorWithoutNavigation extends CuratorPlugin
{
    public function getNavigationItems(): array
    {
        return [];
    }
}
