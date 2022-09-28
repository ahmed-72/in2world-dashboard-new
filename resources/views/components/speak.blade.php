{{-- @props([
    'title',
    'description'
]) --}}
<div class="container-fluid lets-talk py-5">
    <div class="container py-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-8 wow fadeInRight" data-wow-duration="1s">
                <h3 class="title-sec mb-3">
                    {{__('Let\'s talk together')}}
                </h3>
                <p>{{__('Whether you need a complete product, consultation, technology investments or an extended team, our experts are with you around the clock to find the best solutions.')}}
                </p>
            </div>
            <div class="col-auto mt-3 mt-sm-0 wow fadeInLeft" data-wow-duration="1s">
                <a   class="btn btn-outline px-4 py-3 d-inline-block" href="{{route('message.create')}}">
                   {{__('Call us')}}
                </a>
            </div>
        </div>
    </div>
</div>
