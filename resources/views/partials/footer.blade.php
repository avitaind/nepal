
 <!-- Footer -->
<footer class="footer">
    <div class="footer-social py-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-around justify-content-md-start">
                <span class="d-inline-block navbar-brand hidden-sm-down">
                    <img src="/images/logo.png" alt="AVITA Nepal Official Website"/>
                </span>


                @php
                    $sns_icons = [ 'facebook' => facebookLinkForCountry($country),
                      'twitter' => twitterLinkForCountry($country),
                      'instagram' => instagramLinkForCountry($country),
                      'whatsapp' => whatsappLinkForCountry($country),
                      'youtube' => youtubeLinkForCountry($country),
                      'linkedin' => linkedinLinkForCountry($country),

                      ];
                @endphp

                @foreach( $sns_icons as $sns_name => $sns_url )

                    @if( $sns_url )
                        <a class="ml-0 {{ $loop->first ? 'ml-md-auto' : 'ml-md-3' }}" href="{{ $sns_url }}" target="_blank"><i class="fa fa-{{ $sns_name }}" aria-hidden="true"></i></a>
                    @endif

                @endforeach


            </div>
        </div>
    </div>

    <div class="footer-info py-0 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <a href="{{ route('product.overview', ['liber-new-generation']) }}" class="my-1">{{ __('messages.products') }}</a>
                            <a href="{{ route('news') }}" class="my-1">{{ __('messages.news') }}</a>
                            <a href="/aboutus" class="my-1">{{ __('messages.about_us') }}</a>
                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                            <a href="/where-to-buy" class="my-1">{{ __('messages.where_to_buy') }}</a>


                            <a href="/contact-us" class="my-1">{{ __('messages.contact_avita') }}</a>


                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">
                            <a href="{{ route('support') }}" class="my-1">{{ __('messages.support') }}</a>
                            <a href="{{ route('repair-tnc') }}" class="my-1">{{ __('messages.repair_tnc') }}</a>
                            <a href="/tnc" class="my-1">{{ __('messages.terms') }}</a>
                            <a href="/tnc" class="my-1">{{ __('messages.privacy') }}</a>
                            <a href="https://forms.gle/UGBuhasZap8T3NoP8" target="_blank" class="my-1">{{ __('messages.career') }}</a>

                        </div>
                    </div>
                    <div class="d-flex hidden-sm-up">
                        <div class="d-flex flex-column mr-5 small-lsm-little">
                            <a href="{{ route('product.overview', ['liber12']) }}" class="my-1">{{ __('messages.products') }}</a>
                            <a href="{{ route('news') }}" class="my-1">{{ __('messages.news') }}</a>
                            <a href="/aboutus" class="my-1">{{ __('messages.about_us') }}</a>
                            <a href="/where-to-buy" class="my-1">{{ __('messages.where_to_buy') }}</a>

                         </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">


                            <a href="{{ route('repair-tnc') }}" class="my-1">{{ __('messages.repair_tnc') }}</a>

                            <a href="{{ route('support') }}" class="my-1">{{ __('messages.support') }}</a>

                            <a href="{{ route('repair-tnc') }}" class="my-1">{{ __('messages.repair_tnc') }}</a>

                            <a href="/tnc" class="my-1">{{ __('messages.terms') }}</a>
                            <a href="/tnc" class="my-1">{{ __('messages.privacy') }}</a>
                            <a href="https://forms.gle/UGBuhasZap8T3NoP8"  target="_blank"  class="my-1">{{ __('messages.career') }}</a>


                        </div>
                    </div>
                </div>
                <!---

                --->
                <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                <div class="col-12 col-md-3 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <p class="heading">{{ __('messages.available_on') }}</p>
                            <a href="https://in.nexstmall.com/" target="_blank" class="my-1">NEXSTMALL</a>
                            <a href="https://www.flipkart.com/search?q=avita+laptops&otracker=search&otracker1=search&marketplace=FLIPKART&p%5B%5D=facets.serviceability%5B%5D%3Dtrue&p%5B%5D=facets.brand%255B%255D%3DAvita" target="_blank" class="my-1">Flipkart</a>
                            <a href="https://www.amazon.in/s?k=avita&ref=nb_sb_noss_2" target="_blank" class="my-1">Amazon</a>
                            <a href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2&page=1&brand=510306" target="_blank" class="my-1">Paytm Mall</a>
                            <a href="https://www.reliancedigital.in/search?q=avita:relevance" target="_blank" class="my-1">Reliance Digital</a>
                            <a href="https://www.tatacliq.com/search/?searchCategory=all&text=avita" target="_blank" class="my-1">TATA Cliq</a>
                        </div>
                    </div>

                    </div>

                </div>

                <div class="col-12 col-md-4 pb-3 py-md-0 text-md-right">
                    <div class="d-flex flex-wrap h-100 align-content-between">
                        <div class="col-12 info-lang w-100 px-0 hidden-sm-down">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="">{{ __('messages.Nepal') }}</span></a>
                        </div>
                        <div class="col-12 info-lang w-100 px-0 hidden-md-up pb-sm-2">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="pr-2">{{ __('messages.Nepal') }}</span></a>


                        </div>
                        <div class="info-copyright w-100"><a target="_blank" href="http://www.nexstgo.com">© Nexstgo Company Ltd.</a>  {{ __('messages.all_rights_reserved') }}.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
