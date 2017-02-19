@extends('app-user')
@section('user-content')

    {!! HTML::style( asset('assets/user/css/jquery.mCustomScrollbar.css')) !!}
    {!! HTML::style( asset('assets/user/css/lightgallery.css')) !!}
    {!! HTML::style( asset('assets/user/css/star-rating.css')) !!}


    <div class="content">
        <div class="services_place clear">
            <h1 class="news_title_place">
                {{$interests->title}}
            </h1>
            <p class="news_date_place">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span>{{date('d.m.Y', strtotime($interests->created_at))}}</span>
                <div class="container">
                <form>
                    @if(Auth::User() && Auth::User()->role == 'user')
                        @if(!isset($rating_status))
                            <input type="hidden" class="rate_hidden" data-pageid="4" data-categoryid="{{$id}}" content="{{ csrf_token() }}">
                            @if(isset($rating))
                                <input  type="text" class="rating rating-loading" value="{{$rating}}" data-size="xl" title="">
                            @else
                                <input  type="text" class="rating rating-loading" value="5" data-size="xl" title="">
                            @endif
                        @else
                            @for($i=1; $i<=round($rating); $i++)
                                <i class="glyphicon glyphicon-star" style="
                                        position: relative;
                                        top: 1px;
                                        display: inline-block;
                                        font-family: 'Glyphicons Halflings';
                                        font-style: normal;
                                        font-weight: normal;
                                        line-height: 1;
                                        -webkit-font-smoothing: antialiased;
                                        color: #fde16d;
                                        white-space: nowrap;
                                        text-shadow: 1px 1px #999;
                                        font-size: 1.89em;
                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                        box-sizing: border-box;
                                "></i>
                            @endfor
                            @for($i = 1; $i<= 5 - round($rating);$i++)
                                <i class="glyphicon glyphicon-star-empty" style="
                                        position: relative;
                                        top: 1px;
                                        display: inline-block;
                                        font-family: 'Glyphicons Halflings';
                                        font-style: normal;
                                        font-weight: normal;
                                        line-height: 1;
                                        -webkit-font-smoothing: antialiased;
                                        color: #fde16d;
                                        white-space: nowrap;
                                        text-shadow: 1px 1px #999;
                                        font-size: 1.89em;
                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                        box-sizing: border-box;
                                "></i>
                            @endfor
                        @endif
                    @else
                        <input type="hidden" class="rate_hidden">
                        @if(isset($rating))
                            <input  type="text" class="rating rating-loading" value="{{$rating}}" data-size="xl" title="">
                        @else
                            <input  type="text" class="rating rating-loading" value="5" data-size="xl" title="">
                        @endif
                    @endif
                </form>
                </div>
            </p>
            @if($interests->image)
            <div class="news_image_place">
                <img src="/page_uploade/interes/{{$interests->image}}" class="news_image">
            </div>
            @endif
            <p class="news_desc_place">
              <span>{{$interests->description}}</span>
            </p>
            @if(count($gallerys) != 0)
            <div class="cabaret_scroll_slider">
                <i class="fa fa-camera" aria-hidden="true"></i>
                <span class="gallery_news">галерея</span>
                <span class="border_bottom"></span>
                <div class="gallery_tour">
                   <div class="slide gall clear">
                       @foreach($gallerys as $gallery)
                           <a href="/page_uploade/page_gallery/{{$gallery->image}}">
                             <div class="img" style='background: url("/page_uploade/page_gallery/{{$gallery->image}}") no-repeat;background-size: cover;height:150px;width:200px'></div>
                           </a>
                       @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if(count($videos) != 0)
            <div class="video_place">
                @foreach($videos as $gallery)
                <div class="video">
                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                    <span class="video_text">видео</span>
                    <span class="border_bottom"></span>
                    <iframe style="width: 100%;height: 100%;" src="{{$gallery->video}}" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="content_right_place">
            <div class="posts_place">
                @foreach($rand_interests as $rand_interest)
                    <div class="posts">
                        <a href="{{action('UsersController@getInteresCategory',$rand_interest->id)}}">
                            <div class="posts_image_place">
                                @if($rand_interest->image)
                                <img src="/page_uploade/interes/{{$rand_interest->image}}" class="posts_image" />
                                @endif
                            </div>
                            <p class="posts_title">
                               {{$rand_interest->title}}
                            </p>
                            <p class="posts_text">
                                 {{substr($rand_interest->description, 0,80)}} ...
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="advertising_place">
                advertising_place advertising_place advertising_place advertising_place advertising_place
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

@section('script')

    {!! HTML::script(asset('assets/user/js/jquery.mCustomScrollbar.concat.min.js'))!!}
    {!! HTML::script(asset('assets/user/js/lightgallery.js'))!!}
    {!! HTML::script(asset('assets/user/js/lightgalleryCall.js'))!!}
    {!! HTML::script(asset('assets/user/js/star-rating.js'))!!}
    {!! HTML::script(asset('assets/user/js/rating.js'))!!}

@endsection
