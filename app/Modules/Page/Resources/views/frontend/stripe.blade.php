@extends(front_layout('master'))
@section('title', 'Privacy Policy')
@section('content')

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
            border: black
        }
    </style>
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
    <section class="privacy">
        <!-- End Navbar Area -->
        <div class="head-top-banner">
            <h3 style="width: fit-content; color: white;">Payment</h3>
        </div>
        <!-- End Top Banner -->


        <!-- sample data in vin detail -->
        <div class="d-flex justify-content-center bd-highlight mb-3">


            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table">
                            <h3 class="panel-title">Payment Details</h3>
                        </div>
                        <div class="panel-body">


                            @if (
                                \Session::has('alert-message') &&
                                    in_array(\Session::get('alert-message')['status'], ['danger', 'warning', 'success', 'info']))
                                @php $alert = \Session::get('alert-message'); @endphp
                                <div class="alert alert-{{ $alert['status'] }} alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    @if (isset($alert['title']))
                                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                    @endif
                                    {!! $alert['message'] ?? 'No Display Message' !!}
                                </div>
                            @endif
                            <div class="error d-none">
                                <div class="alert alert-danger alert-dismissible fade in hide">
                                    <span class="messange-error"></span>
                                    <button type="button" class="close btn" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                </div>
                            </div>
                            <form role="form" action="{{ route(front_route('page.check_the_vin')) }}" method="post"
                                class="require-validation" data-cc-on-file="false"
                                data-stripe-publishable-key="pk_live_51MhGAEB35JawF1VMXo5QCvn0rPDzBPiPYWK0uFRaNlnk9Jhqy1fleHfmURZPL0ngDJEduufsLVkMK8eJP48uudr600rrKK4rTM" id="payment-form">
                                @csrf
                                <input name="vin_number" hidden value="{{ $vin_number }}">
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required m-1'>
                                        <label class='control-label'>Name on Card</label>
                                        <input class='form-control border border-primary' name='card_name' size='4'
                                            type='text'>

                                    </div>

                                    <div class='col-xs-12 form-group  required  m-1'>
                                        <label class='control-label'>Card Number</label>

                                        <input autocomplete='off' class='form-control card-number  border border-primary'
                                            onkeypress="return onlyNumberKey(event)" name="card_number"  maxlength="20" type='text'>
                                        <img src="{{ asset(front_asset('images/payment.png')) }}" width="120px" />

                                    </div>


                                    <div class='col-xs-12 col-md-4 form-group expiration required m-1'>
                                        <label class='control-label'>Expiration Month</label> <input
                                            class='form-control card-expiry-month border border-primary'
                                            onkeypress="return onlyNumberKey(event)" name='card_month' placeholder='MM' min="1"
                                            maxlength="2" type="text">
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required m-1'>
                                        <label class='control-label'>Expiration Year</label> <input type="number"
                                            maxlength="2" maxlength="2"
                                            class='form-control card-expiry-year border border-primary' name="card_year" placeholder='YYYY'
                                            maxlength="4" onkeypress="return onlyNumberKey(event)">
                                    </div>
                                    <div class='col-xs-12 col-md-3 form-group cvc required m-1'>
                                        <label class='control-label'>CVC</label> <input type="text" maxlength="3" name="card_cvc"
                                            autocomplete='off' class='form-control card-cvc  border border-primary'
                                            placeholder='ex. 311' size='3'>
                                    </div>
                                </div>

                                

                                <div class="row">
                                    <div class="col-xs-12 m-1">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now
                                            ($39.<sub>99</sub>)</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </section>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        $errorMessage.addClass('show');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.messange-error')
                        .text(response.error.message);
                    $('.error')
                        .find('.alert-dismissible')
                        .removeClass('hide')
                        .addClass('show')
                    $('.error').removeClass('d-none')

                } else {
                    /* token contains id, last4, and card type */
                    $('.error')
                        .find('.alert-dismissible')
                        .removeClass('show')
                        .addClass('hide')
                    $('.error').addClass('d-none')

                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endsection
