@extends('client.layouts.masterlayout')

@section('content')
<main id="main">


<!-- ======= Courses Section ======= -->
<section id="blog" class="blog">
   

        <!-- Project Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="text-center text-primary px-3">Courses</h6>
                    <h4 class="display-7 mb-4">Explore Our Exciting Courses</h4>
                </div>






                

                @php ($desc1 = "
                Learning programming offers a wide array of benefits and holds significant importance in today's digital age.<br> 
                Here are some key reasons why learning programming is valuable:

                <br><br>

                    Problem-Solving Skills, Creativity and Innovation, Career Opportunities <br>

                    Critical Thinking, Automation and Efficiency, Digital Literacy <br>

                    Adaptability, Personal Projects, Collaboration and Communication <br>

                    Understanding Algorithms, Future-Proofing, Analytical Skills <br><br>
                ")





                @php ($post_headings = ["Programming - C, C++, C#, Java, JavaScript, Python, PHP","APPS Development","Web Design & Development","Software Development","Cyber Security","AI & Machine Learning"])
                @php ($post_descriptions = [$desc1,$desc1,$desc1,$desc1,$desc1,$desc1])
                @php ($post_images = ["programming.png","apps.png","web.png","software.jpg","cyber.jpg","ai.jpg"])




                @for ($i = 0; $i < 6; $i++)
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
                










     









            </div>
        </div>
        <!-- Project End -->
</section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection