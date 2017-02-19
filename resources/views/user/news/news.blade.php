@extends('app-user')
@section('user-content')
    <div class="content">
        <div class="services_title">
            Our services
        </div>

        <div class="services_place clear">
            @foreach($news as $new)
                <div class="services_blocks">
                    <a href="{{action('UsersController@getNewsCategory',$new->id)}}">
                        <div class="ser_bg_abs"></div>
                        @if($new->image)
                            <img src="/page_uploade/news/{{$new->image}}" class="service_image" />
                        @else
                            <img class="service_image" src="/images/noImg.jpg" alt="">
                        @endif
                        <div class="service_abs">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <span class="ser_abs_text">{{$new->title}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="content_right_place">
        <div class="posts_place">
            @foreach($rand_news as $rand_new)
                <div class="posts">
                    <a href="{{action('UsersController@getNewsCategory',$rand_new->id)}}">
                        <div class="posts_image_place">
                            @if($rand_new->image)
                                <img src="/page_uploade/news/{{$rand_new->image}}" class="posts_image" />

                            @endif
                        </div>
                        <p class="posts_title">
                            {{$rand_new->title}}
                        </p>
                        <p class="posts_text">
                            {{substr($rand_new->description, 0,80)}} ...
                        </p>
                    </a>
                </div>
            @endforeach
         </div>
            <div class="advertising_place">
                advertising_place advertising_place advertising_place advertising_place advertising_place
            </div>
        </div>
        <div class="more_place">
            {{ $news->links() }}        
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