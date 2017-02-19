<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Application;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Closure;
use App\Contracts\LanguageInterface;


class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Application $app, Redirector $redirector, Request $request,LanguageInterface $langRepo) {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
        $this->lang = $langRepo;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
    */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        $langs = $this->lang->getAll();
        $lang = [
           'value' => [],
           'key' => [],
        ];
        foreach ($langs as $key => $language) {
           array_push($lang['value'],$language->lang_name);
           array_push($lang['key'],$language->lang_name);
        }
        $allLang = array_combine($lang['value'],$lang['key']);
        if ( ! array_key_exists($locale, $allLang)) {
            $segments = $request->segments();
            $segments[0] = $this->app->config->get('app.fallback_locale');
            return $this->redirector->to(implode('/', $segments));
        }
        $this->app->setLocale($locale);
        return $next($request);
    }

}