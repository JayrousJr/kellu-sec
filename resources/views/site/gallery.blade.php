@include('/site/partials/header')


<div class="untree_co-hero overlay" style="background-image: url('/assets/images/img-school-4-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Gallery</h1>
                    </div>


                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->




<div class="untree_co-section">
    <div class="container">
        <div class="row">
            @foreach($gallery->chunk(4) as $group)
            <div class="col-md-6 col-lg-4 item">
                @foreach($group as $data)
                <a href="/storage/{{$data->image_path}}" class="item-wrap fancybox mb-4" data-fancybox="gal" data-aos="fade-up" data-aos-delay="0">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="/storage/{{$data->image_path}}">
                </a>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.untree_co-section -->

@include('/site/partials/footer')