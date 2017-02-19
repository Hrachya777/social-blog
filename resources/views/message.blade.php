
 @if(isset($errors))
 		@if(count($errors)>0)
			<div  class="alert alert-danger">  
				@foreach ($errors->all() as $error)
		           <span> {{ $error }}</span><BR> 
		       @endforeach            
		    </div>         
  		@endif
 @endif

@if(Session::has('error'))

			<div class="alert alert-success">
				{{Session::get('error')}}
			</div>

	@endif
@if(Session::has('error_danger'))

		<div class="alert alert-danger">
			{{Session::get('error_danger')}}
		</div>

@endif