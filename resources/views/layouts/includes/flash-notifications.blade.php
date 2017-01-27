<!-- Flash Notifications -->
@if (Session::has('success'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p>
                        {{session('success')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Session::has('warning'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <p>
                        {{session('warning')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif