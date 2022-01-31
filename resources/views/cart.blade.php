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
<link href="{{ asset('css/css-font/style3.css') }}" rel="stylesheet" type="text/css" />  
<style>
    .edit-pro{
        position: absolute;
        left: 14px;
        background: #ffffffb0;
        padding: 0.2rem 0.5rem;
        border-bottom-right-radius: 5px;
    }

    .option{
        background: #fff;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start; 
        border-radius: 5px;
        cursor: pointer;
        padding: 5px;
        border: 2px solid lightgrey;
        transition: all 0.3s ease;
    }
    .option .dot{
        height: 20px;
        width: 20px;
        background: #d9d9d9;
        border-radius: 50%;
        position: relative;
    }
    .option .dot::before{
        position: absolute;
        content: "";
        top: 4px;
        left: 4px;
        width: 12px;
        height: 12px;
        background: #0069d9;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }
    input[type="radio"]{
        display: none;
    }
    #option-1:checked:checked ~ .option-1,
    #option-2:checked:checked ~ .option-2{
        border-color: #0069d9;
        background: #0069d9;
    }
    #option-1:checked:checked ~ .option-1 .dot,
    #option-2:checked:checked ~ .option-2 .dot{
        background: #fff;
    }
    #option-1:checked:checked ~ .option-1 .dot::before,
    #option-2:checked:checked ~ .option-2 .dot::before{
        opacity: 1;
        transform: scale(1);
    }
    .option span{
        font-size: 13px;
        color: #808080;
    }
    #option-1:checked:checked ~ .option-1 span,
    #option-2:checked:checked ~ .option-2 span{
        color: #fff;
    }

    /* ================== */
    .zone{
        background: #fff;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start; 
        border-radius: 5px;
        cursor: pointer;
        padding: 5px;
        border: 2px solid lightgrey;
        transition: all 0.3s ease;
    }
    .zone .dot{
        height: 20px;
        width: 20px;
        background: #d9d9d9;
        border-radius: 50%;
        position: relative;
    }
    .zone .dot::before{
        position: absolute;
        content: "";
        top: 4px;
        left: 4px;
        width: 12px;
        height: 12px;
        background: #0069d9;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }
    input[type="radio"]{
        display: none;
    }
    #zone-1:checked:checked ~ .zone-1,
    #zone-2:checked:checked ~ .zone-2,
    #zone-3:checked:checked ~ .zone-3,
    #zone-4:checked:checked ~ .zone-4{
        border-color: #0069d9;
        background: #0069d9;
    }
    #zone-1:checked:checked ~ .zone-1 .dot,
    #zone-2:checked:checked ~ .zone-2 .dot,
    #zone-3:checked:checked ~ .zone-3 .dot,
    #zone-4:checked:checked ~ .zone-4 .dot{
        background: #fff;
    }
    #zone-1:checked:checked ~ .zone-1 .dot::before,
    #zone-2:checked:checked ~ .zone-2 .dot::before,
    #zone-3:checked:checked ~ .zone-3 .dot::before,
    #zone-4:checked:checked ~ .zone-4 .dot::before{
        opacity: 1;
        transform: scale(1);
    }
    .zone span{
        font-size: 13px;
        color: #808080;
    }
    #zone-1:checked:checked ~ .zone-1 span,
    #zone-2:checked:checked ~ .zone-2 span,
    #zone-3:checked:checked ~ .zone-3 span,
    #zone-4:checked:checked ~ .zone-4 span{
        color: #fff;
    }
</style>
@endsection

@section('content')   
        <div class="box-fixed-title2 d-block d-sm-none"> 
            <div class="container-fluid">    
                <div class="">
                    <div class="d-flex justify-content-between"> 
                        <h4 class="text-center"> 
                            <a href="{{ route('home') }}" style="color: #333;"> 
                                <i class="icon-arrow-left"></i>
                            </a>     
                        </h4> 
                        <h4 class="text-center"> รายการอาหารที่สั่ง </h4> 
                        <h4 class="text-center"> </h4> 
                    </div>
                </div>
            </div>
        </div>
    <form method="POST" action="{{ route('additionalAddress.post') }}" id="formMaster">
    @csrf 
        <section class="content-wrap section gradient">
            <div class="container"> 
                <div class="row hero-content text-center mt-2" style="background: #fff;">  
                    <div class="col-md-12 text-left pb-2 pt-1">
                        <div class="box-add">  
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="h4"> รายละเอียดการจัดส่ง</div>
                                </div>
                                <div class="col-md-12">  
                                    <input id="fname" type="text" class="form-control mb-1 @error('fname') is-invalid @enderror" name="fname" required autocomplete="fname" autofocus 
                                    value="@if($data['users']->sender_fname!='') {{$data['users']->sender_fname}} @endif" placeholder="ชื่อ-นามสกุล"> 
                                </div> 
                                <div class="col-md-12">  
                                    <input id="tel" type="text" class="form-control mb-1 @error('tel') is-invalid @enderror" name="tel" required autocomplete="tel" autofocus
                                    data-toggle="input-mask" data-mask-format="000-000-0000"
                                    value="@if($data['users']->sender_phone!='') {{$data['users']->sender_phone}} @endif" placeholder="หมายเลขโทรศัพท์"> 
                                </div>  
                                <div class="col-md-12"> 
                                    <div class="h4"> กรอกรายละเอียดรถ </div>     
                                </div>
                                <div class="col-6 pr-1">  
                                    <input id="carDetail1" type="text" class="form-control mb-1 @error('carDetail1') is-invalid @enderror" name="carDetail1" required autocomplete="carDetail1" autofocus
                                    value="" placeholder="ยี่ห้อรถ"> 
                                </div> 
                                <div class="col-6 pl-0">  
                                    <input id="carDetail2" type="text" class="form-control mb-1 @error('carDetail2') is-invalid @enderror" name="carDetail2" required autocomplete="carDetail2" 
                                    value="" placeholder="สีรถ"> 
                                </div> 
                                <div class="col-6 pr-1">  
                                    <input id="carDetail3" type="text" class="form-control mb-1 @error('carDetail3') is-invalid @enderror" name="carDetail3" required autocomplete="carDetail3" 
                                    value="" placeholder="รุ่นรถ"> 
                                </div> 
                                <div class="col-6 pl-0">  
                                    <input id="carDetail4" type="text" class="form-control mb-1 @error('carDetail4') is-invalid @enderror" name="carDetail4" required autocomplete="carDetail4" 
                                    value="" placeholder="เลขทะเบียน"> 
                                </div> 
                                <div class="col-md-12"> 
                                    <div class="h4"> เลือกการชำระเงิน </div>     
                                </div>
                                <div class="col-12"> 
                                    <div class="d-flex">
                                        <input type="radio" name="payType" id="option-1" checked value="1" required> 
                                        <label for="option-1" class="option option-1 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">โอนผ่านธนาคาร</span>
                                        </label> 
                                    
                                        <input type="radio" name="payType" id="option-2" value="2" required>
                                        <label for="option-2" class="option option-2 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">ชำระด้วยเงินสด</span>
                                        </label>
                                    </div>
                                </div> 
                                <div class="col-md-12"> 
                                    <div class="h4"> เลือกจุดจอดรถ </div>     
                                </div>
                                <div class="col-12"> 
                                    <div class="">
                                        <input type="radio" name="zone" id="zone-1" checked value="บริเวณสนาม ATV ด้านหน้าฟาร์ม" required> 
                                        <label for="zone-1" class="zone zone-1 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">บริเวณสนาม ATV ด้านหน้าฟาร์ม</span>
                                        </label>  
                                    </div>
                                    <div class="">
                                        <input type="radio" name="zone" id="zone-2" value="บริเวณหน้าร้าน Store@Farmchokchai ใกล้ๆพิพิธภัณฑ์โชคชัย" required> 
                                        <label for="zone-2" class="zone zone-2 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">บริเวณหน้าร้าน Store@Farmchokchai ใกล้ๆพิพิธภัณฑ์โชคชัย</span>
                                        </label>  
                                    </div>
                                    <div class="">
                                        <input type="radio" name="zone" id="zone-3" value="บริเวณกิจกรรมขี่ม้าแคระ" required> 
                                        <label for="zone-3" class="zone zone-3 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">บริเวณกิจกรรมขี่ม้าแคระ</span>
                                        </label>  
                                    </div>
                                    <div class="">
                                        <input type="radio" name="zone" id="zone-4" value="บริเวณหน้าตู้ ATM และหน้าห้องน้ำ" required> 
                                        <label for="zone-4" class="zone zone-4 m-1">
                                            <div class="dot"></div>
                                            <span class="ml-1">บริเวณหน้าตู้ ATM และหน้าห้องน้ำ</span>
                                        </label>  
                                    </div>
                                </div> 
                            </div>
                        </div> 
                        
                        @if(session("error"))
                            <div class="alert alert-danger text-danger mt-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color: #dc3545;">×</span>
                                </button>
                                <i class="mdi mdi-information mr-2"></i> {{session("error")}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row  hero-content text-center mt-2 pb-2" style="background: #fff;">
                    <div class="col-6 text-left text-dark"> <h4>รายการ </h4> </div>
                    <div class="col-6 text-right text-dark">  <a href="{{ route('home') }}"> <h4><i class="mdi mdi-gesture-double-tap"></i> สั่งอาหารเพิ่ม</h4> </a> </div>
                    <?php $total=0; $total_op=0; ?>  
                    @if(session('deliveryCart'))  
                        @foreach(session('deliveryCart') as $key=>$row) 
                            <div class="col-12 box-id-{{$row['detail_id']}}">  
                                <div class="d-flex mt-1 mb-1"> 
                                    <div class="">  
                                        <img src="{{ 'https://shop.chokchaisteakhouse.com/images/product/'.$row['Imgname'] }}" alt="" class="box-product"> 
                                    </div>
                                    <div class="text-left pl-2 pr-2 text-product1 mr-auto"> 
                                        <div class="text-dark white-space-nowrap1" style="font-weight: 600;"> {{$row['proname']}} </div>    
                                        <div class="text-dark white-space-nowrap1">ราคา {{number_format($row['price'])}} บาท</div>  
                                        <div class="white-space-nowrap2">
                                            @if($row['moreDetails'])
                                                <i class="mdi mdi-circle-outline"></i> {{$row['moreDetails']}}
                                            @endif
                                        </div>  
                                    </div>
                                    <div class="white-space-nowrap1 text-price pl-2 pr-2">
                                        <select id="quantity{{$row['indexid']}}" name="quantity" class="form-control form-control-sm" style="width: 55px;" data-id="{{$row['indexid']}}">
                                            @for($i=1; $i<=15; $i++)
                                                <option @if($row['quantity']==$i) selected @endif value="{{$i}}">{{$i}}</option>  
                                            @endfor
                                        </select>
                                    </div> 
                                    <div class="white-space-nowrap1 text-price">
                                        <div style="padding: 0.3rem; border: 1px solid;  border-radius: .25rem;"> 
                                            <a style="color: #f44336;" href="#" class="remove-from-cart" data-id="{{$row['indexid']}}">ลบ</a>
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            @if($row['session_option'])  
                                <div class="col-md-12 pb-2">     
                                    @foreach($row['session_option'] as $row_op) 
                                    <div class="d-flex" style="padding: 0.2rem;margin: 0.2rem 0;border-radius: 5px;">  
                                        <div class="mr-auto text-left"> 
                                            <div class="white-space-nowrap1 text-dark"> 
                                                <i class="icon-plus mr-1"></i> {{$row_op['name']}} @if($row_op['price']>0) ราคา {{number_format($row_op['price'], 2)}} ฿ @endif
                                            </div>
                                        </div>  
                                        <div class="white-space-nowrap1">
                                            @if($row_op['quantity']!=0)
                                            <span class="mr-1 text-dark"> x{{$row_op['quantity']}} </span>
                                            @else 
                                            <span class="mr-1 text-dark"> x1 </span>
                                            @endif
                                        </div> 
                                    </div> 
                                    <?php 
                                        if($row_op['quantity']==0){
                                            $quantity_op=1;
                                        } else {
                                            $quantity_op=$row_op['quantity'];
                                        }
                                        $total_op+=($row_op['price']*$quantity_op); 
                                    ?>
                                    @endforeach   
                                </div>
                            @endif 
                            <?php $total+=($row['price']*$row['quantity']); ?>
                        @endforeach 
                    @endif  
                </div>   
                <?php  
                    $total=$total+$total_op; 
                    $discount=0; $total_price=0; 
                ?>  
                <div class="row p-2" style="background: #ddd;">
                    <div class="col-6 text-left text-dark p-1">  ค่าอาหาร  </div>
                    <div class="col-6 text-right text-dark p-1">  {{number_format($total,2)}} ฿  </div> 
                    <div class="col-6 text-left text-dark p-1">  ส่วนลด  </div>
                    <div class="col-6 text-right text-dark p-1">  {{number_format($discount,2)}} ฿  </div>  
                    <div class="col-6 text-left text-dark p-1">  <h4>ทั้งหมด</h4>  </div>
                    <div class="col-6 text-right text-dark p-1">  <h4>{{number_format(($total)-$discount,2)}} ฿</h4>  </div>  
                </div>   

                <div class="text-left mt-2 d-block d-sm-none"> กรุณาตรวจสินค้า, ราคา และจำนวนสินค้า ที่ท่านต้องการสั่งให้เรียบร้อย หากตรวจสอบข้อมูลเรียบร้อยแล้ว คลิก "ชำระเงิน" </div>

                <div class="row pl-3 pr-3 mb-2" style="background: #fff;">  
                    <div class="col-12 pd-00 text-right">
                        <div class="d-none d-sm-block mt-2">  
                            <div class="text-left float-left"> กรุณาตรวจสินค้า, ราคา และจำนวนสินค้า <br>ที่ท่านต้องการสั่งให้เรียบร้อย หากตรวจสอบข้อมูลเรียบร้อยแล้ว คลิก "ชำระเงิน" </div>
                            <button type="submit" class="btn btn-md btn-dark waves-effect waves-light">
                                <i class=" mdi mdi-cash-multiple"></i> ทำการชำระเงิน
                            </button>
                        </div> 
                    </div>
                </div> 
            </div>
        </section> 
        <div class="box-fixed-cart d-block d-sm-none"> 
            <div class="">    
                <div class="p-2"> 
                    @if(session('deliveryCart')) 
                        @if(count(session('deliveryCart'))>0)   
                            <div class="d-flex justify-content-between box-btn-action"> 
                                <h4 style="color: #FFF;"> <i class="icon-basket-loaded"></i> {{count(session('deliveryCart'))}} </h4>  
                                <button type="submit" class="btn btn-icon" style="padding: 0 3rem;">
                                    <h4 style="color: #FFF;"> ชำระเงิน</h4>
                                </button>  
                                <h4 style="color: #FFF;"> {{number_format(($total)-$discount,2)}} ฿</h4> 
                            </div> 
                        @endif 
                    @else 
                        <a class="btn btn-md btn-block btn-dark waves-effect waves-light" href="{{ route('home') }}">สั่งอาหาร</a> 
                    @endif 
                </div>   
            </div>
        </div>   
    </form>
@endsection 
@section('script') 
<script src="{{ asset('libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
<script src="{{ asset('libs/autonumeric/autoNumeric-min.js') }}"></script>
<script src="{{ asset('admin/js/pages/form-masks.init.js') }}"></script>
<script>
     
    function time_takingblur(){
        var val=$('#time_taking').val(); 
        $('[name=time_takingHDF]').val(val);
    }
  
    $(document).on('change', '[name=quantity]', function(event) {    
        ajaxupdateTocart($(this)[0].dataset.id);
    }); 

    function ajaxupdateTocart(id) { 
        var quantity = $('#quantity'+id).val();
        $.post("{{ route('updateTocart.post') }}", {
            _token: "{{ csrf_token() }}", 
            indexid: id,
            quantity: quantity
        })
        .done(function(data, status, error){  
            if(error.status == 200){   
                location.reload();
            } 
        })
        .fail(function(xhr, status, error) { 
            alert('เกิดข้อผิดผลาดโปรดทำรายการใหม่อีกครั้ง'); 
        }); 
    } 
    
    $(".remove-from-cart").click(function (e) {
        var id = $(this)[0].dataset.id;
        $.post("{{ route('removeTocart.post') }}", {
            _token: "{{ csrf_token() }}",  
            indexid: id, 
        })
        .done(function(data, status, error){ 
            if(error.status == 200){  
                location.reload();
            } 
        })
        .fail(function(xhr, status, error) { 
            alert('เกิดข้อผิดผลาดโปรดทำรายการใหม่อีกครั้ง'); 
        });  
    }); 
    
</script> 
@endsection