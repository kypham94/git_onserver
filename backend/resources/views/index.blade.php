 @extends('layout.master')
 @section('title', 'Xem trực tiếp bóng đá miễn phí, không giật lag | Duduatv.live')
 @section('des', 'Xem đá bóng miễn phí chất lượng HD')
 @section('content')
      <section class="u-content-space">
        <div class="container">

          <!-- Tooltip -->
          <div class="demo-btn-space mb-4">
            <div class="row" style="margin-bottom: 20px;">
                <h3 style="padding-right: 20px;"><i class="fas fa-align-left mr-2"></i> Lịch stream hôm nay </h3> 
              <div class="fb-like" data-href="https://www.facebook.com/cuongbongdachannel" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="row">
              @foreach ($matches as $match)
              <div class="col-6 col-md-4 col-lg-3 mb-7 mb-lg-0">
                <a href="{{ asset('/tructiep/'.$match->slug.'.html') }}" class="text-center d-block" data-toggle="tooltip" data-placement="top" title="Nhấn vào để xem">
                    <div class="card">
                        <div class="card-header" style="padding: 0;">
                            <img class="img-fluid d-block mb-2" src="{{asset('book/'.$match->image)}}" alt="Htmlstream">
                        </div>
                        <div class="card-body" style="padding: 0; min-height: 100px;">
                            <span style="font-weight: bold; color: #da3e14; margin-top: 10px;font-weight: bold;color: #da3e14;display: block;">{{$match->name}}</span>
                            <span style="display: block; font-weight: 600; display: block; color: #888;">{{$match->time}}</span>
                        </div>
                    </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>
          <!-- End Tooltip -->
        </div>
      </section>
      <!-- End Tooltips & Popovers -->
    </main>
@endsection
