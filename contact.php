<?php
$page = 'contact';
include ('./components/header.php');
include ('./components/navbar.php');
?>

 <section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('https://i.imgur.com/tgxAkUw.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5 mb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="\">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Contact</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  <div class="container">
   <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Contact us</span>
      <h2 class="mb-4">SEND US A MESSAGE</h2>
      <p>Give us a call or drop by anytime, we endeavour to answer all questions within 24 hours on business days.</p>
    </div>
  </div>

  <div class="row block-9">
    <div class="col-md-8">
      <form action="#" class="p-4 p-md-5 contact-form">
       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Subject">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
        </div>
      </div>
    </div>
  </form>
  
</div>

<div class="col-md-4 d-flex pl-md-5">
 <div class="row">
   <div class="dbox w-100 d-flex ftco-animate">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-map-marker"></span>
   </div>
   <div class="text">
     <p><span>Address:</span> KM 5 East West Road, IIHT Building, Port Harcourt, Rivers State.</p>
   </div>
 </div>
 <div class="dbox w-100 d-flex ftco-animate">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-phone"></span>
 </div>
 <div class="text">
   <p><span>Phone:</span> <a href="#">09036178100, 08038723094</a></p>
 </div>
</div>
<div class="dbox w-100 d-flex ftco-animate">
  <div class="icon d-flex align-items-center justify-content-center">
   <span class="fa fa-paper-plane"></span>
 </div>
 <div class="text">
   <p><span>Email:</span> <a href="mailto:info@octraxgroup.com">info@octraxgroup.com</a></p>
 </div>
</div>
</div>
</div>
<div class="col-md-12">
 <div id="map" class="map"></div>
</div>
</div>
</div>
</section>	

<?php include('./components/footer.php'); ?>