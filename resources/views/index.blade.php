<!DOCTYPE html>
<html lang="en">

  @include ('partials._header')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


  @include ('partials._nav-header')

    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url({{asset('warehouse/images/gov-place-1.jpg') }});" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Rent &amp; Buy Property Here</h1>
              <p class="mb-5 text-shadow">
                “There is no satisfaction, no greater gratification, than that you receive when you close on the purchase of your own home.”
              </p>
              <p><a href="#properties-section" class="btn btn-primary px-5 py-3">Get Started</a></p>
            </div>
          </div>
        </div>


      </div>

      <div class="site-blocks-cover overlay overlay-2" style="background-image: url({{ asset('warehouse/images/robinsons-back.jpg') }});" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Find Your Perfect Property For Your Home</h1>
              <p class="mb-5 text-shadow">
                “There is no satisfaction, no greater gratification, than that you receive when you close on the purchase of your own home.”
              </p>
              <p><a href="#properties-section" class="btn btn-primary px-5 py-3">Get Started</a></p>

            </div>
          </div>
        </div>


      </div>
    </div>

  </div>


  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">

            @foreach($properties as $property)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                  <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="/properties/{{ $property->id }}" class="d-inline-block mb-4"><img height="520" src="{{ $property->img }}" alt="FImageo" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>{{ $property->name }}</h3>
                        <p>{{ substr($property->description,0,60) }}...</p>
                        <strong>P{{ $property->price }}</strong>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach

        </div>
      </div>
    </div>

    <section class="site-section" id="about-section">
      <div class="container">

        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  @foreach($properties as $property)
                    <div><img src="{{ $property->img }}" alt="{{ $property->name }}" class="img-fluid"></div>
                  @endforeach
              </div>

          </div>
          <div class="col-lg-6 ml-auto">

            <h2 class="section-title mb-3">Real Pro Biz</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit  Quo suscipit omnis iste velit maxime.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Placeat maxime animi minus</li>
                  <li>Dolore qui placeat maxime</li>
                  <li>Consectetur adipisicing</li>
                  <li>Lorem ipsum dolor</li>
                  <li>Placeat molestias animi</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>

          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contct Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">



            <form action="#" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Get In Touch</h2>

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
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Manila, Philippines</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+639171838585 (Globe)</a></p>
              <p class="mb-4"><a href="#">+639178852323 (Globe)</a></p>
              <p class="mb-4"><a href="#">+63955-875-8303</a></p>
              <p class="mb-4"><a href="#">+639153588061 (Globe)</a></p>
              <p class="mb-4"><a href="#">+649212817522 (Smart)</a></p>
              <p class="mb-4"><a href="#">+6329855676 (Landline )</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>

          </div>
        </div>
      </div>
    </section>


    @include ('partials._footer')

  </body>
</html>
