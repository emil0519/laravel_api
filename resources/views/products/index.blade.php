<!DOCTYPE html>
<html>
    <h1>Product</h1>
@foreach ($data as $product)
<p>{{ $product }} </p>
@endforeach
</html>