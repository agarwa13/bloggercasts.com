<div class="modal fade" tabindex="-1" role="dialog" id="affiliate-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sorry, We Are Not Ready Yet!</h4>
            </div>
            <div class="modal-body">
                <p>
                    {{$series->title}} is not ready for show time just yet.
                </p>

                <p>
                    If you would like 1:1 help, be sure to use our affiliate link when signing up, then send us the receipt via email to <a href="mailto:nikhil@bloggercasts.com">nikhil@bloggercasts.com</a> and we can schedule a time to work on your website together.
                </p>

                <p>
                    Here is the Affiliate Link:
                </p>

                <p>
                    <a href="{{$series->affiliate_link}}">{{$series->affiliate_link}}</a>
                </p>

                <p>
                    So you know, Bloggercasts.com is currently publishing about 1 video lesson per day. We prioritise video lessons based on requrest we receive via email or through our Facebook Group. So, if you want to influence which video lessons we work on next, head over to the <a href="https://www.facebook.com/groups/bloggercasts/">Facebook Group</a>.
                </p>
            </div>
            <div class="modal-footer">
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                <button type="button" class="btn btn-primary" href="{{$series->affiliate_link}}">Continue</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('#affiliate-modal').modal('show');
    });
</script>