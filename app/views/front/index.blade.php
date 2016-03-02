@extends("layout.site")
@section("content")
    <span class="quoted">We make<br/>wonderful<br/>buildings</span><br/>
    <span class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <a href="grid_gallery.html">link to Portfolio</a> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
    <!-- HOME FULLSCREEN BACKGROUNDS -->
    <div class="thumbs">
        <ul>
            @foreach($slider as $s)
                <li><a href="{{url($s->image)}}"><img src="{{url("public_assets/images/home/thumbnail_2.jpg")}}" alt="{{$s->title}}"/></a></li>
            @endforeach
        </ul>
        <img id="slideshow" class="playpause" title="Play slideshow" src="{{url("public_assets/images/home/play.png")}}" alt="" />
    </div>
@stop