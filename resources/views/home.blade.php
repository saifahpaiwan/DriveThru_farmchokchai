@extends('layouts.app')
@section('meta')
   <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://drivethru.chokchaisteakhouse.com/">
    <meta property="og:title" content="CHOKCHAISTEAK.DRIVETHRU">
    <meta property="og:description" content="โชคชัยสเต็คเฮ้าส์ เสิร์ฟความอร่อยจากครัวส่งตรงถึงคุณ ด้วยบริการจัดเลี้ยงนอกสถานที่ ทางเลือกสำหรับการทานอาหาร ในรูปแบบปาร์ตี้ส่วนตัวที่บ้าน งานเลี้ยงระดับองค์กร งานเลี้ยงในโอกาสพิเศษต่างๆ ด้วยคุณภาพอาหารและพนักงานที่เชี่ยวชาญ พร้อมเครื่องมือครบครัน ในบรรยากาศและสถานที่ของคุณเอง เพื่อสร้างความประทับใจให้แก่คนพิเศษของคุณ ออกแบบความอร่อย ตามความต้องการของคุณ ติดต่อสอบถามเพิ่มเติมได้ที่ 0 2532 2846 ถึง 8 ต่อ 1710">
    <meta property="og:image" content="{{ asset('images/Express_Platform.webp') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://drivethru.chokchaisteakhouse.com/">
    <meta property="twitter:title" content="CHOKCHAISTEAK.DRIVETHRU">
    <meta property="twitter:description" content="โชคชัยสเต็คเฮ้าส์ เสิร์ฟความอร่อยจากครัวส่งตรงถึงคุณ ด้วยบริการจัดเลี้ยงนอกสถานที่ ทางเลือกสำหรับการทานอาหาร ในรูปแบบปาร์ตี้ส่วนตัวที่บ้าน งานเลี้ยงระดับองค์กร งานเลี้ยงในโอกาสพิเศษต่างๆ ด้วยคุณภาพอาหารและพนักงานที่เชี่ยวชาญ พร้อมเครื่องมือครบครัน ในบรรยากาศและสถานที่ของคุณเอง เพื่อสร้างความประทับใจให้แก่คนพิเศษของคุณ ออกแบบความอร่อย ตามความต้องการของคุณ ติดต่อสอบถามเพิ่มเติมได้ที่ 0 2532 2846 ถึง 8 ต่อ 1710">
    <meta property="twitter:image" content="{{ asset('images/Express_Platform.webp') }}">
@endsection
@section('style') 
<link href="{{ asset('css/css-font/style2.css') }}" rel="stylesheet" type="text/css" />   
<style>
    .nav-pills .nav-link { 
        background: #ffffffab;
    }
    .nav>li>a:focus, .nav>li>a:hover {
        text-decoration: none;
        background-color: #ffffffe8;
        color: #eda85e;
    } 

    .bg-container-01 { 
        background-image: linear-gradient(rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url({{ asset('images/BG01.jpg') }});
        background-position: center;
        background-size: cover;
    }
    .location {
        font-size: 20px;
        padding: 0.5rem;
        background: #ffffffcf;
    }
   
</style>
@endsection

@section('content')     
    <div class="container pd-00 border1-nav bg-container-01"> 
        <div class="text-center padding-bg">
            <div class="h2 text-white"> เซ็ตเมนู พิเศษ </div> 
        </div>   
    </div> 
    <!-- //==========NAV===========// -->
    <section class="content-wrap section gradient" id="">
        <div class="container"> 
            <div class="row hero-content-1 text-left mb-3">
                <div class="col-12">  
                    <div class="tab-content"> 
                        @foreach($data['QueryproductItems'] as $row1)  
                            <div class="" id="subs{{$row1['productSubid']}}">
                                <h4 class="text-dark mb-3 mt-3"> {{$row1['productSubname']}} </h4>
                                @foreach($row1['list'] as $row)  
                                <a href="{{ url('detail/'.$row['id']) }}">
                                    <div class="d-flex mt-2 mb-2"> 
                                        <div class="">  
                                            <img src="https://shop.chokchaisteakhouse.com/images/product/{{ $row['proImgname'] }}" alt="" class="box-product">
                                            <!-- <img src="{{ asset('images/product/'.$row['proImgname']) }}" alt="" class="box-product"> -->
                                        </div>
                                        <div class="text-left pl-2 pr-2 text-product"> 
                                            <div class="text-dark white-space-nowrap1" style="font-size: 14px;font-weight: 500;">{{$row['itemsName_th']}}</div>
                                            <div class="text-dark white-space-nowrap1" style="font-size: 14px;font-weight: 500;">{{$row['itemsName_en']}}</div>
                                            <span class="mr-2 mt-1" style="font-weight: 600; color: #f44336;"> {{$row['price_range']}} </span>
                                            @if($row['tags_deleted_at']!=1)
                                                <div class="badge box-tag" style="background: {{$row['bg_color']}};">{{$row['tagName']}}</div>
                                            @endif    
                                        </div>  
                                    </div>
                                </a>
                                @endforeach 
                            </div>   
                        @endforeach
                    </div>
                </div>
            </div>  
        </div>
    </section>  
     
    <div class="box-fixed-cart d-block d-sm-none"> 
        <div class="">    
            <div class="p-2">
                <?php $total=0; $total_op=0; ?> 
                @if(session('deliveryCart')) 
                    @if(count(session('deliveryCart'))>0)   
                        @foreach(session('deliveryCart') as $key=>$row) 
                            @if($row['session_option'])   
                                @foreach($row['session_option'] as $row_op) 
                                <?php 
                                    if($row_op['quantity']==0){
                                        $quantity_op=1;
                                    } else {
                                        $quantity_op=$row_op['quantity'];
                                    }
                                    $total_op+=($row_op['price']*$quantity_op); ?>
                                @endforeach
                            @endif
                            <?php $total+=($row['price']*$row['quantity']); ?> 
                        @endforeach   
                            <div class="d-flex justify-content-between box-btn-action"> 
                                <h4 style="color: #FFF;"> <i class="icon-basket-loaded"></i> {{count(session('deliveryCart'))}} </h4>
                                <h4> <a style="color: #FFF;padding: 0 3rem;" href="{{ url('/cart') }}"> ตะกร้าสินค้า </a></h4>
                                <h4 style="color: #FFF;"> <?php echo number_format(($total+$total_op),2); ?> ฿</h4> 
                            </div> 
                    @endif
                @else 
                    <div class="d-flex justify-content-between box-btn-action"> 
                        <h4 style="color: #FFF;"> <i class="icon-basket-loaded"></i> 0 </h4>
                        <h4 style="color: #FFF;"> เลือกสินค้า </h4>
                        <h4 style="color: #FFF;"> 0 ฿</h4> 
                    </div>
                @endif 
            </div>   
        </div>
    </div>  
    @guest   
    <div class="modal fade modprofile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered-flex-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">เข้าสู่ระบบสมาชิก</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf   
                        <div class="row">  
                            <div class="col-md-12">
                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        <strong> <i class="mdi mdi-alert-circle-outline"> </i> {{ $message }} </strong>
                                    </div>
                                @enderror  
                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong> <i class="mdi mdi-alert-circle-outline"> </i> {{ $message }} </strong>
                                    </div>
                                @enderror   
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-12">
                                <label for="email" class="col-form-label">{{ __('อีเมล') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-12">  
                                <label for="password" class="col-form-label">{{ __('รหัสผ่าน') }}</label> 
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> 
                                </div> 
                            </div>
                            <div class="col-md-6 text-right">
                                @if (Route::has('password.request'))
                                    <a class="text-muted" href="{{ route('password.request') }}">
                                        {{ __('ลืมรหัสผ่าน?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-md btn-block btn-dark waves-effect waves-light fontWDB_Bangna">
                                    {{ __('ลงชื่อเข้าใช้งาน') }}
                                </button> 
                            </div>
                            <div class="col-md-12 text-center">
                                <hr class="mt-4">
                                <div class="txt-or"> 
                                    <lable class="fontWDB_Bangna txt-or-lable"> หรือลงชื่อเข้าใช้งานด้วย </lable>    
                                </div>
                                <a href="{{ route('login.facebook') }}" class="btn btn-xs btn-facebook waves-effect width-lg waves-light mt-1 ml-1"><i class="fab fa-facebook-f"></i>  Facebook</a>
                                <a href="{{ route('login.google') }}" class="btn btn-xs btn-google waves-effect width-lg waves-light mt-1 ml-1"><i class="fab fa-google"></i> Google</a>
                                <a href="https://liff.line.me/1656041621-j3EwB48b" class="btn btn-xs btn-line waves-effect width-lg waves-light mt-1 ml-1"><i class="fab fa-line"></i> Login Line</a> 
                            </div>
                        </div>
                    </form>
                    <div class="row pt-2 pb-2">
                        <div class="col-sm-12 text-center">
                            @if (Route::has('register'))
                                <p class="text-muted mb-0">
                                    ยังไม่มีบัญชี?
                                    <a class="text-dark ml-1" href="{{ url('register') }}"><b>{{ __('สมัครสมาชิก') }}</b></a>
                                </p> 
                            @endif 
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
    @else
    @endguest
@endsection 
@section('script') 
<script>
     
    var show=true;
    @guest   
        $('.modprofile').modal({
            backdrop: 'static',
            keyboard: true, 
            show: show
        }); 
    @else
    
    @endguest
 
</script>

@endsection