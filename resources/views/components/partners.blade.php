@if($partners ??count([]))
<div class="container-fluid our-partners py-4 py-lg-5 bg-gray">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-auto wow fadeInDown" data-wow-duration="1s">
                <h2 class="title-sec">
                    {{__('Our partners')}}
                </h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($partners ??[] as $partner)
            <div class="col-md-4 wow fadeInTopRight" data-wow-duration="1s">
                <a class="link-partner flip-card d-flex align-items-center justify-content-center" >
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/storage/{{$partner->images[0]->src}}" alt="Avatar" width="100" height="100">
                        </div>
                        <div class="flip-card-back">
                            <h6 class="mb-3">{{__('about')}}  {{$partner->name}}</h6>
                            <p>{{$partner->details}} </p>
                        </div>
                    </div>
                </a>
            </div>
         @endforeach
        </div>
    </div>
</div>
@endif
