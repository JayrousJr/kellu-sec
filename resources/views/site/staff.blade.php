@include('/site/partials/header')


<div class="untree_co-hero overlay" style="background-image: url('/assets/images/img-school-3-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">School Staff</h1>
                    </div>
                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->

<div class="untree_co-section bg-light">
    <div class="container">

        <div class="row">
            @foreach($staff as $data)
            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="staff text-center">
                    <div class="mb-4"><img src="/storage/{{$data->profile_photo_path}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="staff-body">
                        <h3 class="staff-name">{{$data->name}}</h3>
                        <span class="d-block position mb-4">{{$data->role}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.untree_co-section -->

<div class="site-footer">
    @include('/site/partials/footer')