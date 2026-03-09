@extends('seller.layouts.layout')
@section('seller_page_title')
    create New Store
@endsection
@section('seller_layout')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Store</h5>
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

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif


                    <form action="{{ route('create.store') }}" method="post">
                        @csrf
                        <label for="store_name" class="fw-bold mb-2">Give name for your store </label>
                        <input type="text" class="form-control" name="store_name"placeholder="sifat store">

                        <label for="details" class="fw-bold mb-2">Description of your store</label>
                       <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>

                        <label for="slug" class="fw-bold mb-2">slug</label>
                        <input type="text" class="form-control" name="slug"placeholder="sifat store">

                        <button type="submit" class="btn btn-primary w-100 mt-2">create store</button>

                    </form>
                </div>
            </div>


        </div>
        <div>
        @endsection
