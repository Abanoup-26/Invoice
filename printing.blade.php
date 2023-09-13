<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--style css-->
	

<!--bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
body,html {
 padding: 0px;
 margin: 0px;
 direction: ltr;
overflow-x: hidden;
}
html {
  scroll-behavior: smooth;
}
*{
   font-family: sans-serif;

}
.main-container{
    width: 100%;
}
.main-container a{
    text-decoration: none;
    transition:all 0.5s ease;
}
ul{
    list-style-type: none;
}
 .clearfix {
    clear: both;
}
.f-bold{
    font-weight: bold;
}
p{
    margin-bottom: 0px !important;
    font-size: 16px;
}
.container {
    width: 90% !important;
    max-width: 90% !important;
    margin: 0 auto !important;
}
.receipt-wrapper {
    padding:25px;
    width: 815px;
    margin: 0 auto;
    background-image: url({{asset('images/bg2.png')}});
   background-repeat: no-repeat;
    background-position: center;
    
}
img.logo {
    width: 200px;
}
p.receipt-title {
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 0;
}
.row.titles-wrapper {
    padding-bottom: 5px;
    border-bottom: 6px solid;
    margin-bottom: 10px;
}
.reciept-info-wrap {
    text-align: right;
}
.row.receipt-charges div {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0px;
}
.reciept-info-wrap p {
    font-weight: bold;
}
.receipt-details-wrap {
    text-align: center;
}
.row.delivery-info {
    padding: 10px 0px;
    border: 1px solid;
    margin-bottom: 5px !important;
}
.date {
    text-transform: uppercase;
}
.row.delivery-info .receipt-details-wrap {
    text-align: left;
}
p.receipt-info {
    font-weight: bold;
}
.row.receipt-table {
    border: 1px solid;
    margin-top: 5px !important;
}
.charges-wrap {
    margin-top: 5px;
    margin-bottom:5px;
}
p.charges-title {
    font-weight: bold;
    text-decoration: underline;
    margin-bottom: 5px !important;
}
p.charges-details {
    padding-left: 10px;
}
.charges-inner {
    display: flex;
    justify-content: space-between;
}
.charges-wrap-arabic {
    min-height: 50px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    text-align: right;
    padding-right: 25px;
}
.charges-wrap-arabic.wrap-arabic2 {
    min-height: 210px;
}
.charges-wrap-arabic.wrap-arabic3 {
    min-height: 95px;
}
.charges-info-wrap {
    border-left: 1px solid;
}
.charges-price {
    width: 100px;
    height: auto;
    border: 1px solid;
    padding: 0px !important;
    border-top: 0;
    font-size: 15px;
}
.charges-wrap .charges-price:nth-child(2) {
    border-top: 1px solid;
}
.charges-info-wrap .charges-wrap {
    display: flex;
    align-items: center;
    text-align: center;
    padding: 0;
}
p.total {
    margin-top: 5px;
    text-transform: uppercase;
    font-weight: bold;
}
.total span {
    text-transform: capitalize;
}
.total-calc {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 5px !important;
}
.total-calc .charges-price {
    width: 145px;
    height: auto;
    border: 1px solid;
    text-align: center;
    margin-left: 15px;
}
.signture-inner {
    display: flex;
    justify-content: right;
    min-width: 100%;
    align-items: center;
}
.last-row {
    margin-top: 30px !important;
}
.last-row-left {
    padding-left: 40px !important;
}
p.signture {
    width: 120px;
    text-align: center;
    position: relative;
    border-top: 6px solid;
}
.signture-wrap {
    margin-top: 10px;
}
/*
p.signture:before {
    position: absolute;
    content: '';
    width: 100%;
    border-bottom: 6px solid;
    right: 0;
    top: -10px;
}
*/
.last-row-right {
    display: flex;
    justify-content: center;
}
p.credits {
    margin-top: 20px;
    margin-bottom: 10px !important;
}
.page-top {
    width: 100%;
    text-align: center;
    margin-bottom: 25px;
    font-weight: bold;
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}
.qr {
    border: 1px solid;
    min-height: 160px;
/*    margin-top: -45px;*/
    width: 160px;
/*    margin-left: auto;*/
/*
    position: absolute;
    right: 0
*/
}
.titles-middle {
    text-align: right;
}
.titles-right {
    text-align: center;
}
.wrap-2 {
    height: 225px;
    flex-direction: column;
    justify-content: end;

}
.wrap-3 {
    margin-bottom: 15px;
    height: 105px;
}
.charges-wrap-arabic.wrap-arabic3 {
    height: 105px;
}
.titles-middle p {
    text-align: right;
}

p.footer-text {
    width: 100%;
    direction: rtl;
    color: #3c4588;
    font-weight: bold;
    text-align: center;
    font-size:13px;
}
.footer-inner {
    border-top: 10px solid #f66958;
    background-color: #357b56;
    max-height: 70px;
    color: #fff;
}
p.arabic-p-footer {
    margin-bottom: 0;
    font-size: 9px;
    padding: 0px 5px;
    text-align: center;
    direction: rtl;
}
p.english-p-footer {
    margin-bottom: 0;
    font-size: 9px;
    padding: 0px 5px;
    text-align: center;
    direction: rtl;
}
/*************************************Responsive***********************************/
@media (max-width:1450px){

}

@media (max-width:1120px){

}

@media (max-width:1025px){

}

@media (max-width:992px){

}

@media (max-width:845px){
.receipt-wrapper {
    width: 100%;
    }
}

@media (max-width:768px){
.signture-inner {
    width: 100%;
}
}

@media (max-width:576px){
.reciept-info-wrap {
    text-align: left;
/*    margin: 15px 0px !important;*/
}
    .receipt-details-wrap {
    text-align: left;
}
.signture-inner {
    width: 100%;
}
.last-row-left {
    padding-left: 15px !important;
}


}


@media (max-width:500px){
.row.titles-wrapper .col-5 {
    width: 100%;
}
.row.titles-wrapper .col-4, .row.titles-wrapper .col-3 {
    width: 50%;
    margin-top: 0px !important;
}
.qr {
    position: relative;
    margin-left: auto;
}
.page-top {
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
img.logo {
    margin-bottom: 20px;
}
}
    
@media (max-width:465px){
.row.last-row {
    flex-direction: column;
}
 p.signture:first-child {
    margin-bottom: 60px !important;
}
.last-row-left, .last-row-right {
    width: 100% !important;
    display: flex;
    justify-content: center;
}
    .charges-inner {
    flex-direction: column;
}
.charges-price {
    width: 80px;
    }

.row.delivery-info .reciept-info-wrap, .row.delivery-info .receipt-details-wrap {
    width: 50%;
    margin-top: 0px !important;
}
.receipt-table .col-9 {
    width: 50%;
}
.receipt-table .col-3 {
    width: 50%;
}
 .receipt-table .col-9 {
    width: 100%;
}
.receipt-table .col-3 {
    width: 100%;
} 
.qr {
    margin: 0 auto;
    margin-top: 30px;
}
    .wrap-1, .wrap-2, .wrap-3{
        height: auto;
    }
.signture-inner {
    justify-content: space-between;
    }
.charges-wrap-arabic.wrap-arabic3 {
    height: auto;
}
}


@media (max-width:370px){

}


</style>



<body>
	<div class="main-container">
	<header></header>
        
        <div class="receipt-wrapper">
            <div class="page-top">
            <img class="logo" src="{{asset('images/Aloufi_LOGO.jpg')}}">    
            <div class="title-wrap"></div><p class="page-title">
                @if($invoice->status=='active')
                فاتورة ضريبية
                @else
                فاتورة ضريبية مرتجعة
                @endif
          <br>Tax Invoice No :{{$invoice->serial_no}}</p>
            
                    <div class="qr"> 
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('http://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
                        ->size(200)->errorCorrection('H')
                        ->generate('W3Adda Laravel Tutorial')) !!} ">
                    </div>
                </div>
        <div class="row titles-wrapper">
            <div class="col-5 titles-left">
                <p class="receipt-title">
           {{$invoice->client->client_name ?? ''}}
                </p>
                <p class="receipt-title">
                 {{$invoice->client->address}}
                </p>
                <p class="receipt-title">
                  {{$invoice->client->tel_1 ??''}}
                </p>
                     <p class="receipt-title">
                 {{$invoice->client->tax_number??''}}
                </p>
            </div>
            <div class="col-3 reciept-info-wrap titles-middle">
                <p class="receipt-info">Date:</p>
                <p class="receipt-info">Remarks:</p>
                <p class="receipt-info">Declaration No:</p>
                <p class="receipt-info">Al-Oufi Tax No:</p>
            </div>
            <div class="col-4 receipt-details-wrap titles-right">
            <p class="receipt-details">{{$invoice->invoice_date}}</p>
            <p class="receipt-details">{{$invoice->remarks}}</p>
            <p class="receipt-details">{{$invoice->awb->decleration_no}}</p>
            <p class="receipt-details f-bold">300318694800003</p>  
            </div>
        </div>
            
        <div class="row delivery-info">
              <div class="col-3 reciept-info-wrap">
                <p class="receipt-info">Awb No:</p>
                <p class="receipt-info">No of PCs</p>
                <p class="receipt-info">Goods Describtion:</p>
            </div>
            <div class="col-3 receipt-details-wrap">
            <p class="receipt-details">{{$invoice->awb->awb_no}}</p>
            <p class="receipt-details">{{$invoice->awb->no_of_pcs }}</p>
            <p class="receipt-details"> {{$invoice->awb->goods_type }}</p>
            </div>
              <div class="col-3 reciept-info-wrap">
                <p class="receipt-info">Client No:</p>
                <p class="receipt-info">Total Weight:</p>
                <p class="receipt-info">Delivery Date:</p>
            </div>
            <div class="col-3 receipt-details-wrap">
            <p class="receipt-details">{{$invoice->client->client_no }}</p>
            <p class="receipt-details">{{$invoice->awb->goods_weight }}</p>
            <p class="receipt-details date">{{$invoice->awb->delivery_date}}</p>
            </div>
        </div>
        
        <div class="row receipt-charges">
              <div class="col-3 reciept-info-wrap">
                <p class="receipt-info">Describtion</p>
            </div>
            <div class="col-3 receipt-details-wrap">
            </div>
              <div class="col-3 reciept-info-wrap">
            </div>
            <div class="col-3 receipt-details-wrap">
            <p class="receipt-info">Amount</p>
            </div>
        </div>
        
        <div class="row receipt-table">
              <div class="col-9">
                  <div class="charges-wrap wrap-1">
                  <p class="charges-title">Freight Charges</p>
                    <div class="charges-inner">
                          <p class="charges-details">Air/Sea</p>
                          <p class="charges-details f-bold">رسوم شحن جوي</p>
                    </div>
                </div>
                  
                  <div class="charges-wrap wrap-2">
                  <p class="charges-title">Service Charges</p>
                    <div class="charges-inner">
                      <p class="charges-details">Customers Dues</p>
                      <p class="charges-details f-bold">رسوم جمركية</p>
                    </div> 
                      
                    <div class="charges-inner">
                      <p class="charges-details">Clearance</p>
                      <p class="charges-details f-bold">رسوم تخليص</p>
                    </div>  
                      
                    <div class="charges-inner">
                      <p class="charges-details">Delivery order/Storage</p>
                  <p class="charges-details f-bold">أجور تسليم وتخزين</p>
                    </div>
                      
                    <div class="charges-inner">
                  <p class="charges-details">Legalization</p>
                  <p class="charges-details f-bold">رسوم تصديق</p>
                    </div>
                   
                    <div class="charges-inner">
                  <p class="charges-details">Exp/Imp Formalities</p>
                  <p class="charges-details f-bold">رسوم إجراءات الإستيراد والتصدير</p>
                    </div>
                  
                    <div class="charges-inner">
                  <p class="charges-details">Demurrage</p>
                  <p class="charges-details f-bold">رسوم أرضية</p>
                    </div>
                      
                    <div class="charges-inner">
                  <p class="charges-details">Translation/Scan</p>
                  <p class="charges-details f-bold">رسوم ترجمة وأرشيف</p>
                    </div>  
                      
                    <div class="charges-inner">
                  <p class="charges-details">Undertaking Penalty</p>
                  <p class="charges-details f-bold">رسوم تعهدات</p>
                    </div>
                  
                </div>
                  
                  
                  <div class="charges-wrap wrap-3">
                  <p class="charges-title">Handling Charges</p>                      
                    <div class="charges-inner">
                  <p class="charges-details">Transportation</p>
                  <p class="charges-details f-bold">رسوم نقل</p>
                    </div>  
                      
                    <div class="charges-inner">
                  <p class="charges-details">Loading</p>
                  <p class="charges-details f-bold">أجور عمال</p>
                    </div> 
                    <div class="charges-inner">
                  <p class="charges-details">Other Expenses</p>
                  <p class="charges-details f-bold">أخرى</p>
                    </div>
                </div>
            </div>

              <div class="col-3 charges-info-wrap">
              <div class="charges-wrap charges-wrap-arabic">
                  <p class="charges-title"></p>
                  <p class="charges-details charges-price">{{$invoice->air}}</p>
                </div>
                  
                  <div class="charges-wrap wrap-2">
                  <p class="charges-title"></p>
              <p class="charges-details charges-price">{{$invoice->customer_fees}}</p>
                  <p class="charges-details charges-price">{{$invoice->clearance_fee}}</p>
                  <p class="charges-details charges-price">{{$invoice->delivery_amount}}</p>
                  <p class="charges-details charges-price">{{$invoice->legalization}}</p>
                  <p class="charges-details charges-price">{{$invoice->formalities}}</p>
                  <p class="charges-details charges-price">{{$invoice->demuerrage}}</p>
                  <p class="charges-details charges-price">{{$invoice->scan}}</p>
                  <p class="charges-details charges-price">{{$invoice->undertaking}}</p>
                </div>
                  
                  
                  <div class="charges-wrap charges-wrap-arabic wrap-arabic3">
                  <p class="charges-title"></p>
                             <p class="charges-details charges-price">{{$invoice->transportaion}}</p>
                  <p class="charges-details charges-price">{{$invoice->loading_fee}}</p>
                  <p class="charges-details charges-price">{{$invoice->other}}</p>
                </div>  
            </div>
            
        </div>
         
            
        <div class="signture-wrap">
            <div class="row">
                <div class="col-sm-7">
                                  @php
                    $value = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                          @endphp
               <p class="total">{{$value->format($invoice->total)}} saudi riyal  <span></span></p> 
                    
                </div>
                
                <div class="col-sm-5 total-calc">
                 <div class="signture-inner"><p class="receipt-details f-bold">Invoice Total</p>                
                <p class="charges-details charges-price">{{$invoice->amount}}</p></div>

                <div class="signture-inner">
                <p class="receipt-details f-bold">Tax 15%</p>
                    <p class="charges-details charges-price">{{$invoice->vat}}</p></div>
                    
                <div class="signture-inner"><p class="receipt-details f-bold">Net Amount</p>
                    <p class="charges-details charges-price">{{$invoice->total}}</p></div>
                </div>
            </div>  
            <div class="row last-row">
                <div class="col-7 last-row-left">
                <p class="signture">Prepared by</p>
                </div>
                
                <div class="col-5 last-row-right">
                <p class="signture">Approved by</p>
                </div>
            </div>   
            
            <p class="credits">Our Ac/details : Al Oufi Customs Clearance Est. A/c 132498000103  - IBAN : SA86 1000 0013 2498 0000 0103  - Bank : NCB</p>
        </div>
        </div>
        <div class="reciept-footer">
            <p class="footer-text">
                 تخليص جمركي - اعادة توجيه - نقليات - تجارة عامة - شحن
                Clearance Forwarding Transportaion General Trading Corgo
            </p>
            <div class="footer-inner">
                <p class="arabic-p-footer">مؤسسة العوفي للتخليص الجمركي ص.ب 2365 جدة 21451 المملكة العربية السعودية هاتف:6600600 - 0126673661 فاكس: 0126695219 بريد الكتروني: www.ssaloufi.com , info@ssaloufi.com</p>
                <p class="english-p-footer">Al oufi clearance Est.P.O Box 2365,Jeddah 21451, Tel:0126600600 - 6633566 , Fax:0126695219, E-mail:info@ssaloufi, www.ssaloufi.com</p>
            </div>
        
        </div>
    
    </div>
<!----end of main container----->

</body>
</html>