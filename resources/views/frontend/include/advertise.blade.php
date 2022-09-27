    <style>
      /* .mt-ad {
            margin-top: 9.3rem!important;
        } */
    </style>

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-slider.css')}}">

    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-theme.css')}}" />

    <script type="text/javascript" src="{{asset('Frontend/assets/js/slick.js')}}"></script>
    <div>
      <!-- Advertise Section Start -->
      <section class="   mt-ad ad-card-body ">

        <div class="advertise-slider  mb-4" id="advertise-slider">
          <?php

          use App\Models\Advertise;

          $lists = Advertise::all();
          ?>
          @foreach($lists as $list)
          <div class="card shadow">
            <img src="{{asset('uploads/advertise')}}/{{$list->photo}}" alt="..." width="100" class="logo1">

            <div class="card-body advertise-card ">
              <h5 class="card-title">{{$list->title}}</h5>
              <p class="card-text">Phone: {{$list->Advertise_relationBetweenUser->phone}}</p>
              <p class="card-text"><small class="text-muted">{{$list->created_at->diffForHumans()}}</small></p>
            </div>
          </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-primary rounded-pill " style="position:100%" onclick="location.href='{{route('package')}}'">Quick Ad</button>
        </div>
      </section>
      <!-- Advertise Section End -->
    </div>



    <script type="text/Javascript">
      $(document).ready(function(){
    $('.advertise-slider').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
    })


  // $('.advertise-slider').slick({
  //     infinite: true,
  //     lazyLoad: 'ondemand',
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     autoplay: true,
  //     autoplaySpeed: 10000


  //     });

  });
</script>
