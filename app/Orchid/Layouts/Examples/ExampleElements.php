<?php

namespace App\Orchid\Layouts\Examples;

use Orchid\Screen\Actions\Menu;
use Orchid\Screen\Layouts\TabMenu;

class ExampleElements extends TabMenu
{
    /**
     * Get the menu elements to be displayed.
     *
     * @return Menu[]
     */
    protected function navigations(): iterable
    {
        return [
            Menu::make('Basic Details')
                ->route('platform.club-registration'),
        ];
    }
}
