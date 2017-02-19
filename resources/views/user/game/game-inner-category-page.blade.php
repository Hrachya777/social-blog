@extends('app-user')
@section('user-content')

	<div class="games_content">
		<div class="google_place_small">
			GOOGLE PLACE
		</div>
		<div class="game_big_place">
			<h1 class="game_big_name">{{$game->title}}</h1>
			<object width="770" height="500" data="/page_uploade/game/category_game/{{$game->game}}"></object>
		</div>
		<div class="google_place_small">
			GOOGLE PLACE
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