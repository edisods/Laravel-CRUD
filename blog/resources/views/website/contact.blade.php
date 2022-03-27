@extends('layouts.website')
  
@section('content')

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_4.jpg');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="post-entry text-center">
            <h1 class="">Contact Us</h1>
            <p class="lead mb-4 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, adipisci?</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">

          

          <form action="#" class="p-5 bg-white">
          

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="email">Email</label> 
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label> 
                <input type="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-md-5">
          
          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

          </div>

        </div>
      </div>
    </div>
  </div>


  {{-- <div class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3 class="footer-heading mb-4">About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
        </div>
        <div class="col-md-3 ml-auto">
          <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
          <ul class="list-unstyled float-left mr-5">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Subscribes</a></li>
          </ul>
          <ul class="list-unstyled float-left">
            <li><a href="#">Travel</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Nature</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          

          <div>
            <h3 class="footer-heading mb-4">Connect With Us</h3>
            <p>
              <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
              <a href="#"><span class="icon-twitter p-2"></span></a>
              <a href="#"><span class="icon-instagram p-2"></span></a>
              <a href="#"><span class="icon-rss p-2"></span></a>
              <a href="#"><span class="icon-envelope p-2"></span></a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib---</a>Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
      </div>
    </div>
  </div> --}}

  </div>

@endsection



    
    

