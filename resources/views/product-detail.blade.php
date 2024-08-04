@extends ('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mt-5 mb-3">{{ $product->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="product-image">
                <img src="{{ $product->img_thumbnail }}" width="300px" class="img-fluid">
            </div>
            <div class="product-info mt-3">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Price</th>
                            <td>{{ $product->price_regular }}</td>
                        </tr>
                        <tr>
                            <th>Price_sale</th>
                            <td>{{ $product->price_sale }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-form border p-4 rounded">
                <form action="{{ route('cart.add') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="mb-3">
                        <label class="form-label"><b>Color</b></label>
                        @foreach($colors as $id => $name)
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio_color_{{ $id }}" name="product_color_id" value="{{ $id }}">
                            <label class="form-check-label" for="radio_color_{{ $id }}">{{ $name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Size</b></label>
                        @foreach($sizes as $id => $name)
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio_size_{{ $id }}" name="product_size_id" value="{{ $id }}">
                            <label class="form-check-label" for="radio_size_{{ $id }}">{{ $name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" class="form-control" min="1" required value="1" id="quantity" placeholder="Enter quantity" name="quantity">
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
