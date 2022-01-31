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
    <style>
        .a-border {
            border: 1px solid rgba(205,132,53,1);
            background: rgb(237,168,94);
            background: linear-gradient( 
        180deg
        , rgba(237,168,94,1) 0%, rgba(205,132,53,1) 100%);
            color: #fff;
            font-weight: 500;
        }
    </style>
@endsection

@section('content')   
        <section class="content-wrap section gradient mt-2">
            <div class="container">
                <div class="row hero-content text-center">   
                    <div class="col-md-12">
                        <div class="text-left mb-2">
                            @guest 
                            @else
                                @if(Auth::user()->avatar)
                                    <div class="d-flex"> 
                                        <img src="{{ Auth::user()->avatar }}" alt="" style="width: 25px;">
                                        <div style="color: #333; font-size: 20px;" class="ml-2">สวัสดี <span style="color: #E89E5E;font-size: 13px;">  {{ Auth::user()->name }} </span> </div>
                                    </div>  
                                @else 
                                    <div style="color: #333; font-size: 20px;" class="ml-2">สวัสดี <span style="color: #E89E5E;font-size: 13px;">  {{ Auth::user()->name }} </span> </div> 
                                @endif      
                            @endguest 
                        </div>
                        <div class="box-add"> 
                            <h4 class="text-left text-dark"> ข้อมูลผู้จัดส่ง 
                            <a href="{{ url('/sender') }}" style="float: right;"><i class="icon-note"></i></a>
                            </h4>
                            <div class="text-dark text-left"> 
                                ชื่อ-นามสกุล : {{$data['users']->sender_fname.' '.$data['users']->sender_lname}} <br>
                                หมายเลขโทรศัพท์ : {{$data['users']->sender_phone}} <br>
                                อีเมล์ : {{$data['users']->sender_email}}<br>
                            </div>  
                        </div> 
                    </div> 
                    <div class="col-md-12"> 
                        <div class="mt-3"> 
                            <a  class="btn btn-block a-border" href="{{ route('order') }}"> 
                                <i class="icon-layers"></i> การสั่งซื้อ
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="row hero-content text-center  "> 
                    <div class="col-12 pt-2"> 
                        <a  class="btn btn-md btn-block btn-dark waves-effect waves-light" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div><i class="mdi mdi-logout"></i> {{ __('ออกจากระบบ') }}</div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </section>  
@endsection 
@section('script') 
  
@endsection