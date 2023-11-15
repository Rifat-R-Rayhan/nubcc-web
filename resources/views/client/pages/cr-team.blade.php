@extends('client.layouts.masterlayout')

@section('content')
<main id="main">


<!-- ======= CRSection ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container pt-5">

                <!-- CR Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-center text-primary px-3">Our CR</h6>
                <h4 class="display-7 mb-4">We Have A Creative CR's Team</h4>
            </div>
            <div class="row g-4 mb-5">




                @foreach($crs as $cr)
                @if($cr->is_active == 2)
                <div class="row g-4 mb-5">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    
                        <div class="team-item text-center p-4">
                            <td><img src="{{asset('uploads/images/crs')}}/{{$cr->image}}" class="img-fluid border rounded-circle w-75 p-2 mb-4"></td>
                            <div class="team-text">
                                <div class="team-title">
                                    
                                    <h6>{{$cr->cr_name}}</h6>
                                    <span>Semester: {{$cr->semester}} "({{$cr->section}})"</span>
                                    <span></span>
    
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-primary " href="{{$cr->fb_link}}"><i class="fab fa-facebook-f "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    <!-- CR End -->



    </div>
</section><!-- End CR Section -->

</main>
<!-- End #main -->
@endsection