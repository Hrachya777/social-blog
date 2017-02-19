@foreach($news as $new)
    <div data-id="{{$new->id}}" class="services_blocks news_show_block">
        <a href="{{action('UsersController@getNewsCategory',$new->id)}}">
            <div class="ser_bg_abs"></div>
            <img src="/page_uploade/news/{{$new->image}}" class="service_image" />
            <div class="service_abs">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="ser_abs_text">{{$new->title}}</span>
            </div>
        </a>
    </div>
@endforeach