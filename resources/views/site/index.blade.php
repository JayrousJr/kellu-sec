@include('/site/partials/header')


<div class="owl-single owl-carousel no-nav">
    @foreach($carousel as $data)
    <div class="untree_co-hero overlay" style="background-image: url('/storage/{{$data->image}}');">

        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-12">

                    <div class="row justify-content-center ">

                        <div class="col-lg-6 text-center ">
                            <!-- <a href="#" href="https://vimeo.com/342333493" data-fancybox data-aos="fade-up"
                            data-aos-delay="0" class="caption mb-4 d-inline-block">Watch the video</a> -->

                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">
                                {!!$data->caption!!}</h1>
                            <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="{{route('contact')}}" class="btn btn-secondary">Have any question(s)?</a></p>

                        </div>
                    </div>

                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.untree_co-hero -->
    @endforeach
</div>



<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">School Population</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                <a href="#" class="category d-flex align-items-start h-100">
                    <div>
                        <i class="uil uil-users-alt"></i>
                    </div>
                    <div>
                        <h3>Students</h3>
                        <span>303 students</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="category d-flex align-items-start h-100">
                    <div>
                        <i class="uil uil-briefcase"></i>
                    </div>
                    <div>
                        <h3>Teaching Staff</h3>
                        <span>30 staff</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="category d-flex align-items-start h-100">
                    <div>
                        <i class="uil uil-wheel-barrow"></i>
                    </div>
                    <div>
                        <h3>Non-teaching staff</h3>
                        <span>12 workers</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="category d-flex align-items-start h-100">
                    <div>
                        <i class="uil uil-sitemap"></i>
                    </div>
                    <div>
                        <h3>Classess</h3>
                        <span>4 classes</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>


<div class="untree_co-section bg-light" id="results">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Our Results</h2>
                <p>Vie the summary of our students results for all years, you can also view more in NECTA results
                    platform.</p>
            </div>
        </div>

        <div class="row">

            <!-- form four -->
            @foreach($form_two as $data)
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="00">
                <div class="pricing">
                    <!-- <div class="pricing-img mb-4"><img src="/assets/images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
                    <div class="results-body">
                        <div class="price"><span class="mb-4">Form Two Results</span><span> -
                                {{date('Y',strtotime($data->year))}}</span>
                        </div>
                        <p class="mb-4">Division One: {{$data->div_one}} <br>Division Two: {{$data->div_two}}
                        </p>

                        <p><a href="#" aria-label="close" data-toggle="modal" data-target="#viewformtwo" class="btn btn-outline-primary">View in Other Previous
                                years</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- form four -->
            @foreach($form_four as $data)
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6" data-aos="fade-up" data-aos-delay="00">
                <div class="pricing">
                    <!-- <div class="pricing-img mb-4"><img src="/assets/images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
                    <div class="results-body">
                        <div class="price"><span class="mb-4">Form Four Results</span><span> -
                                {{date('Y',strtotime($data->year))}}</span>

                        </div>
                        <p class="mb-4">Division One: {{$data->div_one}} <br>Division Two: {{$data->div_two}}
                        </p>

                        <p><a href="#" aria-label="close" data-toggle="modal" data-target="#viewformfour" class="btn btn-outline-primary">View in Other Previous
                                years</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div> <!-- /.untree_co-section -->



<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
                <p>At Kellu Hill Secondary School we offer a variety of studies to our students, any student can study
                    any subjects he/she wants from our school. explore what we offer to our students.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature">
                    <span class="uil uil-flask"></span>
                    <h3>Science Class</h3>
                    <p>Best teachers for science subjects, including Physics, Chemistry and Biology. We also have best
                        Laboratory for Practical works.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature">
                    <span class="uil uil-pen"></span>
                    <h3>Art Class</h3>
                    <p>Best Art teachers for students to learn the Art subjects, we have the best Library and books for
                        more personal studies for our students.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature">
                    <span class="uil uil-briefcase"></span>
                    <h3>Business Class</h3>
                    <p>Best teachers for business studies, students learn more on how to handle business and records,
                        also Library for more personal studies.</p>
                </div>
            </div>


            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature">
                    <span class="uil uil-book-alt"></span>
                    <h3>Private Candidates</h3>
                    <p>We also have Private Candidates programs to help the students under Private Candidate Category,
                        Best Environment to archieve your goal.</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature">
                    <span class="uil uil-history"></span>
                    <h3>Qualifying Tests (QT)</h3>
                    <p>Kellu Hill Secondary School is the center for Qualifying Test examinations, we provide best
                        environment for you to reach your goals</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature">
                    <span class="uil uil-plus"></span>
                    <h3>Pre Form One Courses</h3>
                    <p>Pre form one Courses are also provided for your kid, we have the best teachers to enlight your
                        kid about the secondary education students.</p>
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.untree_co-section -->


<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">School Clubs</h2>
                <p>To encourage our students in their studies and wake them up for new ideas, we have school clubs to
                    help them learn alot.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="/assets/images/ab5.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>All levels</span>
                            </div>
                            <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
                        </div>
                        <h3>Science Club</h3>
                        <p class="mb-4">Brings Science students together, make them creative and learn about new ideas
                            in science studies..
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="/assets/images/ab6.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>All students</span>
                            </div>
                            <div class="review"><span class="icon-star"></span> <span>5.0</span></div>
                        </div>
                        <h3>Art Clubs</h3>
                        <p class="mb-4">Art is not just for studying but for practicing, Our students learn creativity
                            from art club.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="custom-media">
                    <a><img src="/assets/images/ab7.jpg" alt="Image" class="img-fluid"></a>
                    <div class="custom-media-body">
                        <div class="d-flex justify-content-between pb-3">
                            <div class="text-primary"><span class="uil uil-book-open"></span> <span>All levels</span>
                            </div>
                            <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
                        </div>
                        <h3>Business Club</h3>
                        <p class="mb-4">Business students meet together to learn more and discover more
                            about what they can learn, exposure too.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('/assets/images/bg-01.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-7">
                <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Bright Future</h2>
                <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">At {{env('APP_NAME')}}, we care
                    about your student's performance as we are determined to make up a tomorrow leader. We strive to
                    build the mind of the students not only in education matters but also in society matters so that the
                    student will not run from the society problems instead to solve them. You can check out our results
                    summary here.
                </p>
                <p><a href="#results" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">view results</a>
                </p>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 mb-5">
                <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
                <p data-aos="fade-up" data-aos-delay="100">Kellu Hill Secondary school is a boarding a day school for
                    both gender students, girls and boys, from form one to form four. The dchool is located in Morogoro
                    at Mkimba district, the environment is very condusive for learning.</p>
                <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                    <li>Best teachers for all subjects</li>
                    <li>Laboratory for science students.</li>
                    <li>Learning Books in Library For all students</li>
                    <li>Best Meal for boarding students</li>
                </ul>

                <div class="row count-numbers mb-5">
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
                        <span class="caption-2">No. Students</span>
                    </div>
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <span class="counter d-block"><span data-number="49">0</span><span></span></span>
                        <span class="caption-2">No. Teachers</span>
                    </div>
                    <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <span class="counter d-block"><span data-number="12">0</span><span></span></span>
                        <span class="caption-2">No. Awards</span>
                    </div>
                </div>

                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('about')}}" class="btn btn-outline-primary">See More</a>
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-1"></div>
                <img src="/assets/images/ab1.jpg" alt="Image" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->

<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">School News</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            @foreach($news as $data)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="media-h d-flex h-100">
                    <figure>
                        <img src="/storage/{{$data->news_image}}" alt="Image">
                    </figure>
                    <div class="media-h-body">
                        <h2 class="mb-3">{{$data->news_title}}</h2>
                        <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>{{date('M, d Y ',strtotime($data->created_at))}}</span>
                            <span class="icon-person mr-2"></span>{{$data->publisher}}
                        </div>
                        <p>{!!$data->news_body!!}</p>
                        <!-- <p><a href="#">Learn More</a></p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- /.untree_co-section -->




<!-- Form two necta Result Modal -->

<div class="modal" id="viewformtwo" role="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Form Two Necta Results</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body bg-light">
                <table class="table-striped table-bordered table table-auto">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Scores</th>
                            <th>Necta Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($form_two_all as $data)
                        <tr>
                            <td>{{date('Y', strtotime($data->year))}}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li>Division One - {{$data->div_one}}</li>
                                    <li>Division Two - {{$data->div_two}}</li>
                                    <li>Division Three - {{$data->div_three}}</li>
                                </ul>
                            </td>
                            <td><a href="{{$data->necta_link}}" class="btn btn-outline-primary" target="_blank">view
                                    More</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Form four necta Result Modal -->

<div class="modal" id="viewformfour" role="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Form Four Necta Results</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body bg-light">
                <table class="table-striped table-bordered table table-auto">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Scores</th>
                            <th>Necta Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($form_four_all as $data)
                        <tr>
                            <td>{{date('Y', strtotime($data->year))}}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li>Division One - {{$data->div_one}}</li>
                                    <li>Division Two - {{$data->div_two}}</li>
                                    <li>Division Three - {{$data->div_three}}</li>
                                </ul>
                            </td>
                            <td><a href="{{$data->necta_link}}" class="btn btn-outline-primary" target="_blank">view
                                    More</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <a class="btn btn-primary float-left" href=" route('login') ">Log in</a>
                <a class="btn btn-primary float-right" href=" url('/register') ">Register</a> -->
            </div>
        </div>
    </div>
</div>

@include('/site/partials/footer')