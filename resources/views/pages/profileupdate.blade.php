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
                    <h1 class="text-center">Profile Update</h1>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mt-5 mt-lg-0 card">
                    {{-- <div class="text-center">
                        <br>
                        <img src="{{ asset('./assets/img/mad.webp') }}" class="rounded" alt="...">
                    </div> --}}
                    <div class=" offset-md-2 col-md-8 offset-md-2 ">
                        <div class=" text-center"><img class="rounded-circle" width="50%"
                                src="{{ asset('./assets/img/mad.webp') }}">
                            <div class="col-sm-12 text-center ">
                                <div class="image-upload ">
                                    <label for="file-input" class="upload btn-sm mb-0">
                                        <span>Upload Picture</span>
                                    </label>
                                    <input id="file-input" type="file" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required value="{{ old('name') }}">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required value="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="subject" placeholder="Password"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password_confirmation" id="subject"
                            placeholder="Password Confirm" required>
                        <div class="text-danger"></div>
                    </div>
                    <br>
                    <div class="text-center"><button type="submit">Update</button></div>
                    <br>
                    </form>

                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
@endsection
