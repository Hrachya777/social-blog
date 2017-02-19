@extends('app-user')
@section('user-content')
    <div class="content">

        @if(count($news) == 0 && count($interests) == 0 && count($sports) == 0)
            "{{$search}}"  по этому запросу ничего не найдено
        @else
            @if(count($news) != 0)
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
            @endif
            @if(count($interests) != 0)
                <div class="services_place clear">
                    @foreach($interests as $interest)
                        <div class="services_blocks">
                            <a href="{{action('UsersController@getInteresCategory',$interest->id)}}">
                                <div class="ser_bg_abs"></div>
                                @if($interest->image)
                                    <img src="/page_uploade/interes/{{$interest->image}}" class="service_image" />
                                @else
                                    <img class="service_image" src="/images/noImg.jpg" alt="">
                                @endif
                                <div class="service_abs">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <span class="ser_abs_text">{{$interest->title}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            @endif
            @if(count($sports) != 0)
                <div class="services_place clear">
                    @foreach($sports as $sport)
                        <div class="services_blocks">
                            <a href="{{action('UsersController@getSportCategory',$sport->id)}}">
                                <div class="ser_bg_abs"></div>
                                @if($sport->image)
                                    <img src="/page_uploade/sport/{{$sport->image}}" class="service_image" />
                                @else
                                    <img class="service_image" src="/images/noImg.jpg" alt="">
                                @endif
                                <div class="service_abs">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <span class="ser_abs_text">{{$sport->title}}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            @endif
        @endif


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