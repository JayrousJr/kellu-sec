@include('/site/partials/header')

@if(session('success'))
<div class="success" id="fade">
    {{@session('success')}}
</div>
@endif
@if(session('error'))
<div class="error" id="fade">
    {{@session('error')}}
</div>
@endif

<div class="untree_co-hero overlay" style="background-image: url('/assets/images/img-school-2-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <p>Do you have any Questions?, Do you want some clarification, Do not hesitate to ask
                                anything,we will be ready to anser all the questions here! </p>
                        </div>
                    </div>


                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->




<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">

                    <div class="address mt-4">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">Location:</h4>
                        <p>{{config('company.address.street')}} {{config('company.address.city')}},
                            {{config('company.address.country')}}
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">Email:</h4>
                        <p><a href="mailto:{{config('company.email')}}">{{config('company.email')}}</a></p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">Call:</h4>
                        <p><a href="tel://{{config('company.phone1')}}">{{config('company.phone1')}}</a></p>
                        <p><a href="tel://{{config('company.phone2')}}">{{config('company.phone2')}}</a></p>
                        <p><a href="tel://{{config('company.phone3')}}">{{config('company.phone3')}}</a></p>
                        <p><a href="tel://{{config('company.phone4')}}">{{config('company.phone4')}}</a></p>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 mr-auto order-1" id="contacts" data-aos="fade-up" data-aos-delay="200">
                <form action="{{route('send')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Your Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="message" cols="30" rows="7"
                                class="form-control @error('message') is-invalid @enderror"
                                placeholder="Enter your Message"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div> <!-- /.untree_co-section -->

@include('/site/partials/footer')