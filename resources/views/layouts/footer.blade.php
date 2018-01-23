<!-- News-->
<!-- News-->
<section id="news" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown text-center">
       <h2 class="heading heading_space"><span>Current </span> Market Update <span class="divider-center"></span></h2>
      </div>
    </div>
    <div class="row">
  <ul class="list-inline">
      <li>
          <a href="https://www.nseindia.com" target="_blank">  <img src="{{ asset('storage/assets/images/nse.jpg')}}"> </a>
      </li>
       <li>
          <a href="https://www.marketwatch.com" target="_blank">  <img src="{{ asset('storage/assets/images/marketwatch.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.investing.com" target="_blank">  <img src="{{ asset('storage/assets/images/investing.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.www.moneycontrol.com" target="_blank"> <img src="{{ asset('storage/assets/images/moneycontrol.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.mcxcontrol.com" target="_blank">  <img src="{{ asset('storage/assets/images/mcx.jpg')}}"></a>
      </li>
      <li>
          <a href="https://www.cnbc.com" target="_blank"> <img src="{{ asset('storage/assets/images/cnbc.jpg')}}"> </a>
      </li>
      </ul>
    </div>
  </div>
</section>


<!--FOOTER-->
<footer class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
        <a href="{{url('/')}}" class="footer_logo bottom25" style="font-size:x-large">

        <img src="{{ asset('storage/images/onlylogo.png')}}"  style="height: 50px; width: 50px; position: relative;top: -10px" alt="Xwin">Prestige Research</a>
        <p>Welcome to Research Infotech, We have been known for serving our customers with atmost care and dedication. Our motto has been always aligned with "Delivering Quality Services" and "Customer Satisfaction".</p>
        <ul class="social_icon top25">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#." class="dribble"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#." class="instagram"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#." class="vimo"><i class="fa fa-vimeo"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
        <ul class="links">
          <li><a href="{{url('/')}}"><i class="fa fa-right"></i>Home</a></li>
          <li><a href="{!! url('about')!!}"><i class="fa fa-right"></i>About Company</a></li>
          <li><a href="{!! url('services')!!}"><i class="fa fa-right"></i>Services</a></li>
          <li><a href="{!! url('contact')!!}"><i class="fa fa-right"></i>Contact Us</a></li>
          <li><a href="{{url('free-trial')}}"><i class="fa fa-right"></i>Free Trial</a></li>
          <li><a href="{!! url('payment')!!}"><i class="fa fa-right"></i>Payment</a></li>
          <li><a href="{!! url('pricing')!!}"><i class="fa fa-right"></i>Pricing</a></li>
          @foreach($pageMenu as $val)
          <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
         @endforeach
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
        <p class=" address" style="float: left;"><i class="fa fa-map-marker" aria-hidden="true"></i>{!! $company_address !!}</p>
        <p class=" address"><i class="fa fa-phone" aria-hidden="true"></i>{!! $contact_number !!}</p>
         <img src="{{ asset('storage/assets/images/footer-map.png')}}" class="img-responsive">
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; {{date('Y')}} <a href="#.">Prestige Research</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->



<script src="{{ asset('public/assets/js/jquery-2.2.3.js')}}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/assets/js/bootsnav.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.appear.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-countTo.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{ asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.matchHeight-min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('public/assets/js/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('public/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('public/assets/js/functions.js')}}"></script>
 <script> 
        $(function () {
            $('body').show();
        }); // end ready
        </script>  
</body>
</html>