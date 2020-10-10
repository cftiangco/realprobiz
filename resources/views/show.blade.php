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


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ $property->img }});" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1>{{ $property->name }}</h1>
            <p class="mb-5"><strong class="text-white">@money($property->price) </strong></p>

          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>



    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="owl-carousel slide-one-item with-dots">
              <!-- <div><img src="{{ asset('warehouse/images/property_1.jpg')}}" alt="Image" class="img-fluid"></div>
              <div><img src="{{ asset('warehouse/images/property_2.jpg')}}" class="img-fluid"></div>
              <div><img src="{{ asset('warehouse/images/property_3.jpg')}}" alt="Image" class="img-fluid"></div> -->
              @foreach($lists as $list)
                <div><img src="{{ $list->img }}" class="img-fluid"></div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto">
            <div class="mb-5">
              <h3 class="text-black mb-4">{{ $property->name }}</h3>
              <!-- <p>6 Beds, 4 Baths, 4250 sqft.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa tempore repudiandae optio aliquam perspiciatis est quae enim quaerat eos hic dolorem accusamus molestias repellat consequatur velit, officiis nihil magnam placeat!</p>
              <p>Ex, esse? Obcaecati nam in cum eius quaerat repellendus adipisci ducimus dolorum sed quos. Amet recusandae cumque reprehenderit nam quia voluptatibus, repellat, aspernatur ut fuga perferendis consectetur excepturi neque in!</p>
              <p class="mb-4">Neque facilis iure earum, placeat odit ipsum, amet, optio accusantium voluptatem quasi obcaecati fugit? Explicabo eius dolorem provident quis non voluptas, dignissimos tempora eligendi, in, nam velit, quasi tenetur. Animi!</p>
              <p><a href="#" class="btn btn-primary">Buy Property</a></p> -->
              <p> {{ $property->location }}</p>
              <p> {{ $property->description }}</p>
            </div>

            <!-- <div class="mb-5">

              <div class="mt-5">
                <img src="{{ asset('warehouse/images/person_1.jpg') }}" alt="Image" class="w-25 mb-3 rounded-circle">
                <h4 class="text-black">Kyla Stewart</h4>
                <p class="text-muted mb-4">Real Estate Agent</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, iure atque sit ratione vitae neque! Laborum voluptate eius, laboriosam explicabo!</p>
                <p><a href="#" class="btn btn-primary btn-sm">Contact Agent</a></p>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>


    @include ('partials._footer')

  </body>
</html>
