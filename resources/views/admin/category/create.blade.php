@extends('admin.layouts.layout')
@section('admin_page_title')
    create category
@endsection
@section('admin_layout')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.cat') }}" method="post">
                     @csrf
                     <label for="Category_name" class="fw-bold mb-2">Give name for your category </label>
                     <input type="text"  class="form-control" name="category_name"placeholder="computer">
                     <button type="submit" class="btn btn-primary w-100 mt-2">Add Category</button>

                    </form>
                </div>
            </div>


        </div>
        <div>
        @endsection
