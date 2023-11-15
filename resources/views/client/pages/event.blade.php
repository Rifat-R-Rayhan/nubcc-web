@extends('client.layouts.masterlayout')

@section('content')
<main id="main">


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">



        <!-- Project Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class=" text-center text-primary px-3">Our Events</h6>
                    <h4 class="display-7 mb-4">Have A Look At Our Events</h4>
                </div>
                <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

                    @php ($headings = ["Join us at NUB Computer Club - NUBCC","NUB CSE Excursion 2022","Programming Contest-2023","Team E-Biye","UNIVERSITY CYBER DRILL 2022"])
                    @php ($defines = ["Be a member of our community","NUB-CSE Released An Exceptional Day Plan","NUB CSE Intra Department Programming Contest-2023","Team NUB, became first runner-up in BDApps National Hackathon 2022","UNIVERSITY CYBER DRILL 2022"])
                    @php ($images = ["member_reg.png","group_pic.png","programming_contest.png","BD-APPS.png","cyber_nub.png"])



                    @for ($i = 0; $i < 5; $i++)
                        <div class="project-item border rounded h-100 p-0" data-dot="{{ $i+1 }}">
                            <div class="position-relative mb-4" style="height: 200px;overflow:hidden;">
                                <img class="rounded" style="height: 100%; width:auto;" src="assets/img/{{ $images[$i] }}" alt="">
                                <a href="#{{$i+1}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                            </div>
                            <div class="px-3 pb-3">
                                <h6>{{ $headings[$i] }}</h6>
                                <span>{{ $defines[$i] }}</span>
                            </div>
                            
                        </div>
                    @endfor


                </div>









                {{-- Posts --}}
                @php ($desc1 = "
                Join us at NUB Computer Club - NUBCC, where innovation knows no bounds, and the spirit of exploration reigns supreme. 

                <br><br>

                Registration Fee: 99 tk
                Bkash/Nagad: 01617756829 (Send Money)
                Rocket: 016177568295 (Send Money)

                <br><br>

                (Put your FULL Student ID as reference before sending the money. And Take TxnID ID to complete the registration.)
                <br>

                Registration Here: <a href='https://forms.gle/QqRx8yanUe853nQb8'>https://forms.gle/QqRx8yanUe853nQb8</a>
                <br><br>

                
                ")
                @php ($desc2 = "
                Students and Faculties of the Department of CSE of NUB had an outstanding day out program on 22 Oct 2022 at Angana Resort some 50 miles north of Dhaka city. 
                
                <br><br>

                This was an awesomely planned and decorated function organized by the Computer Club of CSE Department. Around 700 students and Faculties were mesmerized by the enthralling day-long program.

                <br><br>

                The honorable pro-vice-chancellor Professor Dr. Nazrul Islam was also present there and felt the joy. Nonetheless, respected Head Md. Raihan ul Masood Sir and Assistant Professor Muhammed Samsuddoha Alam Sir made the whole program a success. 
                
                ")

                @php ($desc3 = "
                We are delighted to extend our warmest congratulations to the winners of the NUB CSE Intra Department Programming Contest held on 11th April, 2023. With the participation of 29 teams, this competition was truly an impressive showcase of talent, creativity, and innovation.
                <br><br>
                Our Winner is team Say_No_To_DSA, followed by team Nub_Assassins in First Runner-Up and team Nub_Zero_Squad in Second Runner-Up.
                <br><br>
                We are proud of all the participants who made this event a success and can't wait to see what they will achieve in the future!

                
                ")


                @php ($desc4 = "
                Road to Finale, `Team NUB`, became first runner-up in the `BDApps National Hackathon 2022`.
                <br><br>

                In a highly competitive environment, their innovation and problem-solving abilities have set them apart, and we have no doubt that their success is only the beginning of a series of remarkable accomplishments. Their accomplishment not only reflects positively on your team but also on their institution, NUB, and serves as an inspiration to all aspiring tech enthusiasts.

                <br><br>

                Congratulations, Team NUB! We are excited to see your future endeavors and contributions to the world of technology.
                                
                ")

                @php ($desc5 = "
                We are pleased to announce that our team “NUBra” achieved fourth position in this year's `UNIVERSITY CYBER DRILL 2022` competition. 

                <br><br>

                This cyber drill had 58 teams registered to participate, with a total of 268 students actively participating. Students from many universities across the country competed in groups in this competition. The #NUBra team from Northern University Bangladesh came in fourth place with 4700 out of 5500 points.

                <br><br>

                We are grateful to our gifted students for their hard work and incredible accomplishments.
                                
                ")




                @php ($post_headings = ["Join us at NUB Computer Club - NUBCC","NUB CSE Excursion 2022","Programming Contest-2023","Team E-Biye","UNIVERSITY CYBER DRILL 2022"])
                @php ($post_descriptions = [$desc1,$desc2,$desc3,$desc4,$desc5])
                @php ($post_images = ["nubcc_membership.jpg","group_pic.png","programming_contest.png","BD-APPS.png","cyber_nub.png"])
                @php ($post_sections = [])



                @for ($i = 0; $i < 5; $i++)
                <section id="{{ $i+1 }}" class="mt-4">
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="img-border">
                                        <img class="img-fluid" src="assets/img/{{ $post_images[$i] }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="h-100">
        
                                        <h1 class="display-6 mb-4">#0{{ $i+1 }} {{ $post_headings[$i] }} </h1>
                                        {{-- <p>{{ e($post_descriptions[$i]) }}</p> --}}
                                        <p>{!! addcslashes($post_descriptions[$i], '"') !!}</p>
                                        
                                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endfor
                


                 {{-- <!-- About Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="img-border">
                                    <img class="img-fluid" src="assets/img/n4.jpeg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="h-100">
                                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                                    <h1 class="display-6 mb-4">#1 Digital Solution With <span class="text-primary">10 Years</span> Of Experience</h1>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                                    <div class="d-flex align-items-center mb-4 pb-2">
                                        <img class="flex-shrink-0 rounded-circle" src="img/team-1.jpg" alt="" style="width: 50px; height: 50px;">
                                        <div class="ps-4">
                                            <h6>Jhon Doe</h6>
                                            <small>SEO & Founder</small>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- About End -->











            </div>
        </div>
        <!-- Project End -->
</section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection