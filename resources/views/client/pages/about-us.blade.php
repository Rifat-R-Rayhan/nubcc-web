@extends('client.layouts.masterlayout')

@section('content')
<main id="main">

<!-- ======= About Us Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ol>
        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= About Section ======= -->
<section class="about" data-aos="fade-up">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <img src="assets/img/about.jpg" class="img-fluid" alt="" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border: 4px solid rgb(1, 1, 5);">
            </div>
            <div class="col-lg-6 py-5 pt-lg-0 px-4 " style="box-shadow:rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <h4 class="py-4 ">Northern University Bangladesh Computer Club.</h3>

                    <p>

                        Welcome to the Northern University Bangladesh Cultural Club (NUBCC), the epitome of excellence
                        and artistic expression within Northern University Bangladesh. As the most prestigious and largest club
                        on campus, NUBCC is dedicated to fostering creativity, celebrating diversity, and creating a vibrant
                        cultural community.

                        <br><br>

                        <strong>A Hub of Creativity:</strong>
                        NUBCC is the creative heartbeat of the university, providing a dynamic platform for students to explore,
                        showcase, and refine their talents. Whether you're passionate about music, dance, literature, or the
                        visual arts, NUBCC offers the space and support to nurture your artistic endeavors.




                        <button class="btn btn-sm text-primary see_more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            See more...
                        </button>

                    <div class="collapse" id="collapseExample">
                        <div class="">

                            <strong>Unity in Diversity:</strong>
                            At NUBCC, we believe that cultural diversity is a strength to be celebrated. Our club brings together
                            students from various backgrounds, creating a melting pot of ideas and perspectives. Through
                            collaborative projects and events, we promote unity and understanding among our members.

                            <br><br>

                            <strong>Events:</strong>
                            Our calendar is brimming with captivating events that leave a lasting impact. From our signature Cultural
                            Fest, a kaleidoscope of performances and exhibitions, to workshops led by seasoned artists, NUBCC's events
                            inspire, entertain, and educate.

                            <br><br>

                            <strong>Inspired, Be NUBCC:</strong>
                            NUBCC isn't just a club; it's a community of passionate individuals who believe in the transformative
                            power of art and culture. Join us in shaping the cultural landscape of Northern University Bangladesh and
                            beyond.

                            <br><br>

                            Elevate your creativity, embrace diversity, and discover endless artistic possibilities with NUBCC.
                        </div>
                    </div>






                    </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section class="facts section-bg" data-aos="fade-up">
    <div class="container">

        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                <p>Memebers</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
                <p>Committee</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                <p>Events</p>
            </div>

        </div>

    </div>
</section><!-- End Facts Section -->

<!-- ======= Our Skills Section ======= -->
<section class="skills" data-aos="fade-up">
    <div class="container">

        <div class="section-title">
            <h2>Our Achivements</h2>
            <p>
                At NUBCC, excellence is our hallmark, and our members continue to prove it time and again. We take immense pride in highlighting the extraordinary achievements of our members who have not only excelled within the club but have also made a significant impact in various domains:

                <br><br>

                📚 Higher Studies Pioneers
                <br><br>

                💼 Highly Paid Job Enthusiasts
                <br><br>

                🏛️ Government Sector Trailblazers:
                <br><br>

                🚀 Entrepreneurial Innovators
                <br><br>


            </p>
        </div>

        <div class="skills-content">

            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Highly Paid Job <i class="val">70%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Higher Studies <i class="val">80%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Government Sector <i class="val">50%</i></span>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="skill">Entrepreneurship<i class="val">20%</i></span>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Our Skills Section -->



</main><!-- End #main -->
@endsection