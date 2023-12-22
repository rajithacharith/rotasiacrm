<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\Examples\ExampleElements;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class IndividualRegistrationScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Individual Regisration';
    }
	
	/**
	 * The description is displayed on the user's screen under the heading
	 */
	public function description(): ?string
	{
		return 'Individual Registration';
	}

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
			/*
                Input::make('test')
                    ->title('Text')
                    ->value('Artisanal kale')
                    ->help('Basic single-line text fields.')
                    ->horizontal(),

                Input::make('search')
                    ->type('search')
                    ->title('Search')
                    ->value('How do I shoot web')
                    ->help('Text fields designed for the user to enter search queries into.')
                    ->horizontal(),
			*/
			//based on the above example, add the following fields first name, last name, mobile, email, address, passport, adhare number and other personal details
			
            ExampleElements::class,
            Layout::rows([
				Input::make('first_name')
					->title('First Name')
					->value('')
					->help('First Name')
					->horizontal(),
				Input::make('last_name')
					->title('Last Name')
					->value('')
					->help('Last Name')
					->horizontal(),
				Input::make('mobile')
					->title('Mobile')
					->value('')
					->help('Mobile')
					->horizontal(),
				Input::make('email')
					->title('Email')
					->value('')
					->help('Email')
					->horizontal(),
				Input::make('address')
					->title('Address')
					->value('')
					->help('Address')
					->horizontal(),
				Input::make('passport')
					->title('Passport')
					->value('')
					->help('Passport')
					->horizontal(),
				Input::make('adhare')
					->title('Adhare')
					->value('')
					->help('Adhare')
					->horizontal(),
				
				]), //->title('Textual HTML5 Inputs'),
		];
    }
}
