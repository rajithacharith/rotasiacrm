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
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Matrix;

class ClubRegistrationScreen extends Screen
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
        return 'Club Regisration';
    }
	
	/**
	 * The description is displayed on the user's screen under the heading
	 */
	public function description(): ?string
	{
		return 'Club Website Registration';
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
            ExampleElements::class,
            Layout::rows([
				Matrix::make('users')
					->title('Users list')
					->columns(['first name', 'last name', 'mobile', 'email', 'address', 'passport', 'adhare number', 'other personal details'])
					->fields([
						'first name' => Input::make('first name')
							->type('text')
							->required()
							->placeholder('First Name')
							->popover('Enter First Name')
							->vertical(),
						'last name' => Input::make('last name')
							->type('text')
							->required()
							->placeholder('Last Name')
							->popover('Last Name')
							->vertical(),
						'mobile' => Input::make('mobile')
							->type('text')
							->required()
							->placeholder('Mobile')
							->vertical(),
						'email' => Input::make('email')
							->type('text')
							->required()
							->placeholder('Email')
							->vertical(),
						'address' => Input::make('address')
							->type('text')
							->required()
							->placeholder('Address')
							->vertical(),
						'passport' => Input::make('passport')
							->type('text')
							->required()
							->placeholder('Passport')
							->vertical(),
						'adhare number' => Input::make('adhare number')
							->type('text')
							->required()
							->placeholder('Adhare Number')
							->vertical(),
						'other personal details' => Input::make('other personal details')
							->type('text')
							->required()
							->placeholder('Other Personal Details')
					]),
					
			
				]), //->title('Textual HTML5 Inputs'),
		];
    }
}
