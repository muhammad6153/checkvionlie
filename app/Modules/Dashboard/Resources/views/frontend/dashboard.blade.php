@extends(front_layout('master'))
@section('title', 'Dashboard')
@section('content')


    <style>
        ::placeholder {
            color: rgb(8, 8, 8) !important;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: rgb(20, 20, 20) !important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: rgb(10, 10, 10) !important;
        }
    </style>
    <div class="row m-5">
        <div class="row m-5">
            <div class="col-md-4">
                @include(frontend_module_view('partials.sidebar'))
            </div>

            <div class="col-md-8">

                <div class="loginpage">
                    <div class="dash-detial">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    Setting
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dashboard_edit_profile">
                                    @include(admin_module_view('partials.simple-messages'))

                                    <form role="form" class="dash-upload"
                                        action="{{ route(front_route('user.edit.setting.update')) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="dash-label">First Name</label>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                value="{{ old('first_name') ?? ($data->first_name ?? '') }}"
                                                name="first_name" placeholder="{{ __('First Name') }}" autofocus />
                                            @error('first_name')
                                                <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="dash-label">Last Name</label>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" value="{{ old('last_name') ?? ($data->last_name ?? '') }}"
                                                placeholder="{{ __('Last Name') }}" autofocus />
                                            @error('last_name')
                                                <span class="error invalid-feedback"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>


                                        <div class="button">
                                            <button type="submit">{{ __('Save') }}</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

        function formatPhoneNumber(phoneNumberString) {
            var cleaned = ('' + phoneNumberString).replace(/\D/g, '');
            var match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
            if (match) {
                return '(' + match[1] + ') ' + match[2] + '-' + match[3];
            }
            return null;
        }
    </script>
@endpush
