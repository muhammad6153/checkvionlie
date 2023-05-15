
<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{ route(front_route('user.dashboard')) }}" class="{{'front.user.dashboard' == Route::currentRouteName()?'active':''}}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
    </li>
    @if( \ShoppingCart::getContent()->count() )
    <li class="nav-item"> 
        <a href="{{ route(front_route('user.payment')) }}" class="{{'front.user.payment' == Route::currentRouteName()?'active':''}}"><i class="fas fa-dollar-sign"></i> <span>Payment</span></a>
    </li>
    @endif
    <li class="nav-item">
        <a href="{{ route(front_route('user.packages')) }}" class="{{'front.user.packages' == Route::currentRouteName()?'active':''}}"><i class="fas fa-cube"></i> <span>Packages</span></a>
    </li>
    <li class="nav-item">
        <a href="{{ route(front_route('user.change_password')) }}" class="{{'front.user.change_password' == Route::currentRouteName()?'active':''}}"><i class="fas fa-unlock-alt"></i> <span>Change Password</span></a>
    </li>
 
    {{-- <li>
        <a class="gdbd_help_swal"><i class="fa fa-support"></i> <span>Help</span></a>
    </li> --}}
    <li>
        <a href="{{ route(front_route('user.logout')) }}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
    </li>

</ul>



<style>
    .modal-dialog {

        pointer-events: inherit!important;
    }
</style>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">

    var swalpopup = false;
    // exampleModal
    $('.gdbd_help_swal').on('click', function () {

        swal.fire({
            title: "Contact Us",
            html: $('#email-help-form-modal').html(),
            showCancelButton: true,
            confirmButtonText: 'Send Email',
            showLoaderOnConfirm: true,
            closeOnConfirm: false,
            closeOnCancel: false,
            buttons: false,
            preConfirm: (login) => {
                var route = '{{route(front_route('user.helpemail'))}}';

                var payload = $('#email-help-form-div form').serialize();
                var data = new FormData();
                data.append("json", JSON.stringify(payload));
                return fetch(route, {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded','X-Requested-With': 'XMLHttpRequest'},
                    body: data
                })
                    .then(response => {
                        // response = response.clone().json();
                        if (!response.ok) {
                            throw new Error(response.statusText)
                        }

                        var responsejs = response.json()
                        if (!response.ok) {
                            throw new Error(response.statusText)
                        }

                        responsejs.then(
                            function (value) {

                                console.log(value);


                                if (value.error) {
                                    console.log(value.error);
                                    console.log(value.error)
                                    swal.showValidationMessage(
                                        "Request failed:"
                                    )

                                    if (value.error.subject) {

                                        $('.subject_error').prop('display', true)
                                        $('.subject_error').html(value.error.subject);
                                    }
                                    if (value.error.message) {

                                        $('.message_error').prop('display', true)
                                        $('.message_error').html(value.error.message);
                                    }



                                }
                                console.log(value.status);
                                if (value.status == false) {

                                    // return response.json(); //then consume it again, the error happens

                                    return return_error()
                                } else {
                                    swal.close();
                                    swal.fire("Successfully Submitted!", "Thank you! we will get back to you soon.", "success");
                                }
                            }
                        )
                        //
                        console.log(response);

                        function return_error() {
                            if (response.ok) {
                                // console.log(response.json()); //first consume it in console.log
                                return response.json(); //then consume it again, the error happens
                            }
                        }

                        if (response.ok) {
                            return false; //then consume it again, the error happens
                        }
                    })
                    .catch(error => {
                        swal.showValidationMessage(
                            `Request failed: ${error}`
                        )
                    })
            },
            allowOutsideClick: () => !swal.isLoading()
        })
    })

</script>


    @endpush
