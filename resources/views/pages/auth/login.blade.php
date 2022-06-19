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
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mt-5 mt-lg-0 card">
                    <form class="php-email-form card-body mt-2" action="{{ route('user.login.process') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Login</button></div>
                        <br>
                        <div class="text-center">
                        <a href="/register" class="text-black register text-center">Register </a>

                        </div>
                        
                    </form>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

@endsection
