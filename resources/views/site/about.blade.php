@include('/site/partials/header')
<div class="untree_co-hero overlay" style="background-image: url('/assets/images/img-school-1-min.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center ">
                    <div class="col-lg-6 text-center ">
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">About Us</h1>
                        <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                        </div>
                    </div>


                </div>

            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div> <!-- /.untree_co-hero -->


<div class="untree_co-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">School Administrative Team</h2>
            </div>
        </div>
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


            <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
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




<div class="untree_co-section">


    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                <img src="/assets/images/img-school-5-min.jpg" alt="image" class="img-fluid">
            </div>
            <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <h3 class="line-bottom mb-4">About the School</h3>
                <p>Kellu Hill Secondary School is an ordinary level (O'Level), day and boarding School for both boys and
                    girls from Form One to form Four. </p>

                <div class="custom-accordion" id="accordion_1">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">School History</button>
                        </h2>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="/assets/images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>Kellu hill secondary School was Established in 2010, and is Located at
                                            {{config('company.address.street')}} in {{config('company.address.city')}}.
                                        </p>
                                        <p>The School has grown up and is now among of the best schools in Tanzania. At
                                            Kellu hisgh School we Take students of all Religions and every student has
                                            the right to worship according to the Government Laws.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">School
                                Mission</button>
                        </h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="/assets/images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>Provision of quality education through high committed teachers, disciplined
                                            students and thge workers conductive teaching and learning environment,
                                            Promotionof high moral and spiritual values and good governance </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">School
                                Vision</button>
                        </h2>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="/assets/images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>{{env('APP_NAME')}} Vision in to reach the best level og education proviosn
                                            that will build the student to solve the society issues. A school with
                                            examplary academic excellence.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- .accordion-item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">School
                                Motto</button>
                        </h2>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                            <div class="accordion-body">
                                <div class="d-flex">
                                    <div class="accordion-img mr-4">
                                        <img src="/assets/images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                                    </div>
                                    <div>
                                        <p>Education for bright Future</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->

@include('/site/partials/footer')