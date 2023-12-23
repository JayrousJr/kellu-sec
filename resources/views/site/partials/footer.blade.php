<div class="site-footer">


    <div class="container">

        <div class="row">
            <div class="col-lg-5 mr-auto">
                <div class="widget">
                    <h3>About Us<span class="text-primary">.</span> </h3>
                    <p>{{config('company.about')}}</p>
                </div> <!-- /.widget -->
                <div class="widget">
                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-3 -->


            <div class="col-lg-3">
                <div class="widget">
                    <h3>Gallery</h3>
                    <ul class="instafeed instagram-gallery list-unstyled">
                        <li><a class="instagram-item" href="/assets/images/gal_1.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_1.jpg" alt="" width="72" height="72"></a>
                        </li>
                        <li><a class="instagram-item" href="/assets/images/gal_2.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_2.jpg" alt="" width="72" height="72"></a>
                        </li>
                        <li><a class="instagram-item" href="/assets/images/gal_3.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_3.jpg" alt="" width="72" height="72"></a>
                        </li>
                        <li><a class="instagram-item" href="/assets/images/gal_4.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_4.jpg" alt="" width="72" height="72"></a>
                        </li>
                        <li><a class="instagram-item" href="/assets/images/gal_5.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_5.jpg" alt="" width="72" height="72"></a>
                        </li>
                        <li><a class="instagram-item" href="/assets/images/gal_6.jpg" data-fancybox="gal"><img
                                    src="/assets/images/gal_6.jpg" alt="" width="72" height="72"></a>
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
                    </script>Designed and developed by <a href="https://cloudstechn.com/"
                        style="color:#116530">TechClouds</a>
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

</body>

</html>