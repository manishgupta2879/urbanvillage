@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/landlords.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mortgage Calculator</li>
    </ol>
</div>
<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-lg-3">
            </div>
            <div class="ceter col-lg-6" style="min-height:690px; background-color:#f2f2f2;">
                <div class="intro_content">
                    <div class="container-2" style="border: 2px solid black; margin:10px; border-radius:0px !important;">
                        <h4>Mortgage Calculator</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Purchase price: </label><br/>
                                <div class="form-group-2 box-form">
                                    <span>£</span> <input placeholder="eg: 200000" type="text" name="ma" id="ma" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Deposit: </label><br/>
                                <div class="form-group-2 box-form">
                                    <span>£</span> <input placeholder="eg: 50000" type="text" name="dp" id="dp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Mortgage term: </label><br/>
                                <div class="form-group-2 box-form">
                                    <span>years</span> <input  placeholder="eg: 20" type="text" name="mt" id="mt" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Interest rate:</label><br/>
                                <div class="form-group-2 box-form">
                                    <span>%</span> <input  placeholder="eg: 2.5" type="text" name="ir" id="ir" required>
                                </div>
                            </div>
                            <div class="col-md-12" id="mortgage_div" style="text-align: center;">
                                <hr/>
                                <p>Amount Borrowed: £ <span id="m_amount">00.00</span></p>
                                <p>Term: <span id="m_years">00</span> Years</p>
                                <p>Interest rate: <span id="m_interest">0.0</span> %</p>
                                <h4>Total Monthly Payment: £ <span id="m_payment">00.00</span></h4>
                                <p>Total amount repayable: £ <span id="m_total">00.00</span></p>
                                <hr/>
                            </div>
                        </div>
                        <input style="margin-bottom: 24px;" type="submit" id="mortgage_submit" value="Calculate"><br><br>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="intro_content">
                    <br/>
                    <a href="{{ url('stamp-duty-calculator') }}" class="btn cus-btn-2"><b>Stamp Duty Calculator</b></a>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $('#mortgage_submit').on('click',function(){

        var mortgage_price = 0;
        var down_payment = 0;
        var mortgage_term = 1;
        var mortgage_interest = 0;

        mortgage_price = document.getElementById('ma').value;
        down_payment = document.getElementById('dp').value;
        mortgage_term = document.getElementById('mt').value;
        mortgage_interest = document.getElementById('ir').value;

        var mortgage_term_months = mortgage_term * 12;
        var mortgage_value = mortgage_price - down_payment;
        var mortgage_interest_final = mortgage_interest / 1200;
        var final_monthly = mortgage_value*(mortgage_interest_final * Math.pow((1 + mortgage_interest_final), mortgage_term_months))/(Math.pow((1 + mortgage_interest_final), mortgage_term_months) - 1);
        final_monthly = +(final_monthly.toFixed(2));
        var total_repayment = final_monthly * mortgage_term_months;

        $('#m_amount').html(mortgage_value.toFixed(2));
        $('#m_years').html(mortgage_term);
        $('#m_interest').html(mortgage_interest);
        $('#m_payment').html(final_monthly);
        $('#m_total').html(total_repayment);

        $("#mortgage_div").show();
    });

</script>

@include('includes.footer')
