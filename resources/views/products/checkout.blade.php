@section('extra-css')
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script>
    const API_publicKey = "FLWPUBK_TEST-e30e3f554d153175ba44551f3f14e792-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
@endsection

@php
$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
                array('metaname' => 'size', 'metavalue' => 'big'));
@endphp
<h3>Buy Movie Tickets N500.00</h3>
<form method="POST" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}
    <input type="hidden" name="amount" value="500" /> <!-- Replace the value with your transaction amount -->
    <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
    <input type="hidden" name="description" value="Beats by Dre. 2017" /> <!-- Replace the value with your transaction description -->
    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
    <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
    <input type="hidden" name="email" value="test@test.com" /> <!-- Replace the value with your customer email -->
    <input type="hidden" name="firstname" value="Oluwole" /> <!-- Replace the value with your customer firstname -->
    <input type="hidden" name="lastname" value="Adebiyi" /> <!-- Replace the value with your customer lastname -->
    <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
    <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
    {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
    {{-- <input type="hidden" name="ref" value="MY_NAME_5uwh2a2a7f270ac98" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. --> --}}
    <input type="hidden" name="logo" value="https://pbs.twimg.com/profile_images/915859962554929153/jnVxGxVj.jpg" /> <!-- Replace the value with your logo url (Optional, present in .env)-->
    <input type="hidden" name="title" value="Afrikan store Order number 74985hd" /> <!-- Replace the value with your transaction title (Optional, present in .env)-->
    <input type="submit" value="Buy"  />
</form>

<form>

    <button type="button" onClick="payWithRave()">Pay Now</button>
</form>

@section('extra-js')

@endsection
