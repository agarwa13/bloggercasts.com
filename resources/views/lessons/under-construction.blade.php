<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img width="100%" src="https://s3-us-west-2.amazonaws.com/bloggercasts/Under_Construction.png">
        </div>
    </div>
</div>

<div class="container" style="padding-top: 60px;">
    <div class="row">

        <h2 class="Heading--Fancy">
            <span class="Heading--Fancy__subtitle" style="padding-bottom: 10px;">
            This Lesson is Not Published Yet
        </span>
            <span>Subscribe To Be Notified When It Is</span>
        </h2>

        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{url('/subscribe')}}" target="_blank">
                        {!! csrf_field() !!}

                        <input type="hidden" name="lesson_id" value="{{$lesson->id}}">

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>

                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>