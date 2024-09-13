@include('includes.header')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #ff0878;
        color: white;
    }
</style>
<!-- About -->
<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content text-center">
                    <div class="home_title">Our Full Scale Of Charges</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="section_title_container">
                        <div class="section_title"><h1>Our Full Scale Of Charges</h1></div>
                        <p>Additional Charges all stated inclusive of VAT.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="intro_text">
                        <table>
                            <tr>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                            <tr>
                                <td>Professional photos</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                                <td>Duplicate Statements</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                                <td>Tenancy Agreement</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                                <td>Access to property portal</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                                <td>Annual gas safe certificate</td>
                                <td>£90.00</td>
                            </tr>
                            <tr>
                                <td>Energy performance cert</td>
                                <td>£90.00</td>
                            </tr>
                            <tr>
                                <td>Electrical condition report</td>
                                <td>Mandatory on all lets from June 2020</td>
                            </tr>
                            <tr>
                                <td>Electrical condition report (EICR)</td>
                                <td>Mandatory on all lets from June 2020 - POA</td>
                            </tr>
                            <tr>
                                <td>PAT test</td>
                                <td>£150.00 By quote for large properties</td>
                            </tr>
                            <tr>
                                <td>Legionella bacteria test</td>
                                <td>£150.00</td>
                            </tr>
                            <tr>
                                <td>Check In & inventory</td>
                                <td>£120.00</td>
                            </tr>
                            <tr>
                                <td>Check out existing tenants</td>
                                <td>£120.00</td>
                            </tr>
                            <tr>
                                <td>Registering and holding the deposit</td>
                                <td>£40.00 FREE FOR MANAGED</td>
                            </tr>
                            <tr>
                                <td>Re protecting the deposit - renewal</td>
                                <td>£40.00 FREE FOR MANAGED</td>
                            </tr>
                            <tr>
                                <td>Renewing fixed term tenancy Let only</td>
                                <td>£200.00 FREE FOR MANAGED</td>
                            </tr>
                            <tr>
                                <td>Rent Warrantee and legal cover</td>
                                <td>£300.00 FREE FOR MANAGED</td>
                            </tr>
                            <tr>
                                <td>Mid tenancy inspections</td>
                                <td>£60.00 - 2 free per year with managed service</td>
                            </tr>
                            <tr>
                                <td>Professional cleaning</td>
                                <td>POA – can include carpets if required.</td>
                            </tr>
                            <tr>
                                <td>Hourly rate for attended works</td>
                                <td>£60.00 per hour</td>
                            </tr>
                        </table>
                        <br/>
                        <p>We advise 12 month tenancy agreements.</p>
                        <h4>Minimum Fee</h4>
                        <p>Where the Landlord cancels the Agent’s instruction to provide a management service the Agent will charge and the Landlord will pay a fee based upon 8% (inc. VAT) of the agreed rent for the period not exceeding six months from the commencement date of the tenancy.
                        <br/><br/>VAT is payable at the prevailing rate on all our fees. In accordance with consumer legislation it is quoted as included in the prices stated above.</p>
                        <p>The fees charged to the tenant may change and we will endeavour to inform you of such a change at the earliest opportunity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
