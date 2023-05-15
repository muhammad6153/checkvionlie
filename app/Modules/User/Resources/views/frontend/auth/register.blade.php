@extends(front_layout('master'))
@section('title', 'Registration')
@section('content')

    <style>
        ::placeholder {
            color: rgb(8, 8, 8)!important;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: rgb(20, 20, 20)!important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: rgb(10, 10, 10)!important;
        }
    </style>

    <div class="verify">
        <div class="container">

            <div class="row m-5">

                <h4>Please verify your email address to proceed</h4>
                <form action="{{ route(front_route('user.register')) }}" method="POST">

                    @csrf
                    @method('post')
                    <div class="row">

               
                        <div class="col-md-6 mb-2">
                            <div class="field threefield  form-group">
                        <input type="text" placeholder="First Name"
                            class="form-control border border-primary  @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ old('first_name') ?? ($exists_session['first_name'] ?? '') }}" />
                        @error('first_name')
                            <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                        </div>
                    </div>
                 
                        <div class="col-md-6 mb-2">
                            <div class="field threefield form-group">
                        <input type="text" placeholder="Last Name"
                            class="form-control border border-primary @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ old('last_name') ?? ($exists_session['last_name'] ?? '') }}" />
                        @error('last_name')
                            <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                        </div>
                    </div>
                    
                        <div class="col-md-12 mb-2">
                            <div class="field threefield form-group">
                        <input type="email" placeholder="Email Address"
                            class="form-control border border-primary @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') ?? ($exists_session['email'] ?? '') }}" />
                        @error('email')
                            <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                        </div>
                    </div>
                  
                        <div class="col-md-12 mb-2">
                            <div class="field threefield form-group">
                        <input type="password" placeholder="Password Address"
                            class="form-control border border-primary @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') ?? ($exists_session['password'] ?? '') }}" />
                        @error('password')
                            <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                        </div>
                    </div>
                    </div>

                    <div class="button">
                        <button type="submit" class="btn btn-success" value="Verify">Verify</button>
                    </div>
                    <div class="button">
                        <p class="btn btn-default"> <a href="{{ route(front_route('user.login')) }}" >Already registered
                                member?</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        $('#phone').on('change', function() {
            var phoneNumberString = $(this).val();
            phoneNumberString = formatPhoneNumber(phoneNumberString);
            $(this).val(phoneNumberString);


        });
    </script>
@endpush
