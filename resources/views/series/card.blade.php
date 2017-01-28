<div class="Card">

    <span class="Card__difficulty">
        {{$series->difficulty}}
    </span>

    <div class="Card__image">
        <a href="/series/{{$series->slug}}">
            <img src="{{$series->image}}" class="Card__image" alt="{{$series->title}}">
            <div class="Card__overlay">
                <i class="material-icons">play_circle_outline</i>
            </div>
        </a>
    </div>

    <div class="Card__details">
        <h3 class="Card__title">
            <a href="/series/{{$series->slug}}">
                {{$series->title}}
            </a>
        </h3>


        <div class="Card__count">
            {{$series->lessonsCount}}
            <span class="utility-muted">videos</span>
        </div>

    </div>

</div>