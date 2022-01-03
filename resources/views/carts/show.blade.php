<!DOCTYPE html>
<html>
    <head>
<title>Cart {{ $cart->cart_id }}</title>
    </head>
    <body>
        <h1>Cart {{ $cart->cart_id }}</h1>
            <ul>
                <li>Account ID: {{ $cart->account_id }}</li>
                <li>Product ID: {{ $cart->product_id }}</li>
                <li>Quantyti: {{ $cart->quantyti }}</li>
                <li>Status: {{ $cart->status }}</li>
            </ul>
    </body>
</html>