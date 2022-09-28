@extends('front_site.repeat.master')
@section('content')
    {{-- share_image --}}

    <x-share_image title="{{ __('front.main') }}" sub="{{ __('front.why') }}" > </x-share_image>
    <div class="container-fluid">
        <div class="container pb-5">

            <div class="row row-text-img align-items-center pt-5">
                <div class="col-lg-6">
                    <div class="d-flex">
                        <img src="{{ asset('./imgs/bg-about.jpg') }}" width="100" height="100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div>
                        <h2 class="mb-3">
                        {{__('About company')}} 
                        </h2>
                        <p>
                           {{__('In2world is a technology company with a global vision that works with utmost precision in providing its technical services to existing and emerging companies and institutions locally and internationally. IN2WORLD adopts unique technology solutions for innovative thinking to achieve its ultimate goal of fulfilling the customer\'s goal.')}} </p>
                    </div>
                </div>
            </div>

            <div class="row row-text-img align-items-center pt-5">
                <div class="col-lg-6">
                    <div class="d-flex box-video">
                        <video width="100" height="100" class="paused">
                            <source src="./videos/main.mp4" type="video/mp4">
                        </video>
                        <button type="button" class="d-flex align-items-center justify-content-center">
                            <img class="icon-play" src="./imgs/icon-play.svg" width="12" height="12" alt="">
                            <img class="icon-pause" src="./imgs/icon-pause.svg" width="12" height="12"
                                alt="">
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 order-lg-first">
                    <div>
                        <h2 class="mb-3">
                        {{__('Our team')}} 
                        </h2>
                        <p>
                        {{__('IN2WORLD is staffed by highly-certified individuals who are passionate about making a difference in the world and delivering high quality and performance. The team members are also aware of the importance of listening to the customer’s idea and crystallizing it in order to achieve our endeavor to become a distinguished number in the world of programming and business, and to be your first choice in the field of information technology and the application of digital transformation to achieve innovation goals in a sustainable and effective manner.')}} 
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-blue py-5 our-features">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-12">
                    <div>
                        <h3 class="mb-3">
                        {{__('Why iN2WORLD?')}} 
                        </h3>
                        <p>
                        {{__('We work with a \'quality first\' policy, where we provide distinguished services with competitive value to win the trust of our customers. We also built the most appropriate solution to launch attractive ideas that achieve huge profitable and marketing returns. Taking into account the continuous follow-up on the latest developments in the world of technology and technical races.')}} 
                     </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 my-3 col-feature col-md-6">
                    <div>
                        <div>
                            <i class="d-inline-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="red"
                                        d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z" />
                                </svg>
                            </i>
                        </div>
                        <h4 class="mt-4 mb-3">
                            {{__('Global vision and international partnerships')}}
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 my-3 col-feature col-md-6">
                    <div>
                        <div>
                            <i class="d-inline-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="red"
                                        d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM177.8 63.19L187.8 80.62C190.5 85.46 192 90.93 192 96.5V137.9C192 141.8 193.6 145.6 196.3 148.3C202.6 154.6 212.8 153.1 218.3 147.1L231.9 130.1C236.6 124.2 244.8 122.4 251.6 125.8L266.8 133.4C270.2 135.1 273.1 136 277.8 136C284.3 136 290.6 133.4 295.2 128.8L299.1 124.9C302 121.1 306.5 121.2 310.1 123.1L339.4 137.7C347.1 141.6 352 149.5 352 158.1C352 168.6 344.9 177.8 334.7 180.3L299.3 189.2C291.9 191 284.2 190.7 276.1 188.3L244.1 177.7C241.7 176.6 238.2 176 234.8 176C227.8 176 220.1 178.3 215.4 182.5L176 212C165.9 219.6 160 231.4 160 244V272C160 298.5 181.5 320 208 320H240C248.8 320 256 327.2 256 336V384C256 401.7 270.3 416 288 416C298.1 416 307.6 411.3 313.6 403.2L339.2 369.1C347.5 357.1 352 344.5 352 330.7V318.6C352 314.7 354.6 311.3 358.4 310.4L363.7 309.1C375.6 306.1 384 295.4 384 283.1C384 275.1 381.2 269.2 376.2 264.2L342.7 230.7C338.1 226.1 338.1 221 342.7 217.3C348.4 211.6 356.8 209.6 364.5 212.2L378.6 216.9C390.9 220.1 404.3 215.4 410.1 203.8C413.6 196.8 421.3 193.1 428.1 194.6L456.4 200.1C431.1 112.4 351.5 48 256 48C228.3 48 201.1 53.4 177.8 63.19L177.8 63.19z" />
                                </svg>
                            </i>
                        </div>
                        <h4 class="mt-4 mb-3">
                           {{__('Expanded markets and')}}
                            <br>
                            {{__('specialized teams')}}
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 my-3 col-feature col-md-6">
                    <div>
                        <div>
                            <i class="d-inline-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="red"
                                        d="M414.8 40.79L286.8 488.8C281.9 505.8 264.2 515.6 247.2 510.8C230.2 505.9 220.4 488.2 225.2 471.2L353.2 23.21C358.1 6.216 375.8-3.624 392.8 1.232C409.8 6.087 419.6 23.8 414.8 40.79H414.8zM518.6 121.4L630.6 233.4C643.1 245.9 643.1 266.1 630.6 278.6L518.6 390.6C506.1 403.1 485.9 403.1 473.4 390.6C460.9 378.1 460.9 357.9 473.4 345.4L562.7 256L473.4 166.6C460.9 154.1 460.9 133.9 473.4 121.4C485.9 108.9 506.1 108.9 518.6 121.4V121.4zM166.6 166.6L77.25 256L166.6 345.4C179.1 357.9 179.1 378.1 166.6 390.6C154.1 403.1 133.9 403.1 121.4 390.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4L121.4 121.4C133.9 108.9 154.1 108.9 166.6 121.4C179.1 133.9 179.1 154.1 166.6 166.6V166.6z" />
                                </svg>
                            </i>
                        </div>
                        <h4 class="mt-4 mb-3">
                            {{__('Technical values and services')}}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container pb-5">

            <div class="row row-text-img align-items-center pt-5">
                <div class="col-lg-6">
                    <div class="d-flex">
                        <img src="{{ asset('./imgs/our-message.jpg') }}" width="100" height="100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div>
                        <h2 class="mb-3">
                            {{__('Our message')}}
                        </h2>
                        <p>
                          {{__('Providing the best services and solutions with high professionalism in the field of technical solutions to support our clients in order to achieve their success, taking into account the long-term partnership with them by focusing on professional value and competitive advantage.')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row row-text-img align-items-center pt-5">
                <div class="col-lg-6">
                    <div class="d-flex">
                        <img src="{{ asset('./imgs/our-vision.jpg') }}" width="100" height="100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 order-lg-first">
                    <div>
                        <h2 class="mb-3">
                           {{__('Our vision')}}
                        </h2>
                        <p>
                            {{__('We transcend borders and cultures to provide a unique experience to our customers and create long-term partnerships based on transparency and continuity in performance development to be a global leader in providing and developing the best services and professional solutions in the technology solutions sector.')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row row-text-img align-items-center pt-5">
                <div class="col-lg-6">
                    <div class="d-flex">
                        <img src="{{ asset('./imgs/our-values.jpg') }}" width="100" height="100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div>
                        <h2 class="mb-3">
                            {{__('Rate us')}}
                        </h2>
                        <p>
                            • {{__('Efficiency')}}
                            <br>
                            • {{__('Trust and transparency')}}
                            <br>
                            • {{__('Professionalism')}}
                            <br>
                            • {{__('Specialty')}}

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-partners></x-partners>
    <x-speak ></x-speak>
@endsection
