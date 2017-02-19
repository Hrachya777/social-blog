<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\LanguageInterface;
use App\Contracts\SubscripeInterface;

use App\Http\Requests;

class BaseController extends Controller
{
    public $language;

    public $currentPathWithoutLocale;


    public function __construct($langRepo, $subscripeRepo)
    {
        //$this->language = config('app.locale');
        $lang = $langRepo->getAll();
        $subscripe = $subscripeRepo->getAllActiveStatus();
        $count_subscripe = count($subscripe);

        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $this->currentPathWithoutLocale = substr( implode(\Request::segments(), '/'), 3);

        $data = [
            'subscripe' => $subscripe,
            'count_subscripe' => $count_subscripe,
            'languages' => $lang,
            'currentPathWithoutLocale' => $this->currentPathWithoutLocale,
            'url' => $url
        ];

        view()->share($data);
    }

}
