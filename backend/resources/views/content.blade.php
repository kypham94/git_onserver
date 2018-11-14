 @extends('layout.master')
 @section('title', 'Trực tiếp '.$data->name.'-'.$data->time.' | Duduatv.live')
 @section('kw',$data->name.' '.$data->time)
 @section('des', 'Xem đá bóng miễn phí chất lượng HD')
 @section('content')
   <link rel="stylesheet" href="//samples.streamroot.io/web/assets/demo-pages.css">

  <!-- Makes the header -->
  <script src="//samples.streamroot.io/web/assets/header.js"></script>

  <!-- Builds -->
  <script src="//cdn.jsdelivr.net/npm/hls.js@0.9.1/dist/hls.min.js"></script>
  <script src="//cdn.streamroot.io/hlsjs-dna-wrapper/1/stable/hlsjs-dna-wrapper.js"></script>
    <style type="text/css">
    	.widget-box {
    		background-color: #1b1e24!important;

    	}

    	@media only screen and (max-width: 1080px) {
   			.chat {
        		display: none;
    		}
    	}
    	@media only screen and (max-width: 780px) {
   			.chat {
        		display: none;
    		}
        .bottom-ads {
          display: none;
        }
    		.logo {
    			display: none!important;
    		}
		}
		@media only screen and (min-width: 1080px) {
   			video {
   				height: 600px;
   			}
		}
		button {
			margin: 3px;
		}
		button a {
			color: white;
			text-decoration: none;
		}
		#u_0_2 {
			display: none;
		}
    .flowplayer {
      background-color: #00abcd;
    }
    .flowplayer .fp-color-play {
      fill: #eee;
    }
    </style>

    <div class="demo-btn-space mb-4" style="margin: 5%">

            <div class="row" style="margin-bottom: 20px;">
            	<div class="col-md-1 col-lg-1"></div>
                <h3><i class="fas fa-align-left mr-2"></i> Trực tiếp {{$data->name}} | {{$data->time}} </h3>
            </div>
            <div class="clearfix"></div>
            <div class="row">
            	<div class="col-md-1 col-lg-1"></div>
            	@if($data->link_1 != '1')
            	<button type="button" class="btn btn-primary @if($current == 1) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/1') }}">Link 1</a>
              	</button>
              	@endif
              	@if($data->link_2 != '2')
              	<button type="button" class="btn btn-primary @if($current == 2) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/2') }}">Link 2</a>
              	</button>
              	@endif
              	@if($data->link_3 != '3')
              	<button type="button" class="btn btn-primary @if($current == 3) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/3') }}">Link 3</a>
              	</button>

              	@endif
              	@if($data->link_4 != '4')
              	<button type="button" class="btn btn-primary @if($current == 4) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/4') }}">Link 4</a>
              	</button>
              	@endif

        	</div>
            <div class="row">
          <div class="col-sm-12 col-md-9 col-lg-9">
  			  	<video id="demoplayer" muted controls autoplay></video>
            <div id="streamroot-graphs"></div>
				  </div>
				<div class="col-sm-0 col-md-3 col-lg-3">
          <div class="row" style="margin-bottom: 20px">
            <script id="cid0020000202485567454" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 250px;height: 350px;">{"handle":"duduatv","arch":"js","styles":{"a":"000000","b":100,"c":"FFFFFF","d":"FFFFFF","k":"000000","l":"000000","m":"000000","n":"FFFFFF","p":"10","q":"000000","r":100,"fwtickm":1}}</script>
            <div class="clearfix"></div>
          </div>
          <div class="row" style="margin-top: 10px; margin-bottom: 10px; ">
            <div class="fb-page" data-href="https://www.facebook.com/cuongbongdachannel/" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cuongbongdachannel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cuongbongdachannel/">Cuồng Bóng đá TV</a></blockquote></div>
          </div>
      </div>
			</div>			   
		</div>
    <script>
    // select the above element as player container
    ar hlsjsConfig = {
      "maxBufferSize": 0,
      "maxBufferLength": 30,
      "liveSyncDuration": 30
    };
    var dnaConfig = {};
    var hls = new Hls(hlsjsConfig);
    var wrapper = new HlsjsDnaWrapper(hls, "demoswebsiteandpartners", dnaConfig);
    var videoElement = document.getElementById('demoplayer');
    hls.loadSource({{$link}});
    hls.attachMedia(videoElement);
    hls.on(Hls.Events.MANIFEST_PARSED, function () {
      videoElement.play();
    });

</script>
@endsection
