 @extends('layout.master')
 @section('title', 'Trực tiếp '.$data->name.'-'.$data->time.' | Duduatv.live')
 @section('kw',$data->name.' '.$data->time)
 @section('des', 'Xem đá bóng miễn phí chất lượng HD')
 @section('content')
    <script src="{{ asset('flow/flowplayer.min.js') }}"></script>
    <!-- Flowplayer hlsjs engine (light) -->
    <script src="{{ asset('flow/flowplayer.hlsjs.light.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('flow/skin.css') }}">
   
   <!-- Minimal styling for this standalone page, can be removed -->
   <link rel="stylesheet" href="{{asset('flow/demo.css')}}">
   <!-- Syntax highlighting of source code, can be removed -->
   <link rel="stylesheet" href="{{ asset('flow/pygments.css')}}">
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

    <div class="demo-btn-space mb-4" style="margin: 80px">

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
  			  	<div data-live="true" data-ratio="0.5625" data-share="false" class="flowplayer">
             
               <video data-title="{{$data->name}}">
            <source type="application/x-mpegurl"
                    src="{{$link}}">
               </video>
             
            </div>
				  </div>
				<div class="col-sm-0 col-md-3 col-lg-3">
          <div class="row" style="margin-bottom: 20px">
            <div class="fb-page" data-href="https://www.facebook.com/cuongbongdachannel/" data-tabs="timeline" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cuongbongdachannel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cuongbongdachannel/">Cuồng Bóng đá TV</a></blockquote></div>
          </div>
          <div class="bottom-ads">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- quarng cao 2 -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-6662668396400898"
               data-ad-slot="7207390732"
               data-ad-format="auto"
               data-full-width-responsive="true"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
				</div>
      </div>
			</div>			   
		</div>
	<script type="text/javascript">
        $( document ).ready(function() {
                $(".vjs-modal-dialog-content").text('Hiện tại trận đấu chưa diễn ra hoặc đã kết thúc, bạn vui lòng quay sau nhé :(');
        });
        (function(d) {
		    var cwjs, id='chatwing-js';  if(d.getElementById(id)) {return;}
		    cwjs = d.createElement('script'); cwjs.type = 'text/javascript'; cwjs.async = true; cwjs.id = id
		    cwjs.src = "//chatwing.com/code/2bb40920-de4c-11e8-9d7e-e1742e584162/embedded";
		    d.getElementsByTagName('head')[0].appendChild(cwjs);
	  	})(document);
	</script>
@endsection
