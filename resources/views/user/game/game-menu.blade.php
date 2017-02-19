
@foreach($game_pages as $game_page)
<li class="games">
    <a href="{{action('UsersController@getCategoryPage',$game_page->id)}}" class="game_link">
        <div class="game_img_place">
            <img src="/page_uploade/game/game_page_images/{{$game_page->image}}" class="game_img" />
        </div>
        <span class="game_category_name">
            {{$game_page->name}}
        </span>
    </a>
</li>
@endforeach