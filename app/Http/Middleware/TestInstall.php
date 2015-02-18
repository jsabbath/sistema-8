<?php namespace App\Http\Middleware;

use Closure;

class TestInstall
{
	/**
	 * Testar request
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        // Verificar se .env foi criado
        $file_env = base_path('.env');
        if (\File::exists($file_env))
            return $next($request);

        return \Redirect::to('/install');
	}

}
