@foreach($interests as $interest)
    <div data-id="{{$interest->id}}" class="services_blocks interest_show_block">
        <a href="{{action('UsersController@getInteresCategory',$interest->id)}}">
            <div class="ser_bg_abs"></div>
            <img src="/page_uploade/interes/{{$interest->image}}" class="service_image" />
            <div class="service_abs">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                <span class="ser_abs_text">{{$interest->title}}</span>
            </div>
        </a>
    </div>
@endforeach