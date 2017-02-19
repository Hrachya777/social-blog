@extends('app-user')
@section('user-content')

    <div class="games_content">
        <ul class="games_left_menu">
            @include('user.game.game-menu')
        </ul>
        <div class="game_right_menu">
            <h1 class="game_big_name">{{$one_game_page->name}}</h1>
            @foreach($game_categorys as $game_category)
                <div class="game_place_1">
                    <a href="{{action('UsersController@gameCategoryInnerPage',$game_category->id)}}" class="big_link">
                        <img src="/page_uploade/game/category_images/{{$game_category->image}}" class="game_img_big" />
                        <p class="game_name">{{$game_category->title}}</p>
                        <div class="big_link_abs">
                            <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="pageination">
                {{ $game_categorys->links() }}
            </div>
        </div>
    </div>





    <div class="us_place">
        <div class="us_abs">
            <div class="us_rel">
                <div class="us_abs_1"></div>
            </div>
        </div>
        <div class="us_place_center">

            <div class="us_title_place">
                <span class="us_title">Контакт с нами</span>
            </div>

            @include('message')

            {!! Form::open(['action' => ['UsersController@postSubscripe'], ]) !!}

                {!! Form::text('email',null, ['placeholder' => 'Эл.адрес', 'class' => 'e-mail form-control','id' => 'question_email']) !!}
                <br>
                {!! Form::textarea('question',null, ['placeholder' => 'пишите свой вопрос', 'class' => 'e-mail']) !!}
                <br>
                <input type="submit" value="Отправить" class="question_send" />
                {!! Form::close() !!}
        </div>
        <div class="us_abs">
            <div class="us_rel">
                <div class="us_abs_2"></div>
            </div>
        </div>
    </div>

@endsection