@extends('website.layout')
@section('title', __('about.title'))
@section('content')
@include('website.components.breadcrumb', ['pageName' => 'about'])


<div class="site-section border-bottom" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>{{ __('about.the_team') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src={{ asset('assets/images/shahd.jpg')}} alt="@lang('about.image_placeholder')" class="mb-4">
                            <h3 class="block-38-heading h4">Shahd Mohamed Elmnyar</h3>
                            <p class="block-38-subheading">Backend developer</p>
                        </div>
                        <div class="block-38-body">
                            {{-- <p>{{ __('about.team_member_description') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src={{ asset('assets/images/nada.jpg')}} alt="@lang('about.image_placeholder')" class="mb-4">
                            <h3 class="block-38-heading h4">Nada Reda Fathy Refaey</h3>
                            <p class="block-38-subheading">Backend developer</p>
                        </div>
                        <div class="block-38-body">
                            {{-- <p>{{ __('about.team_member_description') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src={{ asset('assets/images/yasmin.jpg')}} alt="@lang('about.image_placeholder')" class="mb-4">
                            <h3 class="block-38-heading h4">Yasmin hasan kamal</h3>
                            <p class="block-38-subheading">Backend developer</p>
                        </div>
                        <div class="block-38-body">
                            {{-- <p>{{ __('about.team_member_description') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src={{ asset('assets/images/hager.jpg')}} alt="@lang('about.image_placeholder')" class="mb-4">
                            <h3 class="block-38-heading h4">Hager Khaled sahm</h3>
                            <p class="block-38-subheading">Backend developer</p>
                        </div>
                        <div class="block-38-body">
                            {{-- <p>{{ __('about.team_member_description') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">{{ __('about.free_shipping') }}</h2>
                    <p>{{ __('about.free_shipping_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">{{ __('about.free_returns') }}</h2>
                    <p>{{ __('about.free_returns_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">{{ __('about.customer_support') }}</h2>
                    <p>{{ __('about.customer_support_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
