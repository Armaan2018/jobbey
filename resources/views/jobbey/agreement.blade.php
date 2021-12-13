@extends('jobbey.layouts.simple')

@section('main-content')
@if (Auth::check())
    @if(Auth::user() -> role == 'company')

    @foreach ($agreeis as $task)
     @foreach ($task -> applieds as $applid)
      @foreach ($applid -> users as $useridR)
         


  


    <body class="main_invoice">
    <div class="invc_header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 col-sm-12">
                    <div class="header102">
                        <div class="header_logo">
                            <img src="images/invoice_logo.svg" alt="">
                        </div>
                        <div class="invoice_heading">
                            <h6>Agreement</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="invoice_section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="invoice_body">
                        <div class="nvdate_dt">
                            <div class="nvde_dt45">
                            </div>
                            <div class="nvde_dt46">
                                <ul class="in11448">
                                    <li>
                                        <div class="vdt-list"><span>Date :</span>10 December 2019</div>
                                    </li>
                                    <li>
                                        <div class="vdt-list"><span>Agreement No :</span>IVIP12023598</div>
                                    </li>
                                    <li>
                                        <div class="vdt-list"><span>Agreement ID :</span>1258963487</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="dff474">Invoice</h3>
                        <div class="jike145">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="vhls140">
                                        <h4>Freelancer</h4>
                                        <ul>
                                            <li>
                                                <div class="vdt-list">{{$useridR -> name}}</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">133, Dracut</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">Massachusetts</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">01826</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">United States</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vhls140">
                                        <h4>Company</h4>
                                        <ul>
                                            <li>
                                                <div class="vdt-list">{{Auth::user() -> name}}</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">#1234, Shahid karnail Singh Nagar,</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">Near MBD Mall,</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">141001</div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">Ludhiana </div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">Punjab </div>
                                            </li>
                                            <li>
                                                <div class="vdt-list">India </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="invoice_footer">
                            <div class="leftfooter">
                                <p>Thanks for buying.</p>
                            </div>
                            <div class="righttfooter">
                                <a class="print_btn" href="javascript:window.print();">Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
      @endforeach
    @endforeach
 @endforeach
    @endif
@endif
@endsection