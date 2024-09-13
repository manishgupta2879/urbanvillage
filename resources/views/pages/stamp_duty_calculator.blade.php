@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/landlords.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Stamp Duty Calculator</li>
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
                        <form>
                            <h4>Stamp Duty Calculator</h4>
                            <div class="alert alert-danger" id="error-message" style="display:none;margin-top: 10px;">
                                <ul>
                                    <li>The given data was invalid, Please check all your inputs.</li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="text-align: center;">
                                    <label>Purchase price: </label><br/>
                                    <div class="form-group-2 box-form">
                                        <span>£</span> <input placeholder="200000" type="text" name="value"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    <input checked="checked" type="radio" name="country" value="england"/> SDLT (England or N. Ire)<br/>
                                    <input type="radio" name="country" value="scotland"/> LBTT (Scotland)<br/>
                                    <input type="radio" name="country" value="wales"/> LTT (Wales)<br/>
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    <input type="radio" name="additional" value="investment"/> Investment property<br/>
                                    <input checked="checked" type="radio" name="additional" value="primary"/> Primary residence<br/>
                                    <input type="radio" name="additional" value="first"/> First-time buyer<br/>
                                </div>
                                <div class="col-md-12" id="mortgage_div" style="text-align: center;">
                                    <hr/>
                                    <p>Higher Rates: <span id="higher_rates">-</span></p>
                                    <p>Effective rate: <span id="effective_rate">0.0</span> %</p>
                                    <h4>Transaction tax payable: £ <span id="tax_payable">00.00</span></h4>
                                    <hr/>
                                </div>
                            </div>
                            <input style="margin-bottom: 24px;" type="submit" id="stamp_submit" value="Calculate"><br><br>
                        </form>
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
                    <a href="{{ url('mortgage-calculator') }}" class="btn cus-btn-2"><b>Mortgage Calculator</b></a>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    //========= Stamp Duty calculator starts ========

    $.ajaxSetup({
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#stamp_submit").click(function(e){
        e.preventDefault();

        var value = $("input[name=value]").val();
        var country = $("input[name=country]:checked").val();
        var additional = $("input[name=additional]:checked").val();

        $.ajax({

            type:'POST',
            url:'/calculate-stamp-duty',

            data:{
                "_token": "{{ csrf_token() }}",
                "value":value,
                "country":country,
                "additional":additional
            },

            success:function(data){
                $("#error-message").hide();

                var effective_rate  = 0.0;
                var higher_rates    = 'Not Applicable';

                if(data.additional_rate_used == true){
                    higher_rates    = 'Applicable';
                }

                effective_rate = ((data.sdlt_payable/value) * 100).toFixed(2);

                //set values to the output
                $('#tax_payable').html(data.sdlt_payable.toFixed(2));
                $('#effective_rate').html(effective_rate);
                $('#higher_rates').html(higher_rates);
            },

            error: function(xhr, status, error){
                $("#error-message").toggle();
            }

        });



    });

    //========= Stamp Duty calculator end ========

</script>

@include('includes.footer')
