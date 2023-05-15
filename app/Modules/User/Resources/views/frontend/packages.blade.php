@extends(front_layout('master'))

@section('title', 'Dashboard')
@section('content')

    <div class="container">
        <div class="row m-5">
            <div class="col-md-4">
                @include(frontend_module_view('partials.sidebar'))
            </div>


            <div class="col-md-8">

                <div class="row">
                    <div class="col-12">
                        <div class="card col-12">
                            <div class="m-2">
                            <form method="post" action="{{ route(front_route('cart.add_to_cart')) }}">
                                <button type="submit" class="btn btn-success " style="float: right">Add More
                                    Package</button>

                            </form>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="9%">Actions</th>
                                            <th>Name</th>
                                            <th>price</th>

                                            <th>Status</th>
                                            <th width="12%">Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="9%">Actions</th>
                                            <td>Name</th>
                                            <td>$30</th>

                                            <td>working in progress</th>
                                            <td width="12%">Created At</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ admin_asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ admin_asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="{{ admin_asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ admin_asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ admin_asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

    <script>
        {{--    <script type="text/javascript" src="{{ asset(front_asset('js/sweetalert2.js')) }}"></script> --}}
            <
            script src = "https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js" >
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                order: [
                    [3, 'desc']
                ],
            });
        });

        var swalpopup = false;
        // exampleModal
        $('.system_price').on('click', function() {

            swal.fire({
                title: "System Pricing",
                html: $('#system-pricing-form').html(),
                showCancelButton: true,
                confirmButtonText: 'Look Up',
                showLoaderOnConfirm: true,
                closeOnConfirm: false,
                closeOnCancel: false,
                buttons: false,
                preConfirm: (login) => {
                    var route = '{{ route(front_route('user.systemprice')) }}';

                    var payload = $('.swal2-modal form').serialize();
                    var data = new FormData();
                    data.append("json", JSON.stringify(payload));
                    return fetch(route, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
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
                                function(value) {

                                    console.log(value);


                                    if (value.error) {
                                        console.log(value.error);
                                        console.log(value.error)
                                        swal.showValidationMessage(
                                            "Request failed:"
                                        )

                                        if (value.error.name) {
                                            $('.name_error').prop('display', true)

                                            $('.name_error').html(value.error.name);
                                        }
                                        if (value.error.phone) {
                                            $('.phone_error').prop('display', true)
                                            $('.phone_error').html(value.error.phone);
                                        }
                                        if (value.error.email) {
                                            $('.email_error').prop('display', true)
                                            $('.email_error').html(value.error.email);
                                        }


                                    }
                                    console.log(value.status);
                                    if (value.status == false) {

                                        // return response.json(); //then consume it again, the error happens

                                        return return_error()
                                    } else {
                                        swal.close();
                                        swal.fire("Successfully Submitted!",
                                            "Thank you! we will get back to you as soon.",
                                            "success");
                                    }
                                }
                            )
                            //
                            console.log(response);

                            function return_error() {
                                if (response.ok) {
                                    // console.log(response.json()); //first consume it in console.log
                                    return response
                                        .json(); //then consume it again, the error happens
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


        package_details_json = '@php echo json_encode($package_details, true); @endphp';
        $(window).on('load', function() {
            package_details = JSON.parse(package_details_json);
            console.log(package_details);

            // this is for price onchange
            setTimeout(function() {
                $('.checkbox_tier').trigger('change');

                if ($('.addons-monthly').is(':visible')) {
                    $('.addons-monthly [name="addon_video"]:first').trigger('click');
                } else if ($('.addons-yearly').is(':visible')) {
                    $('.addons-yearly [name="addon_video"]:first').trigger('click');
                }


                $('.package_selection').on('click', function(e) {
                    var that = $(this);
                    var selected_json = that.attr('data-selected-json');
                    that.prop('disabled', true);
                    // var container_closest = that.closest('.package_details');
                    // var container_parent = that.closest('.package_details').parent();
                    // var total_price = container_closest.find('[data-price]').html();
                    // var selected_package_name = container_parent.find('h2').html();
                    // var selected_package_tier = $('.checkbox_tier').is(':checked') ? 'yearly' : 'monthly';
                    // var selected_package_addon = $('[name="addon_video"]').attr('data-name');
                    //
                    // $('[name="total_price"]').val(total_price);
                    // $('[name="selected_package_name"]').val(selected_package_name);
                    // $('[name="selected_package_tier"]').val(selected_package_tier);
                    // $('[name="selected_package_addon"]').val(selected_package_addon);

                    that.prop('disabled', false);

                    setTimeout(function() {
                        if (that.prop('disabled')) {
                            return false;
                        } else {
                            that.submit();
                        }

                    }, 90);
                });

                $('input[name="addon_video"]').on("click", function() {

                    var price = $(this).data('price');
                    console.log(price);
                    var package_details_container = $(this).closest('.package_details');
                    package_details_container.find('[data-price]').html(addCommas(price));
                });

            }, 100);
        });

        $('.checkbox_tier').on('change', function(e) {
            var checkbox_tier = $(this);
            changePricing(checkbox_tier);
        });


        function changePricing(checkbox_tier) {
            var package_details_container = $('#tier-premium-form').find('.package_details');
            var package_details_container_plus = $('#tier-premium-plus-form').find('.package_details');
            var package_details_container_test_product = $('#tier-test_product-form').find('.package_details');
            var price = 0;

            if (checkbox_tier.is(':checked') && checkbox_tier.attr('name') === 'tier-premium') {
                // yearly
                $('#tier-premium-form .addons-monthly').addClass('d-none');
                $('#tier-premium-form .addons-yearly').removeClass('d-none');
                var form_name = checkbox_tier.closest('form');
                var data_name = form_name.find('[name="addon_video"]:checked').data('name')
                $('input[name="addon_video"]').each(function(index) {
                    if ($(this).data('name') == data_name && $(this).data('recurring') == 'yearly' && $(this).data(
                            'package') == 'package_premium') {
                        $(this).prop('checked', true);
                    }
                });
                // price = package_details.package_premium.yearly.price;
                if ($('#tier-premium-form input[name="addon_video"]:checked')) {
                    price = $('#tier-premium-form input[name="addon_video"]:checked').data('price');
                }
                package_details_container.find('[data-price]').html(addCommas(price));

            } else if (!checkbox_tier.is(':checked') && checkbox_tier.attr('name') === 'tier-premium') {
                // monthly
                $('#tier-premium-form .addons-monthly').removeClass('d-none');
                $('#tier-premium-form .addons-yearly').addClass('d-none');
                var form_name = checkbox_tier.closest('form');
                var data_name = form_name.find('[name="addon_video"]:checked').data('name')
                $('input[name="addon_video"]').each(function(index) {

                    if ($(this).data('name') == data_name && $(this).data('recurring') == 'monthly' && $(this).data(
                            'package') == 'package_premium') {

                        $(this).prop('checked', true);
                    }

                });
                price = package_details.package_premium_plus.yearly.price;
                if ($('#tier-premium-form input[name="addon_video"]:checked')) {
                    price = $('#tier-premium-form input[name="addon_video"]:checked').data('price');
                }
                package_details_container.find('[data-price]').html(price);
            }


            if (checkbox_tier.is(':checked') && checkbox_tier.attr('name') === 'tier-premium-plus') {
                // yearly
                $('#tier-premium-plus-form .addons-monthly').addClass('d-none');
                $('#tier-premium-plus-form .addons-yearly').removeClass('d-none');


                var form_name = checkbox_tier.closest('form');

                var data_name = form_name.find('[name="addon_video"]:checked').data('name')
                console.log(form_name.find('[name="addon_video"]:checked').data('name'));
                $('input[name="addon_video"]').each(function(index) {

                    if ($(this).data('name') == data_name && $(this).data('recurring') == 'yearly' && $(this).data(
                            'package') == 'package_premium_plus') {

                        $(this).prop('checked', true);
                    }
                });
                if ($('#tier-premium-plus-form input[name="addon_video"]:checked')) {
                    price = $('#tier-premium-plus-form input[name="addon_video"]:checked').data('price');
                }
                package_details_container_plus.find('[data-price]').html(addCommas(price));

            } else if (!checkbox_tier.is(':checked') && checkbox_tier.attr('name') === 'tier-premium-plus') {
                // monthly
                $('#tier-premium-plus-form .addons-monthly').removeClass('d-none');
                $('#tier-premium-plus-form .addons-yearly').addClass('d-none');


                var form_name = checkbox_tier.closest('form');

                var data_name = form_name.find('[name="addon_video"]:checked').data('name')
                console.log(form_name.find('[name="addon_video"]:checked').data('name'));
                $('input[name="addon_video"]').each(function(index) {
                    if ($(this).data('name') == data_name && $(this).data('recurring') == 'monthly' && $(this).data(
                            'package') == 'package_premium_plus') {

                        $(this).prop('checked', true);
                        var price = $(this).val();
                    }
                });
                price = package_details.package_premium_plus.yearly.price;
                if ($('#tier-premium-plus-form input[name="addon_video"]:checked')) {
                    price = $('#tier-premium-plus-form input[name="addon_video"]:checked').data('price');
                }
                package_details_container_plus.find('[data-price]').html(addCommas(price));

            } else if (!checkbox_tier.is(':checked') && checkbox_tier.attr('name') === 'tier-test_product') {
                // monthly
                $('#tier-test_product-form .addons-monthly').removeClass('d-none');
                $('#tier-test_product-form .addons-yearly').addClass('d-none');


                var form_name = checkbox_tier.closest('form');

                var data_name = form_name.find('[name="addon_video"]:checked').data('name')
                console.log(form_name.find('[name="addon_video"]:checked').data('name'));
                $('input[name="addon_video"]').each(function(index) {
                    if ($(this).data('name') == data_name && $(this).data('recurring') == 'monthly' && $(this).data(
                            'package') == 'package_premium_plus') {

                        $(this).prop('checked', true);
                        var price = $(this).val();
                    }
                });
                price = package_details.test_products.yearly.price;

                if ($('#tier-test_product-form input[name="addon_video"]:checked')) {
                    price = $('#tier-test_product-form input[name="addon_video"]:checked').data('price');
                }
                package_details_container_test_product.find('[data-price]').html(addCommas(price));

            }


        }


        function addCommas(nStr) {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

        $(document).on('change', '#pop_phone', function() {
            var phoneNumberString = $(this).val();
            phoneNumberString = formatPhoneNumber(phoneNumberString);
            $(this).val(phoneNumberString);
        });

        $(".zandesk").click(function() {
            $(".zandesk").toggleClass("active");
            if ($('.gdbd_help_swal_trigger').length > 0) {
                $(this).removeClass("gdbd_help_swal_trigger");
                setTimeout(function() {
                    $('.gdbd_help_swal').click();
                }, 1000);
            }

        });
    </script>
@endpush
