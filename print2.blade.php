<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <title>Invoice</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-between">
            <!-- Qr Image and Invoice Number & data -->
            <div class="row justify-content-between mt-5">
                <div class="logo col-md-4 ">
                    <img class="w-75 h-50 border" src="{{ asset('images/Aloufi_LOGO.jpg') }}" alt="">
                </div>
                <div class="col-md-4">
                    @if ($invoice->status == 'active')
                        <h4 class="text-center mt-5">فاتوره ضريبيه</h4>
                    @else
                        <h4 class="text-center mt-5">فاتورة ضريبية مرتجعة </h4>
                        <h5 class="text-center">Tax Invoice No : {{ $invoice->serial_no }}</h5>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <img class="border w-75" src="data:image/png;base64, {!! base64_encode(
                        QrCode::format('png')->merge('http://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)->size(200)->errorCorrection('H')->generate('W3Adda Laravel Tutorial'),
                    ) !!} ">
                </div>
            </div>
            <!--End QR Image and Invoice Number & data -->
        </div>

        <!-- data Section  -->
        <div class="row m-5 justify-content-center" style="font-size: 15px; font-weight: bold;">
            <div class="col-md-6">
                <ul style="list-style: none;">
                    <li>Date:&nbsp;&nbsp;&nbsp;تاريخ الفاتوره :{{ $invoice->invoice_date }}</li>
                    <li>Remarks: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $invoice->remarks }}</li>
                    <li>Declaration No : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $invoice->awb->decleration_no }}</li>
                    <li>Al-Oufi Tax No:الرقم الضريبي 300318694800003</li>
                </ul>
            </div>
            <div class="col-md-6 ">
                <ul style="list-style: none;" dir="rtl">
                    <li>شركة بحري لوجستكس رقم المبني :3074</li>
                    <li> رقم الفرعي :8022 </li>
                    <li>رقم السجل :70079456632</li>
                    <li> رمز البريدي : 12213</li>
                    <li> الشارع : طريق الامير محمد بن عبد العزيز ، حي العليا ، الرياض</li>
                    <li> الرقم الضريبي : 310180801700003</li>

                </ul>
            </div>
        </div>

        <span>
            <hr style=" border: 2px solid black; margin: 20px 0; font-weight: bold;">
        </span>
        <!-- data Section  -->

        <div class="border border-3 row ms-4 " style="height: 100px; width: 90%;">

            <div class="col-5 m-auto">
                <ul style="list-style: none; ">
                    <li><strong>Awb No: </strong>{{ $invoice->awb->awb_no }}</li>
                    <li><strong>No of PCs:</strong> {{ $invoice->awb->no_of_pcs }}</li>
                    <li><strong>Goods Description:</strong> {{ $invoice->awb->goods_type }}</li>
                </ul>
            </div>
            <div class="col-5 m-auto">
                <ul style="list-style: none; ">



                    <li><strong>Client No:</strong> &nbsp; &nbsp; {{ $invoice->client->client_no }}</li>
                    <li><strong>Total Wight:</strong> &nbsp; &nbsp; {{ $invoice->awb->goods_weight }}</li>
                    <li><strong>Delievery Date:</strong> {{ $invoice->awb->delivery_date }}</li>
                </ul>
            </div>

        </div>
        <div class="container row fw-bold mt-5 mb-1 fs-5">
            <div class="col-11">Description</div>
            <div class="col-1"> Amount</div>
        </div>
        <!-- Charges -->
        <div class=" container  border">
            <div class="col-md-12">
                <table class="table table-md ">
                    <tbody>
                        <tr>
                            <td>
                                <h2 style="text-decoration: underline;">Fright Charges</h2>
                            </td>
                            <td class="text-end"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Air/Sea</td>
                            <td class="text-center">رسوم نقل جوي </td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->air }}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 style="text-decoration: underline;">Service Charges</h2>
                            </td>
                            <td class="text-center"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Customer Dues</td>
                            <td class="text-center">رسوم جمركيه</td>
                            <td class=" border text-center"> <span
                                    class="border p-2">{{ $invoice->customer_fees }}</span></td>
                        </tr>
                        <tr>
                            <td>Clearance</td>
                            <td class="text-center">رسوم تخليص</td>
                            <td class="border text-center"> <span
                                    class="border p-2">{{ $invoice->clearance_fee }}</span></td>
                        </tr>
                        <tr>
                            <td>Delivery Order/Storage</td>
                            <td class="text-center">اجور تسليم وتخزين </td>
                            <td class="border text-center"> <span
                                    class="border p-2">{{ $invoice->delivery_amount }}</span></td>
                        </tr>
                        <tr>
                            <td>Legalization</td>
                            <td class="text-center">رسوم تصديق</td>
                            <td class="border text-center"> <span
                                    class="border p-2">{{ $invoice->legalization }}</span></td>
                        </tr>
                        <tr>
                            <td>EXP/IMP Formalities</td>
                            <td class="text-center">رسوم اجراءات الاستيراد والتصدير </td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->formalities }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Demurrage</td>
                            <td class="text-center">رسوم ارضيه</td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->demuerrage }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td> Translation/Scan</td>
                            <td class="text-center">رسوم ترجمه وارشيف</td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->scan }}</span></td>
                        </tr>
                        <tr>
                            <td>Undertaking Penalty</td>
                            <td class="text-center">رسوم تعهدات</td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->undertaking }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 style="text-decoration: underline;">Handlind Charges</h2>
                            </td>
                            <td class="text-center"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Transportation</td>
                            <td class="text-center">رسوم نقل</td>
                            <td class="border text-center"> <span
                                    class="border p-2">{{ $invoice->transportaion }}</span></td>
                        </tr>
                        <tr>
                            <td>Loading</td>
                            <td class="text-center"> اجور عماله</td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->loading_fee }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Other Expenses</td>
                            <td class="text-center"> اخري </td>
                            <td class="border text-center"> <span class="border p-2">{{ $invoice->other }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Charges -->
        <!-- Amount will be paid in Arabic -->
        <div class="row ">
            <div class="col-md-8">
                <p class="m-5 fs-3 fw-bold">Amount will be paid in Arabic </p>
            </div>
            <div class="col-md-4 ">
                @php
                    $value = new NumberFormatter('en', NumberFormatter::SPELLOUT);
                @endphp

                <p class="total">{{ $value->format($invoice->total) }} saudi riyal <span></span></p>

                <div class="p-2">Invoice Total<span class="border ms-5 p-2">{{ $invoice->amount }}</span></div>
                <div class="p-2"> Tax 15%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                        class="border ms-5 p-2">{{ $invoice->vat }}</span> </div>
                <div class="p-2"> Net Amount<span class="border ms-5 p-2">{{ $invoice->total }}</span> </div>
            </div>
        </div>
        <!-- Amount will be paid in Arabic -->

        <!-- prepared and approved  -->
        <div class="row  mt-5 justify-content-between ">
            <div class="col-md-4 fs-2 text-center border-top border-3 "> Prepared by </div>
            <div class="col-md-4 fs-2 text-center border-top border-3"> Approved by</div>
        </div>
        <br>
        <br>
        <!-- prepared and approved  -->
        <!--Details-->
        <div class="ms-5 row justify-content-center fw-bold">
            <div class="col-4 fs-5">سجل تجاري 430021230</div>
            <div class=" ms-3 col-4 fs-5">موسسة العوفي للتخليص الجمركي </div>
        </div>
        <!-- End Details-->
        <!-- Cr num -->
        <div class="row mt-2">
            <p class="text-center fw-bold fs-5 ">
                Our Ac/details: Al Oufi Customs Clearance Est.A/c 132498000103-IBAN : SA86 1000 0013 2498 0000 0103 -
                Bank:NCB
            </p>
        </div>

        <!---Address--->
        <div class="  mt-2 row justify-content-center fw-bold">
            <div class="col-6 fs-5">Building No: 8160 , Street : As Sayyidah Zaynab </div>
            <div class="col-4 fs-5">رقم المبني 8160 ، الشارع : السيده زينب</div>
        </div>
        <!---Address--->
        <!--- Additional Address--->
        <div class="  mt-2 row justify-content-center fw-bold">
            <div class="col-6 fs-5">Secondary No: 2830 , District : Ash Sharafiyah Dist</div>
            <div class="col-4 fs-5">الرقم الفرعي 2830 ، الحي : حي الشرفية</div>
        </div>
        <!--- Additional Address--->

        <div class="row mt-5">
            <p class="text-center fw-bold text-primary fs-4 mt-5">
                Clearance Forwarding Transportation General Trading Corgo تخليص جمركي - اعادة توجيه-نقليات - تجاره عامة
                - شحن
            </p>
        </div>

        <!-- footer -->
        <footer class="d-flex flex-column bg-success border-top border-5 border-danger p-3">
            <div class="container">
                <div class="row" dir="rtl">
                    <div class="col-md-4">
                        <p class="text-white fw-bold text-center">
                            موسسة العوفي للتخليص الجمركي
                            <br>ص.ب2365 جدة 21451 المملكه العربيه السعودية
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white fw-bold text-center">
                            بريد الكتروني info@ssaloufi.com,www.ssaloufi.com
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-white fw-bold text-center">
                            هــــاتــف - 0126600600-6633566
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white fw-bold text-center">
                        Al oufi clearance Est.P.O Box 2365, Jeddah 21451, Tel: 0126600600-6633566,
                        Fax: 0126695219, Email: info@ssaloufi,www.ssaloufi.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
