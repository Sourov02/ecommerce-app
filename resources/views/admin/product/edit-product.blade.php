@extends('admin.master')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Edit Product Form</h3>
                        {{ session('message') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="test" value="{{ $product->product_name }}" name="product_name" />
                                <label for="inputEmail">Product Name</label>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" value="{{ $product->category_name }}" name="category_name" />
                                        <label for="inputFirstName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" value="{{ $product->brand_name }}" name="brand_name" />
                                        <label for="inputLastName">Brand name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                                <label for="inputEmail">Description</label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" name="image" id="inputLastName" type="file" />
                                    <img src="{{ asset($product->image) }}" class="img-fluid" style="height: 50px; width: 50px" alt="img">
                                </div>
                            </div>


                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary">Save Product</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
