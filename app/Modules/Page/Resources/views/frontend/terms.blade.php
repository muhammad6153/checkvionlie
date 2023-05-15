@php
    $site_settings = get_site_settings();
    $meta_title = $seo_metadata['meta_title'] ?? $page_title;
@endphp
@extends(front_layout('master'))
@section('title', $page_title)
@section('meta_tags')
    @if (isset($seo_metadata['meta_keywords']) && $seo_metadata['meta_keywords'])
        <meta name="keywords" content="{{ $seo_metadata['meta_keywords'] }}" />
    @endif

    <meta property="url" content="{{ route(front_route('page.terms')) }}" />
    <meta property="type" content="article" />
    <meta property="title" content="{{ $meta_title }}" />
    @if (isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'])
        <meta property="description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    <meta property="og:url" content="{{ route(front_route('page.terms')) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $meta_title }}" />
    @if (isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'])
        <meta property="og:description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    @if (isset($site_settings['sites']) && isset($site_settings['sites']['share_logo']))
        <meta property="image"
            content="{{ \App\Models\Setting::getImageURL($site_settings['sites']['share_logo']) ?: front_asset('images/logo.png') }}" />
        <meta property="og:image"
            content="{{ \App\Models\Setting::getImageURL($site_settings['sites']['share_logo']) ?: front_asset('images/logo.png') }}" />
    @endif
@endsection
@section('content')


    <section class="privacy">
      
    
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="width: fit-content; margin: auto;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Terms And Conditions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Privacy Policy</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li> -->
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="section-title">
                    <div class="content" style="padding: 20px">
                        <p>
                          Cheap Vehicle Report began out of aspiration to get vehicle history industry to the next level. 
                          For longer time no competition existed for these reports. Vin Vehicle Pro and AutoCheck, both of them
                          continued to rise the prices, all the while granting fewer and fewer services to their customers.
                          <br><br>
                          So Cheap Vehicle Report move about changing the way the industry did business. We looked after the 
                          innovative ways of offering our customers the critical details they needed in the vehicle report.
                          In the end, (Authorized NMVTIS Provider) to give data from National Motor Vehicle 
                          Title Information System (NMVTIS) because it accommodate a database of tens of millions of used vehicle, 
                          a database is not only reform regularly, but it is famous for its accuracy. At the same time, we progress 
                          a relationship with exceptional group which gives fast and timely charge data for millions of used vehicles.
                          <br><br>
                          We trust everyone is authorized to a fair price on Cheap Vehicle Report, since the details is absolutely important 
                          to make correct decision on used vehicle. And obviously we help more than just individual buyer make bold 
                          decision about used vehicles. In case you are a dealer selling used vehicles, Cheap Vehicle Report will promote 
                          your vehicle by providing your clients all the obligatory details about them. 
                          <br><br>
                          Lastly, we make an effort to provide services that our competition simply wasn’t offering. So we started giving
                          certain auto auction details, such as whether or not a used vehicle has ever been in one, for free. And even we
                          also provide you free picture of your vehicle at the auction when available.
                          <br><br>
                          We’re always look after the new ways to make Cheap Vehicle Report absolutely good. Send us your feedback now, and let 
                          us know we can make your life easier when you want vehicle history report. 
                          <br><br>
                          Welcome to Cheap Vehicle Report. Our registration process takes hardly one minute to complete and you will have unlimited 
                          access once you’re finished with registration.
                        </p>
                      </div>
                </div>
               
    
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="section-title">
                
                    <p>With nearly 1,000 team members, including a network of more than 800 vehicle inspectors, and five locations across the U.S. and Canada, is the largest provider of off-lease, field-based vehicle inspection services. We offer an array of third-party inspection programs, innovative technology solutions and data/analytics services. Clients rely on our data and insights to guide strategic decision making and better manage remarketing initiatives and risk.
                        <br>
                        We pride ourselves on combining proprietary scheduling and inspection systems with dedicated customer service to deliver a streamlined, best-in-class experience. Our clients include vehicle manufacturers, banks and financial institutions, fleet, remarketing, warranty and insurance companies.</p>
                </div>
    
    
             
            </div>
            <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
        </div>
    </section>

@endsection
