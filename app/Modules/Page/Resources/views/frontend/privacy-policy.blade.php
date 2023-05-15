@extends(front_layout('master'))
@section('title', 'Privacy Policy')
@section('content')
<style>
    viewer-pdf-sidenav{
        display: hidden
    }
    </style>

    <section class="privacy">
        <!-- End Navbar Area -->
        <div class="head-top-banner">
            <h3 style="width: fit-content; color: white;">Vin Details</h3>
        </div>
        <!-- End Top Banner -->


        <!-- sample data in vin detail -->
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
            

                    <div class="container">
                        <div class="col-md-12">
          
                            <iframe src="{{ $url_pdf }}#toolbar=1&navpanes=0&scrollbar=0" height="500" width="1000"></iframe>
                          

                        </div>


                    </div>
                </div>




    </section>

@endsection

@push('scripts')
    <script>
        $(document).on('keypress', 'input[type="number"]', function(event) {
            if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
                event.preventDefault(); //stop character from entering input
            }
        });
    </script>
@endpush
