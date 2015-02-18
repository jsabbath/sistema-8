<?php namespace App\Http\Controllers;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        if (\Request::segment(1) != 'install')
            $this->middleware('netforce.install');
	}

	/**
	 * Visao home
	 *
	 * @return \Response
	 */
	public function index()
	{
		return \View::make('home');
	}

    /**
     * Visao home da instalacao
     *
     * @return \Response
     */
    public function install()
    {
        return \View::make('install.home');
    }

    /**
     * Visao banco da instalacao
     *
     * @return \Response
     */
    public function installBanco()
    {
        return \View::make('install.banco');
    }
}
