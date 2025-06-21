<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
          <h1 class="FNews">Newsletter</h1>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 mt-2">
          <form action="{{ route('store.Subscribelist') }}" method="post">
            @csrf
          <input type="text" placeholder="Name" name="name" class="input-field">
          <input type="email" placeholder="Email" name="email" class="input-field">
          <button type="submit" class="Fbtn">Subscribe</button>
        </form>
        </div>
      </div>
    </div>
  </footer>
  <div class="footer2">
    <div class="container">
      <div class="row">
        <div class="FAbout col-lg-3 col-md-12 col-sm-12 mt-5">
          <h3>About Us</h3>
          <p class="FPara mt-3">Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus.Nulla porttitor
            accumsana tincidunt.</p>
          <div class="icon5 ms-4 mt-4">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter ms-2"></i></a>
            <a href="#"><i class="bx bxl-google-plus ms-2"></i></a>
            <a href="#"><i class="bx bxl-linkedin ms-2"></i></a>
          </div>
        </div>
        <div class="FAbout col-lg-3 col-md-12 col-sm-12 mt-5">
          <h3>Contact</h3>
          <p class="FPara mt-3"><i class="fa-solid fa-location-pin" style="color: #a7aaae;"></i> 0926k 4th block
            building, king Avenue, New York City</p>
          <p class="FPara"><i class="fa-solid fa-phone-flip" style="color: #a7aaae;"></i> Phone : +121 098 8907 9987</p>
          <p class="FPara"><i class="fa-regular fa-envelope" style="color: #a7aaae;"></i> Email : <a href=""
              class="Fanker">info@example.com</a></p>
        </div>
        <div class="FAbout col-lg-2 col-md-12 col-sm-12 mt-5">
          <h3>Navigation</h3>
          <p class="FPara1 mt-3 ms-5">Home</p>
          <p class="FPara1 ms-5">About</p>
          <p class="FPara1 ms-5">Services</p>
          <p class="FPara1 ms-5">Team</p>
          <p class="FPara1 ms-5">Gallery</p>
          <p class="FPara1 ms-5">News</p>
          <p class="FPara1 ms-5">Contact</p>
        </div>
        <div class="FAbout col-lg-4 col-md-12 col-sm-12 mt-5">
          <h3>About Us</h3>
          <div class="news-grid mt-5">
            <img src="Image/g1.jpg" alt="News 1">
            <img src="Image/g2.jpg" alt="News 2">
            <img src="Image/g3.jpg" alt="News 3">
            <img src="Image/g4.jpg" alt="News 4">
            <img src="Image/g5.jpg" alt="News 5">
            <img src="Image/g6.jpg" alt="News 6">
          </div>
        </div>
      </div>
      <div class="line pt-5 pb-5">
        <p>© Roof Houses 2018. All Rights Reserved | Design by <a href="" class="W3">W3layouts</a></p>
      </div>
    </div>
  </div>