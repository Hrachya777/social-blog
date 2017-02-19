@extends('app-user')
@section('user-content')

    {!! HTML::style( asset('assets/user/css/jquery.mCustomScrollbar.css')) !!}
    {!! HTML::style( asset('assets/user/css/lightgallery.css')) !!}
    {!! HTML::style( asset('assets/user/css/star-rating.css')) !!}


    <div class="content">
        <div class="services_place clear">
            <h1 class="news_title_place">
                {{$news->title}}
            </h1>
            <p class="news_date_place">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span>{{date('d.m.Y', strtotime($news->created_at))}}</span>
                <div class="container">
                <form>
                    {{--{{dd($rating)}}--}}
                    @if(Auth::User() && Auth::User()->role == 'user')
                        @if(!isset($rating_status))
                            <input type="hidden" class="rate_hidden" data-pageid="2" data-categoryid="{{$id}}" content="{{ csrf_token() }}">
                            @if(isset($rating))
                                <input  type="text" class="rating rating-loading new_rating" value="{{$rating}}" data-size="xl" title="">
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
            @if($news->image)
            <div class="news_image_place">
                <img src="/page_uploade/news/{{$news->image}}" class="news_image">
            </div>
            @endif
            <p class="news_desc_place">
              <span>{{$news->description}}</span>
            </p>
                <input content="{{ csrf_token() }}" class="params_comment" type="hidden" data-category="{{$id}}" data-page="2" data-user={{Auth::id()}}>
                <textarea class="comment_area" placeholder="Коментария"></textarea>
                <input type="submit" value="коментировать" class="comment_btn" />
            @foreach($comments as $comment)
                <div class="comment_place">
                    <div class="user_comment_place">
                        <span class="user_name_comment">
                            {{$comment['usercomment']['firstname']}}
                        </span>
                        <a href="#">
                            @if($comment['usercomment']['profile_picture'] && !$comment['usercomment']['google_id'] && !$comment['usercomment']['facebook_id'] && !$comment['usercomment']['twitter_id'])
                                <img src="/assets/user/user_profile_avatar/{{$comment['usercomment']['profile_picture']}}" class="us_com_img" />
                            @elseif($comment['usercomment']['google_id'])
                                <img src="https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=50" alt="" class="us_com_img" >
                            @elseif($comment['usercomment']['facebook_id'])
                                <img src="https://graph.facebook.com/v2.8/1306947926030658/picture?type=normal" alt="" class="us_com_img">
                            @elseif($comment['usercomment']['twitter_id'])
                                <img src="http://pbs.twimg.com/profile_images/499629401718288386/zqkbbJEi_normal.jpeg" alt="" class="us_com_img">
                            @else
                                <img class="us_com_img" src="/assets/user/images/user.jpg" alt="">
                            @endif
                        </a>
                        <p class="user_comment_text">
                            {{$comment->comment}}
                        </p>
                    </div>
                </div>
            @endforeach


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
                @foreach($$videos as $gallery)
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
