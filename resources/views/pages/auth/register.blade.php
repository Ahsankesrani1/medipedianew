@extends('layout.master')
@section('content')
    <section id="contact" class="contact mt-5">
        <div class="container">
            <div class="mt-5">
                {{-- SHOWING SUCCESS MESSAGE --}}
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                {{-- SHOWING ERRORS --}}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

            </div>
            <div class="row mt-5">
                <div class="section-title">
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mt-5 mt-lg-0 card">
                    <div class="text-center">
                        <br>
                        <img src="{{ asset('./assets/img/mad.webp') }}" class="rounded" alt="...">
                      </div>
                    <form class="php-email-form card-body mt-2" action="{{ route('user.store.process') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password" id="subject"
                                placeholder="Password" required>
                            @if ($errors->has('password'))
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password_confirmation" id="subject"
                                placeholder="Password Confirm" required>
                            @if ($errors->has('password_confirmation'))
                                <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">Register</button></div>
                    </form>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
@endsection
