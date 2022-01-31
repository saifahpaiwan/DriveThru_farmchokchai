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
<link href="{{ asset('css/css-font/style7.css') }}" rel="stylesheet" type="text/css" />  
@endsection

@section('content')   
        <div class="box-fixed-title2 d-block d-sm-none"> 
            <div class="container-fluid">    
                <div class="">
                    <div class="d-flex justify-content-between"> 
                        <h4 class="text-center"> 
                            <a href="{{ route('order') }}" style="color: #333;"> 
                                <i class="icon-arrow-left"></i>
                            </a>     
                        </h4>  
                        <h4 class="text-center"> <i class="icon-layers"></i> การสั่งซื้อของฉัน   </h4>
                        <div> </div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($data))
        <section class="content-wrap section gradient">
            <div class="container"> 
                <div class="row hero-content text-center" style="background: #fff;"> 
                    <div class="col-12"> 
                            <div class="row"> 
                                <div class="col-12 pt-2">    
                                    <div class="text-left pd-rev transfer box-add"> 
                                        <div class="row">
                                            <div class="col-6 col-md-6"> 
                                                <div class="text-left text-dark font-1 pb-1"><b>เลขใบสั่งซื้อ</b><br> <span class="font-2">{{$data['order_code']}}</span> </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="text-right text-dark font-1 pb-1"><b>วันที่สั่งซื้อ</b><br> <span class="font-2"><?php echo date('d/m/Y', strtotime($data["created_at"])); ?></span> </div>
                                            </div>
                                            <div class="col-6 col-md-6">
                                                <div class="text-left text-dark font-1 pb-1"> <span class="font-2">{{$data['delivery_form']}}</span> </div>
                                            </div> 
                                            <div class="col-6 col-md-6">
                                                <div class="text-right text-dark font-1 pb-1"> 
                                                    <span class="font-2"> Drive Thru</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-bottom: 0.5rem;border-bottom: 1px dashed #ddd; color: #333;"> </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"> 
                                                <div class="mb-1"> ชื่อ-นามสกุล : {{$data["sender_fname"]}} {{$data["sender_lname"]}}</div> 
                                                <div class="mb-1">โทรศัพท์ : {{$data["sender_phone"]}} </div> 
                                                <div class="mb-1">รายละเอียดการจัดส่ง : {{$data["additional_address"]}} </div> 
                                            </div> 
                                        </div> 
                                    </div>   
                                </div>
                                <div class="col-12 text-left cashondelivery">
                                    <div class="p-3 mt-3" style="border: 1px solid #ddd; border-radius: 3px;">   
                                        <h4 style="padding-bottom: 0.5rem;border-bottom: 1px dashed #ddd; color: #333;">
                                            <i class="icon-basket-loaded"></i> การสั่งซื้อ  
                                        </h4>
                                        <div style="padding-bottom: 0.5rem;border-bottom: 1px dashed #ddd; color: #333;"> 
                                            <div class="row p-2">
                                                @foreach ($data["ordersItems"] as $items)
                                                <div class="col-md-12">
                                                    <div class="d-flex mt-1 mb-1"> 
                                                        <div class="">  
                                                            <span class="qty"> x{{$items['quantity']}}    </span>
                                                            <img src="{{ 'https://shop.chokchaisteakhouse.com/images/product/'.$items['imgName'] }}" alt="" class="box-product">
                                                        </div>
                                                        <div class="text-left pl-2 pr-2 text-product1 mr-auto wd-mob">
                                                            <div class="text-dark white-space-nowrap1" style="font-weight: 600;">{{$items['productName']}}</div>  
                                                            <div class="white-space-nowrap1">ราคา {{number_format($items['productPrict'])}} บาท</div>
                                                            <div class="white-space-nowrap1" style="color: #bdc3c7;">
                                                                @if($items['moreDetails'])
                                                                    <i class="mdi mdi-circle-outline"></i> {{$items['moreDetails']}}
                                                                @endif
                                                            </div>  
                                                        </div> 
                                                    </div>
                                                </div>  
                                                <div class="col-md-12 pb-2">    
                                                    @if(isset($items['option_list'])) 
                                                        @foreach($items['option_list'] as $row_op) 
                                                        <div class="d-flex" style="padding: 0.2rem;margin: 0.2rem 0;border-radius: 5px;">  
                                                            <div class="mr-auto text-left"> 
                                                                <div class="white-space-nowrap1 text-dark"> 
                                                                    <i class="icon-plus mr-1"></i> {{$row_op['name']}} @if($row_op['price']>0) ราคา {{number_format($row_op['price'], 2)}} ฿ @endif
                                                                </div>
                                                            </div>  
                                                            <div class="white-space-nowrap1">
                                                                @if($row_op['quantity']!=0)
                                                                <span class="mr-1 text-dark"> x{{$row_op['quantity']}} </span>
                                                                @endif
                                                            </div> 
                                                        </div>  
                                                        @endforeach   
                                                    @endif
                                                </div>
                                                @endforeach 
                                            </div>
                                        </div>
                                        <div style="padding-bottom: 0.5rem;border-bottom: 1px dashed #ddd; color: #333;">  
                                            <div class="row p-2">
                                                <div class="col-6"> <span class="font-13"> รวม </span> </div>
                                                <div class="col-6 text-right"><span class="totalall font-13"> {{number_format($data["price_total"],2)}}</span> </div>
                                                <div class="col-6"> <span class="font-13"> ส่วนลด </span> </div>
                                                <div class="col-6 text-right font-13"> {{number_format($data["price_discount"],2)}}</div> 
                                            </div>
                                        </div>
                                        <div style="color: #333;"> 
                                            <div class="row p-2">
                                                <div class="col-6"> <h4> <b>ยอดรวม</b> </h4> </div>
                                                <div class="col-6 text-right"><h4> <b><span class="totalall"> {{number_format($data["net_total"],2)}} </span> บาท</b> </h4></div> 
                                            </div>
                                            @if($data["orderStatus_id"]==3)
                                            <div class="mt-1 text-center">  
                                                <div class=""> 
                                                    <form method="POST"  action="{{ route('confrimeOrderUser.post') }}" enctype="multipart/form-data">
                                                        @csrf  
                                                        <input type="hidden" id="id" name="id" value="{{$data['order_id']}}"> 
                                                        <input type="hidden" id="status" name="status" value="4">  
                                                        <button type="submit" class="btn btn-md btn-block btn-success waves-effect waves-light mt-3">
                                                            {{ __('ฉันได้ตรวจสอบและยอมรับสินค้า') }}
                                                        </button>  
                                                    </form>  
                                                </div>
                                            </div> 
                                            @endif 
                                        </div> 
                                    </div>
                                </div> 
                            </div>  

                            <div class="row mt-3">
                                @if($data['orderStatus_id']==1) 
                                <div class="col-md-12"> 
                                    <div class="p-2" style="border: 1px solid #ddd; border-radius: 3px;  background: #fbfbfb; color: #333;">
                                        <img class="icon-colored" src="{{ asset('/images/icons/Clock.png') }}" title="clock.svg" style="width: 20%;">
                                        <h4 class="text-dark">  ทำการสั่งซื้อสำเร็จ<br>กรุณารอพนักงานรับออเดอร์สินค้าสักครู่ </h4> 
                                    </div>
                                </div>
                                @elseif($data['orderStatus_id']==2) 
                                <div class="col-md-12"> 
                                    <div class="p-2" style="border: 1px solid #ddd; border-radius: 3px;  background: #fbfbfb; color: #333;">
                                        <img class="icon-colored" src="{{ asset('/images/icons/cooking.png') }}" title="clock.svg" style="width: 20%;">
                                        <h4 class="text-dark"> กำลังทำอาหาร </h4> 
                                        <div> ผ่านมา : {{Carbon\Carbon::parse($data['updated_at'])->diffForHumans()}} </div>
                                    </div>
                                </div>
                                @elseif($data['orderStatus_id']==3) 
                                    <!-- <div class="col-md-12"> 
                                        <div class="p-2" style="border: 1px solid #ddd; border-radius: 3px;  background: #fbfbfb; color: #333;">
                                            <img class="icon-colored" src="{{ asset('/images/icons/food-delivery.png') }}" title="clock.svg" style="width: 20%;">
                                            <h4 class="text-dark"> ทำอาหารเสร็จแล้ว รอลูกค้ารับอาหาร </h4> 
                                        </div>
                                    </div>  -->
                                @elseif($data['orderStatus_id']==4) 
                                    <div class="col-md-12"> 
                                        <div class="p-2" style="border: 1px solid #ddd; border-radius: 3px;  background: #fbfbfb; color: #333;">
                                            <img class="icon-colored" src="{{ asset('/images/icons/checked.png') }}" title="clock.svg" style="width: 20%;">
                                            <h4 class="text-dark"> ทำรายการสำเร็จ<br>ขอบคุณที่ใช้บริการกับเรา </h4> 
                                        </div>
                                    </div> 
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </section>   
        @endif
    @endsection 
@section('script') 
<script>
    function setClipboard(value) {
        $.toast({
            heading: "<div class='text-center' style='font-family: WDB_Bangna;'> คัดลอกเบอร์โทร<br>"+value+" </div>", 
            position:"top-right",
            loaderBg:"#333",
            stack:1
        })
        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = value; 
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
    }
</script>
@endsection