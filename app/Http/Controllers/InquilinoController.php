<?php namespace App\Http\Controllers;

use Illuminate\Support\Str;

class InquilinoController extends \NetForce\Framework\Controllers\ModelController
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        //..
	}

	/**
	 * Visao home
	 *
	 * @return \Response
	 */
	public function view($id)
	{
        if ($this->getAccept('image') == 'image')
            return $this->view_logo();

		return 'xxx:' . $id;
	}

    /**
     * Carregar logo do inquilino ou do tema
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function view_logo()
    {
        return \Redirect::to('/theme/img/logo.png');
    }
}
