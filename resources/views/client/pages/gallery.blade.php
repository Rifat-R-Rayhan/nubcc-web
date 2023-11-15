@extends('client.layouts.masterlayout')

@section('content')
<main id="main">


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">



        <!-- Project Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class=" text-center text-primary px-3">Our Albums</h6>
                    <h4 class="display-7 mb-4">Have A Look At Our Albums</h4>
                </div>
                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @php ($headings = ["BDApps NATIONAL Hackathon ","MOU Signing Ceremony ","BDApps NATIONAL Hackathon","Saint Martin Tour 2022"])
                    @php ($defines = ["Team NUB, became first runner-up in BDApps National Hackathon 2022","Signing moment","Victory time for our students and honorable teachers","Think clean and save the St. Martin"])
                    @php ($images = ["bdapps.jpg","mou_signing_bdapps.jpg","bd_apps2.jpg","st_martin22.JPG"])



                    @for ($i = 0; $i < 4; $i++)
                        <div class="project-item border rounded h-100 p-0" data-dot="{{ $i+1 }}">
                            <div class="position-relative mb-4" style="height: 200px;overflow:hidden;">
                                <img class="rounded" style="height: 100%; width:auto;" src="assets/img/album/{{ $images[$i] }}" alt="">
                            </div>
                            <div class="px-3 pb-3">
                                <h6>{{ $headings[$i] }}</h6>
                                <span>{{ $defines[$i] }}</span>
                            </div>
                            
                        </div>
                    @endfor


                </div>

                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @php ($headings = ["Join us at NUB Computer Club - NUBCC","NUB CSE Excursion 2022","Programming Contest-2023","Team E-Biye"])
                    @php ($defines = ["Be a member of our community","NUB-CSE Released An Exceptional Day Plan","NUB CSE Intra Department Programming Contest-2023","Team NUB, became first runner-up in BDApps National Hackathon 2022"])
                    @php ($images = ["member_reg.png","group_pic.png","programming_contest.png","BD-APPS.png"])



                    @for ($i = 0; $i < 4; $i++)
                        <div class="project-item border rounded h-100 p-0" data-dot="{{ $i+1 }}">
                            <div class="position-relative mb-4" style="height: 200px;overflow:hidden;">
                                <img class="rounded" style="height: 100%; width:auto;" src="assets/img/{{ $images[$i] }}" alt="">
                            </div>
                            <div class="px-3 pb-3">
                                <h6>{{ $headings[$i] }}</h6>
                                <span>{{ $defines[$i] }}</span>
                            </div>
                            
                        </div>
                    @endfor


                </div>

                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @php ($headings = ["Meet Up","Robotics ","Shuttle Championship","Saint Martin Tour 2019"])
                    @php ($defines = ["NUB CSE organizes this program","Robotics devices are being monitored.","NUB CSE organizes the shuttle championship","Think Clean and Save The St. Martin"])
                    @php ($images = ["meet_up.jpg","robotics.jpg","shuttle.jpg","st_martin19.jpg"])



                    @for ($i = 0; $i < 4; $i++)
                        <div class="project-item border rounded h-100 p-0" data-dot="{{ $i+1 }}">
                            <div class="position-relative mb-4" style="height: 200px;overflow:hidden;">
                                <img class="rounded" style="height: 100%; width:auto;" src="assets/img/album/{{ $images[$i] }}" alt="">
                            </div>
                            <div class="px-3 pb-3">
                                <h6>{{ $headings[$i] }}</h6>
                                <span>{{ $defines[$i] }}</span>
                            </div>
                            
                        </div>
                    @endfor

                </div>

                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @php ($headings = ["Champions"])
                    @php ($defines = ["Champions:CSE Vikings, indoor cricket tournament"])
                    @php ($images = ["cricket.jpg"])



                    @for ($i = 0; $i < 1; $i++)
                        <div class="project-item border rounded h-100 p-0" data-dot="{{ $i+1 }}">
                            <div class="position-relative mb-4" style="height: 200px;overflow:hidden;">
                                <img class="rounded" style="height: 100%; width:auto;" src="assets/img/album/{{ $images[$i] }}" alt="">
                            </div>
                            <div class="px-3 pb-3">
                                <h6>{{ $headings[$i] }}</h6>
                                <span>{{ $defines[$i] }}</span>
                            </div>
                            
                        </div>
                    @endfor


                </div>
            </div>
        </div>
        <!-- Project End -->
</section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection