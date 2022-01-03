
<!DOCTYPE html>
<html>
    <head>
<title>Product {{ $produc-> product_id }}</title>
    </head>
    <body>
        <h1> Product{{ $product->product_id }}</h1>
            <ul>
                <li>ID: {{ $product->product_id }}</li>
                <li>PRODUCT TYPE ID: {{ $product->product_type_id }}</li>
                <li>NAME: {{ $product->name }}</li>
                <li>TRADEMARK: {{ $product->trademark }}</li>
                <li>PRODUCTION: {{ $product->production }}</li>
                <li>MATERIAL : {{ $product->material }}</li>
                <li>STYLE: {{ $product->style }}</li>
                <li>COLORS: {{ $product->colors}}</li>
                <li>LONGS: {{ $product->longs }}</li>
                <li>WIDTH: {{ $product->width }}</li>
                <li>INSURANCE: {{ $product->insurance }}</li>
                <li>DESCRIPTION: {{ $product->description }}</li>
                <li>STATUS: {{ $product->status }}</li>
            </ul>
    </body>
</html>