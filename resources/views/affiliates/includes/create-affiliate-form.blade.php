<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            Add Affiliate
        </div>

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

            <form method="post" action="{{url('/affiliates')}}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="password">
                </div>

                <div class="form-group">
                    <label for="portal">Portal Link</label>
                    <input type="text" class="form-control" name="portal" id="portal" placeholder="portal">
                </div>

                <div class="form-group">
                    <label for="email">Associated Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                </div>

                <div class="form-group">
                    <label for="link">Affiliate Link</label>
                    <input type="text" class="form-control" name="link" id="link" placeholder="link">
                </div>

                <button type="submit" class="btn btn-default">Add Affiliate</button>
            </form>
        </div>
    </div>
</div>