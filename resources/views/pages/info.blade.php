@extends('layout.master')
@section('content')
    <section class="d-flex justify-content-center align-items-center">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p id="descriptionOne">
                            </p>
                            {{-- <p class="card-text">
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img class="img-fuild" id="medicineImg" alt="Medicine Image" height="500" width="500">
                </div>
                <div class="col-md-4">
                    <iframe id="videoFrame" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p id="descriptionTwo">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= pharmist Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Reviews by Famous Pharmacists</h2>
            </div>

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p1.webp') }}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p2.jpg') }}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p3.jpg') }}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('./assets/img/p4.jpg') }}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End pharmist Section -->

    <section>
<div class=""></div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            function getData() {
                $.ajax({
                    url: "{{ route('client.medicine.show') }}",
                    type: "GET",
                    data: {
                        id: "{{ request()->id }}",
                    },
                    success: function(response) {
                        $('#descriptionOne').html(response.description_one).text();
                        $('#descriptionTwo').html(response.description_two).text();
                        $("#medicineImg").attr("src", "{{ request()->root() }}/" + response.image);
                        $("#videoFrame").attr("src", response.video_link);
                    },
                    error: function() {
                        alert('Id Does Not Exists');
                        history.go(-1);
                    }
                });
            }
            getData();
        });
    </script>
@endpush
