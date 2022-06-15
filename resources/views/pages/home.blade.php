@extends('layout.master')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div>
            {{-- SHOWING SUCCESS MESSAGE --}}
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <div class="container position-relative">
            <p class="text-white text-center">Truly know your Medicine before you take them.</p>
            <div class="row">
                <input class="medipedia-search" placeholder="medipedia search" type="search" id="search" />
                <ul id="searchData" class="col-md-12 d-flex justify-content-center"></ul>
            </div>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2><strong>Latest Articles </strong></h2>
            </div>

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper" id="articlesSlider">
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Technology Section ======= -->
    <section id="courses" class="courses">
        <div class="container">
            <div class="section-title">
                <h2><strong>Dive into the latest healthcare
                        technology... </strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/r3.webp') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Article-1 </h4>
                            </div>
                            <p>AI in Healthcare needed to bring real, actionable insights and Individualized insights in
                                real time for patients and Doctors to support treatment decisions., We need a Patient
                                Centred Platform for integrating EHR Data, Patient Data, Prescriptions, Monitoring, Clinical
                                research and Data.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Remote Healthcare</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/r2.jpeg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Article-2</h4>
                            </div>
                            <p>Tag line: Abdominal adipose tissue and liver fat imaging in very low birth weight adults born
                                preterm: birth cohort with sibling-controls.<br />
                                Preterm birth at very low birth weight (VLBW, < 1500 g) is associated with an accumulation
                                    of cardiovascular and metabolic risk factors from childhood at least to middle age.
                                    Small-scale studies suggest that this could partly be explained by increased visceral or
                                    ectopic . </p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <span>Latest Medical Research</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center">
                                            <i class="bx bx-user"></i>&nbsp;50
                                            &nbsp;&nbsp;
                                            <i class="bx bx-heart"></i>&nbsp;65
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/r1.jpeg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Article-3</h4>
                            </div>
                            <p>Tag line: The role of artificial intelligence in learning and professional development for
                                healthcare professionals .<br />

                                This article discusses the emerging role of Artificial Intelligence (AI) in the learning and
                                professional development of healthcare professionals. It provides a brief history of AI,
                                current and past applications in healthcare education and training, and discusses why and
                                how health leaders can revolutionize education system practices using AI in healthcare
                                education.
                            </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Role of AI in Healthcare</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/r4.jpeg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Article-4</h4>
                            </div>
                            <p> Tag line: The evolution of robotic surgery: surgical and anaesthetic aspects. <br/>

                                Robotic surgery pushes the frontiers of innovation in healthcare technology towards improved clinical outcomes. We discuss the evolution to five generations of robotic surgical platforms including stereotactic, endoscopic, bioinspired, microbots on the millimetre scale, and the future development of autonomous systems. We examine the challenges, obstacles and limitations of robotic surgery and its future potential including integrated real-time anatomical and immune-histological imaging and data assimilation with improved visualisation, haptic feedback and robot-surgeon interactivity. We consider current evidence, cost-effectiveness and the learning curve in relation to the surgical and anaesthetic journey, and what is required to continue to realise improvements in surgical operative care
                                </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Robotic Healthcare Evolution</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/r3.jpeg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Article-5</h4>
                            </div>
                            <p>Paradigm of IoT big data analytics in the healthcare industry: A review of scientific
                                literature and mapping of research trends

                                Tag line: Health informatics and telematics have been drastically influenced by big data of
                                IoT devices. In this paper, we conducted a review of scientific literature and mapping of
                                research trends on IoT Big Data Analytics paradigm (IoTBDA) in healthcare industry. The goal
                                is to identify how the IoT BDA paradigm has impacted the design, development, and
                                application of IoT based innovations in healthcare services. We conducted a qualitative and
                                quantitative review of 46 papers on IoTBDA, and a quantitative review of 84 papers on fog
                                computing in the healthcare industry. This study shows that IoT BDA has impacted the
                                acquisition, storage, retrieval, and use of information in healthcare industry.
                                Consequently, three derivers of IoT BDA convergence are identified. The first driver is
                                computing; which is emerged as a response to reduce data congestion and inefficiencies of
                                emergency systems. As the co-word analysis shows, issues such as security, privacy and data
                                transfer are dominant scientific topics within the domain of fog computing.
                            </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>IoT in the Healthcare Industry </span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Technology Section -->
@endsection

{{-- <img src="${d.image}" height=50 width=50> --}}
@push('scripts')
    <script>
        $(document).ready(function() {
            function search(val) {
                $.ajax({
                    url: "{{ route('client.medicines') }}",
                    type: "GET",
                    data: {
                        name: val,
                    },
                    success: function(response) {
                        $("#searchData").html('');
                        if (response.length != 0) {
                            $.each(response, function(i, d) {
                                $("#searchData").append(
                                    `<li class="searchli w-100"><a href='{{ route('client.medicine') }}?id=${d.id}' class="text-center">${d.name}</a></li>`
                                );
                            });
                        } else {
                            $("#searchData").append(`<li class="sorry w-50">No Match Found</li>`);
                        }

                        if (val.length == 0) {
                            $("#searchData").html('');
                        }

                    },
                    error: function() {
                        alert('Something Went Wrong');
                    }
                });
            }

            $('#search').keyup(function() {
                search($(this).val());
            });

            // ARTICLES

            function articles() {
                $.ajax({
                    url: "{{ route('articles') }}",
                    type: "GET",
                    success: function(response) {
                        $.each(response, function(i, d) {
                            $("#articlesSlider").append(
                                `<div class="swiper-slide">
                        <div class="card">
                            <div class="card-header">
                                <h3>${d.name}</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ request()->root() }}/${d.image}"
                                            class="img-fuild" style="width:100%;" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        ${d.description}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`
                            );
                        });

                    },
                    error: function() {
                        alert('Something Went Wrong');
                    }
                });
            }
            articles();

        });
    </script>
@endpush
