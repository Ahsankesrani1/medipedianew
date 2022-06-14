@extends('layout.master')
@section('content')
<section id="contact" class="contact mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="section-title">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8 mt-5 mt-lg-0 card">
                <form class="php-email-form card-body mt-2">
                    <div class="row">
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit">Login</button></div>
                </form>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

@endsection