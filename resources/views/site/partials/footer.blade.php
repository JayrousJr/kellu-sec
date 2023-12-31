<div class="site-footer">


    <div class="container">

        <div class="row">
            <div class="col-lg-6 mr-auto">
                <div class="widget">
                    <h3>About Us<span class="text-primary">.</span> </h3>
                    <p>{{config('company.about')}}</p>
                </div> <!-- /.widget -->
                <div class="widget">
                    <h3>Our Social Network</h3>
                    <ul class="list-unstyled social">
                        @foreach($social as $data)
                        <li><a href="{{$data->link}}"><span class="icon-{{$data->icon}}"></span></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-lg-2">
                <div class="widget">
                    <h3>Logo</h3>
                    <ul class="instafeed instagram-gallery list-unstyled">
                        <li><img src="/storage/logo/logo.png" alt="School Logo" width="144" height="auto">
                        </li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>{{config('company.address.street')}} {{config('company.address.city')}},
                        {{config('company.address.country')}}
                    </address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://{{config('company.phone1')}}">{{config('company.phone1')}}</a></li>
                        <li><a href="tel://{{config('company.phone2')}}">{{config('company.phone2')}}</a></li>
                        <li><a href="tel://{{config('company.phone3')}}">{{config('company.phone3')}}</a></li>
                        <li><a href="tel://{{config('company.phone4')}}">{{config('company.phone4')}}</a></li>
                        <li><a href="mailto:{{config('company.email')}}">{{config('company.email')}}</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->

        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">
                <p>Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>Designed and developed by <a href="https://cloudstechn.com/">TechClouds</a>
                    <!-- License information: https://untree.co/license/ -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.animateNumber.min.js"></script>
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/jquery.fancybox.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/custom.js"></script>
<script>
    $(document).ready(function() {
        //hide the notification after 2seconds  
        setTimeout(function() {
            $("#fade").fadeOut('slow');
        }, 5000);
    });
</script>
</body>

</html>