<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\ArticleInterface',
            'App\Services\ArticleService'
        );
        $this->app->bind(
            'App\Contracts\UserInterface',
            'App\Services\UserService'
        );
        $this->app->bind(
            'App\Contracts\YoutubeInerface',
            'App\Services\YoutubeService'
        );
        $this->app->bind(
            'App\Contracts\GalleryInterface',
            'App\Services\GalleryService'
        );
        $this->app->bind(
            'App\Contracts\SubMenuInterface',
            'App\Services\SubMenuService'
        );
        $this->app->bind(
            'App\Contracts\LanguageInterface',
            'App\Services\LanguageService'
        );
        $this->app->bind(
            'App\Contracts\NewsInterface',
            'App\Services\NewsService'
        );
        $this->app->bind(
            'App\Contracts\PageGalleryServiceInterface',
            'App\Services\PageGalleryService'
        );
        $this->app->bind(
            'App\Contracts\SportInterface',
            'App\Services\SportService'
        );
        $this->app->bind(
            'App\Contracts\GamePageInterface',
            'App\Services\GamePageService'
        );
        $this->app->bind(
            'App\Contracts\GameCategoryInterface',
            'App\Services\GameCategoryService'
        );
        $this->app->bind(
            'App\Contracts\InteresInterface',
            'App\Services\InteresService'
        );
        $this->app->bind(
            'App\Contracts\SubscripeInterface',
            'App\Services\SubscripeService'
        );
        $this->app->bind(
            'App\Contracts\RatingInterface',
            'App\Services\RatingService'
        );
        $this->app->bind(
            'App\Contracts\CommentInterface',
            'App\Services\CommentService'
        );
    }
}
