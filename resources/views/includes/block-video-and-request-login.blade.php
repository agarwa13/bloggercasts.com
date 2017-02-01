<div class="modal fade" id="modal-block-video-and-request-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">
                    Register or Login
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p>
                    Hi there! I hope you have been enjoying the video tutorials we have for you.
                </p>
                <p>
                    To continue watching additional tutorials, you need to have an account on bloggercasts.com. The account
                    is completely free. When you click on either <a href="/register" target="_blank">register</a> or <a href="/login" target="_blank">login</a>, it will open a new tab in your browser. Once
                    you have registered or signed in, simply return to this page and refresh the page. This notice will
                    disappear and you should be able to access the video.
                </p>

                <p>
                    Remember, if you are registering for a new account, you will need to verify your email
                    address before you can continue watching lessons on bloggercasts.com.
                </p>

            </div>

            <!-- Modal Actions -->
            <div class="modal-footer">
                <a type="button" class="btn btn-primary" href="/register" target="_blank">Register</a>
                <a type="button" class="btn btn-default" href="/login" target="_blank">Login</a>
            </div>
        </div>
    </div>
</div>

@push('footer-scripts')
<script>
    $('#modal-block-video-and-request-login').modal('show');
</script>
@endpush