@extends('admin.layouts.layout')
@section('container')
<div class="main-body w-100">
    <div class="page-wrapper">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-file-code bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Sub Categories</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a class="btn-shadow btn btn-primary text-white" href="{{ route('admin.subcategory.index') }}">
                                    Back
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="title">Add Category</h4>
                            <form method="POST" action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-12 m-2">
                                        <label for="menu" class="">Select Category</label>
                                        <select name="category_id" id="parent_id" class="form-control" value="{{ old('category_id') }}">
                                            <option value="">Select Category</option>
                                            @foreach ($category as $list)
                                            <option value="{{ $list->id }}">{{ $list->title ?? '' }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 m-2">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 m-2">
                                        <label for="Image">Image</label>
                                        <input name="image" type="file" class="form-control" value="{{ old('image') }}">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 m-2">
                                        <label for="color">Hover Color</label>
                                        <input name="color" type="color" class="form-control" value="{{ old('color') }}" style="height: 50px">
                                        @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 m-2">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" style="height: 100px">{{ old('description') }}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 m-2">
                                        <div class="Quantity">
                                            <div class="row">
                                                <div class="col-5">
                                                    <p class="flex-grow-1 text-center"><strong>Add Quantity & Price & Sale Price</strong></p>
                                                </div>
                                            </div>
                                            <div class="Quantity-body mb-4">
                                                @if(session()->has('price_error'))
                                                <span class="text-danger">{{ session()->get('price_error') }}</span>
                                                @endif
                                                @if(old('sale_price'))
                                                @for($i=0; $i<count(old('sale_price')); $i++)
                                                <div class="row mb-3">
                                                    <div class="col-3 pl-1 pr-1">
                                                        <label for="Title">Title</label>
                                                        <input type="text" class="form-control" name="ptitle[]" value="{{ old('ptitle.'.$i) }}" placeholder="Title">
                                                    </div>
                                                    <div class="col-2 pl-1 pr-1">
                                                        <label for="Qty">Quantity</label>
                                                        <input type="text" class="form-control" name="qty[]" value="{{ old('qty.'.$i) }}" placeholder="Quantity">
                                                    </div>
                                                    <div class="col-2 pl-1 pr-1">
                                                        <label for="Original Price">  Price</label>

                                                        <input type="text" class="form-control" name="original_price[]" placeholder="Price" value="{{ old('original_price.'.$i) }}">
                                                        @error('original_price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class=" col-2 pl-1 pr-1">
                                                        <label for="Sale Price"> Sale Price</label>

                                                        <input type="text" class="form-control" name="sale_price[]" value="{{ old('sale_price.'.$i) }}" placeholder=" Sale Price">
                                                        @error('sale_price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class=" col-2 pl-1 pr-1 d-flex align-items-center
                                                            justify-content-center">
                                                        <button type="button" class="btn btn-danger" onclick="deleteQty(event)">X</button>
                                                    </div>
                                                </div>
                                                @endfor
                                                @endif
                                            </div>
                                            @if (session()->has('error1'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                              {{ session()->get('error1') }}
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            @endif
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning add-timeslot-btn" onclick="AddQty(event)" data-day-num="0">Add Multiple</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="mt-1 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteQty(event) {
        event.target.closest('.row').remove();
    }

    function AddQty(event) {
        const url = event.target.closest('.Quantity').querySelector('.Quantity-body');
        $(url).append('<div class="row mb-3">' +
            '<div class="col-3 pl-1 pr-1">' +
            '<input type="text" class="form-control" name="ptitle[]"" placeholder="Title">' +
            '</div>' +
            '<div class="col-2 pl-1 pr-1">' +
            '<input type="text" class="form-control" name="qty[]"" placeholder="Quantity">' +
            '</div>' +
            '<div class="col-2 pl-1 pr-1">' +
            '<input type="text" class="form-control" name="original_price[]"" placeholder="Price" >' +
            '</div>' +
            '<div class="col-2 pl-1 pr-1">' +
            '<input type="text" class="form-control" name="sale_price[]" placeholder="Sale Price" >' +
            '</div>' +
            '<div class="col-1 pl-1 pr-1 d-flex align-items-center justify-content-center">' +
            '<button type="button" class="btn btn-danger" onclick="deleteQty(event)">X</button>' +
            '</div>' +
            '</div>');
    }

</script>
@endsection
