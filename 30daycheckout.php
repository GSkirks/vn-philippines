<?php
require 'vendor/autoload.php';
 \Stripe\Stripe::setApiKey('sk_test_51JqtqcH7cbmE6hoE6G5XShinSS6lI1mPrVcB3DTfPdaUF3pSFZ0VODblDELK8mbMzFgfxyStY7752ZuyzBMwhiDd00Ho1d4p1c');

  $checkout_session = \Stripe\Checkout\Session::create([
      'success_url' => 'https://vn-philippines.herokuapp.com/success.php',
      'cancel_url' => 'https://vn-philippines.herokuapp.com/cancel.php',
      'payment_method_types' => ['card'],
      'mode' => 'subscription',
      'line_items' => [[
        'price' => "price_1JvFOmH7cbmE6hoEoyzKKNwd",
        // For metered billing, do not pass quantity
        'quantity' => 1,
      ]],
    ]);

?>
<head>
  <title>Stripe Subscription Checkout</title>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
  <script type="text/javascript">
     var stripe = Stripe('pk_test_51JqtqcH7cbmE6hoEImeSJS8DxZ0CxvnSV698V2FzijXELxQdwSXEfkAR2N7EfhgGWvZOihNnNMMTkwOKj48KEqNU002MzdJhDK');
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          // If `redirectToCheckout` fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using `error.message`.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          



  </script>
  
</body>

