@extends('seller.layouts.layout')
@section('seller_page_title')
    Add Product
@endsection
@section('seller_layout')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add Product</h5>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('message'))

                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif


                    <form action="{{ route('vendor.product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="product_name" class="fw-bold mb-2">Give name for your product </label>
                        <input type="text" class="form-control mb-2" name="product_name"placeholder="Lenovo">
                        <label for="description" class="fw-bold mb-2">Description </label>
                        <textarea name="description" class="form-control mb-2" id="description" cols="30" rows="10"></textarea>
                        <label for="images" class="fw-bold mb-2">Upload your product images </label>
                        <input type="file" class="form-control mb-2" name="images[]" multiple>
                        <label for="sku" class="fw-bold mb-2">sku </label>
                        <input type="text" class="form-control mb-2" name="sku"placeholder="LXD3402">

                        <livewire:category-subcategory />

                         <label for="store_id" class="fw-bold mb-2">select your store for this product </label>
                        <select name="store_id" id="store_id" class="form-control mb-2">
                            @foreach($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                            @endforeach
                        </select>

                        <label for="regular_price" class="fw-bold mb-2">Product regular price </label>
                        <input type="number" class="form-control mb-2" name="regular_price">

                        <label for="discounted_price" class="fw-bold mb-2"> Discounted price (if any)</label>
                        <input type="number" class="form-control mb-2" name="discounted_price">

                        <label for="tax_rate" class="fw-bold mb-2">Tax</label>
                        <input type="number" class="form-control mb-2" name="tax_rate">

                        <label for="stock_quantity" class="fw-bold mb-2">Stock Quantity </label>
                        <input type="number" class="form-control mb-2" name="stock_quantity">

                         <label for="slug" class="fw-bold mb-2">Slug </label>
                        <input type="text" class="form-control mb-2" name="slug">

                         <label for="meta_title" class="fw-bold mb-2">Meta Title </label>
                        <input type="text" class="form-control mb-2" name="meta_title">

                         <label for="meta_description" class="fw-bold mb-2">Meta Description </label>
                        <input type="text" class="form-control mb-2" name="meta_description">

                        <button type="submit" class="btn btn-primary w-100 mt-2">Add Product</button>

                    </form>
                </div>
            </div>
           </div>
        </div>




@endsection
