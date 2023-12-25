@include('/site/partials/header')

<div class="untree_co-hero overlay" style="background-image: url('/assets/images/img-school-6-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">News</h1>
                    </div>
                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->




<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row align-items-stretch">
            @foreach($news as $data)
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="media-h d-flex h-100">
                    <figure>
                        <img src="/storage/{{$data->news_image}}" alt="Image">
                    </figure>
                    <div class="media-h-body">
                        <h2 class="mb-3">{{$data->news_title}}</h2>
                        <div class="meta "><span class="icon-calendar mr-2"></span><span>{{date('M, d Y ',strtotime($data->created_at))}}</span>
                            <span class="icon-person mr-2"></span>{{$data->publisher}}
                        </div>
                        <p>{!!$data->news_body!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.untree_co-section -->

@include('/site/partials/footer')