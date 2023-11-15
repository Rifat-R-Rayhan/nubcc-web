@extends('client.layouts.masterlayout')

@section('content')
<main id="main">



<!-- ======= Team Section ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container pt-5">

                <!-- Team Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-center text-primary px-3">Our Team</h6>
                <h4 class="display-7 mb-4">We Have A Creative Team For Leading The Future</h4>
            </div>
            <div class="row g-4 mb-5">


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="comittee_pic/doha_sir.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h6>Muhammad Samsudooha Alam</h6>
                                <span>Honorable Convener, NUBCC</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-primary " href="https://www.facebook.com/msdohanub"><i class="fab fa-facebook-f "></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="comittee_pic/rupom.png" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h6>Azharul Islam Rupom</h6>
                                <span>President, NUBCC</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-primary " href="https://www.facebook.com/rupomislambd"><i class="fab fa-facebook-f "></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="comittee_pic/sakib.jpeg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h6>Sakibur Rahman Saikat</h6>
                                <span>General Secretary, NUBCC</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-primary " href="https://www.facebook.com/demons.king.549/"><i class="fab fa-facebook-f "></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-primary " href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="comittee_pic/rifat.jpeg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h6>Rifat Hossen</h6>
                                <span>Secretary of WEB, NUBCC</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-primary " href="https://www.facebook.com/rifatrrayhan"><i class="fab fa-facebook-f "></i></a>
                                <a class="btn btn-primary " href="https://github.com/Rifat-R-Rayhan"><i class="fab fa-github"></i></a>
                                <a class="btn btn-primary " href="https://www.linkedin.com/in/rifatrrayhan/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->



    </div>
</section><!-- End Team Section -->


<!-- ======= Team Section ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container pt-5">

                <!-- Team Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-4 mb-5">




                @foreach($members as $member)
                @if($member->is_active == 2)
                <div class="row g-4 mb-5">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    
                        <div class="team-item text-center p-4">
                            <td><img src="{{asset('uploads/images/members')}}/{{$member->image}}" class="img-fluid border rounded-circle w-75 p-2 mb-4"></td>
                            <div class="team-text">
                                <div class="team-title">
                                    
                                    <h6>{{$member->member_name}}</h6>
                                    <span>{{$member->designation}}</span>
    
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-primary " href="{{$member->fb_link}}"><i class="fab fa-facebook-f "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    <!-- Team End -->



    </div>
</section><!-- End Team Section -->


</main>
<!-- End #main -->
@endsection