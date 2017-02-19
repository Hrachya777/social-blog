@extends('app-user')
@section('user-content')

	<div class="content">
		<div class="services_title">
			Интересно
		</div>
		<div class="services_place clear interst_block_show">
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

		</div>
		<div class="content_right_place">
		<div class="posts_place">
				@foreach($news_rands as $news_rand)
					<div class="posts">
						<a href="{{action('UsersController@getNewsCategory',$news_rand->id)}}">
							<div class="posts_image_place">
								<img src="/page_uploade/news/{{$news_rand->image}}" class="posts_image" />
							</div>
							<p class="posts_title">
								{{$news_rand->title}}
							</p>
							<p class="posts_text">
								{{substr($news_rand->description, 0,80)}} ...

							</p>
						</a>
					</div>
				@endforeach
		</div>
		<div class="advertising_place">

		</div>
		</div>
		<div class="more_place show_more_interest">

			<div class="all_services">
				<span class="all_ser_text">Еще</span>
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
	<div class="content">
		<div class="services_title">
			Новости
		</div>
		<div class="services_place clear">
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
				<div class="loader"></div>

				<div class="append_news_block"></div>
		</div>
		<div class="content_right_place">
		<div class="posts_place">
			@foreach($interest_rands as $interest_rand)
				<div class="posts">
					<a href="{{action('UsersController@getInteresCategory',$interest_rand->id)}}">
						<div class="posts_image_place">
							<img src="/page_uploade/interes/{{$interest_rand->image}}" class="posts_image" />
						</div>
						<p class="posts_title">
							{{$interest_rand->title}}
						</p>
						<p class="posts_text">
							{{substr($interest_rand->description, 0,80)}} ...
						</p>
					</a>
				</div>
			@endforeach
		</div>
		<div class="advertising_place">

		</div>
		</div>
		<div class="more_place show_more_news">
			<div class="all_services">
				<span class="all_ser_text">Еще</span>
			</div>
		</div>
	</div>

@endsection

