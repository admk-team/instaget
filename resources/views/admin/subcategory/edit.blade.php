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
                            <h4>Edit Subcategory</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a class="btn-shadow btn btn-primary text-white"
                                    href="{{ route('admin.subcategory.index') }}">
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
                        <h4 class="title">Edit Subategory</h4>
                        <form  method="POST" action="{{ route('admin.subcategory.update' , $sub_category->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <div class="col-lg-12 m-2">
                                <label for="menu" class="">Select Category</label>
                                <select name="sub_category" id="parent_id" class="form-control" value="{{ old('sub_category') }}">
                                  <option value="">Select Category</option>
                                  @foreach ($category as $list)
                                    <option value="{{ $list->id }}" {{ $sub_category->category_id == $list->id ? 'selected' : '' }} >{{ $list->title ?? '' }}</option>
                                  @endforeach
                                </select>
                                  @error('sub_category')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 m-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') ?? $sub_category->title }}" class="form-control" placeholder="Title">
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
                                    <img src="{{ asset('storage/'.$sub_category->image) }}" alt="" style="width: 100px; height:100px">

                                </div>
                                <div class="col-12 m-2">
                                    <label for="color">Color</label>
                                    <input type="color" name="color" value="{{ $sub_category->color ?? '' }}" class="form-control" style="height: 50px">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-12 m-2">
                                    <div class="Quantity">
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="flex-grow-1 text-center"><strong>Add Quantity & Original
                                                        Price & Sale Price</strong></p>
                                            </div>
                                        </div>
                                        <div class="Quantity-body mb-4">
                                         @foreach($packages ?? [] as   $package)
                                         
                                         <input type="hidden" name="pid[]" value="{{ $package->id ?? '' }}">
                                            <div class="row mb-3">
                                                <div class="col-1 pl-1 pr-1">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control" name="ptitle[]" value="{{ $package->title ?? '' }}">
                                                   
                                                </div>
                                                <div class="col-3 pl-1 pr-1">
                                                    <label for="Qty">Quantity</label>
                                                    <input type="text" class="form-control" name="qty[]" value="{{ $package->qty ?? '' }}">
                                                   
                                                </div>
                                                <div class="col-3 pl-1 pr-1">
                                                    <label for="Original Price">Original Price</label>
                                                    <input type="text" class="form-control" name="original_price[]" value="{{ $package->sale_price ?? '' }}">
                                                
                                            </div>
                                            <div class=" col-3 pl-1 pr-1">
                                                    <label for="Sale Price">Sale Price</label>
                                                    <input type="text" class="form-control"
                                                        name="sale_price[]" value="{{ $package->original_price ?? '' }}">
                                                        
                                            </div>
                                            <div class=" col-2 pl-1 pr-1 d-flex align-items-center
                                                        justify-content-center">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="deleteQty(event)">X</button>
                                                </div>
                                            </div>
                                         
                                            @endforeach
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-warning add-timeslot-btn"
                                                onclick="AddQty(event)" data-day-num="0">Add Multiple</button>
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

  function AddQty(event){
    const url = event.target.closest('.Quantity').querySelector('.Quantity-body');
    $(url).append('<div class="row mb-3">' +
                              '<div class="col-1 pl-1 pr-1">' +
                                '<input type="text" class="form-control" name="ptitle[]"">' +
                              '</div>' +
                              '<div class="col-3 pl-1 pr-1">' +
                                '<input type="text" class="form-control" name="qty[]"">' +
                              '</div>' +
                              '<div class="col-3 pl-1 pr-1">' +
                                '<input type="text" class="form-control" name="original_price[]"">' +
                              '</div>' +
                              '<div class="col-3 pl-1 pr-1">' +
                                '<input type="text" class="form-control" name="sale_price[]">' +
                              '</div>' +
                              '<div class="col-1 pl-1 pr-1 d-flex align-items-center justify-content-center">' +
                                '<button type="button" class="btn btn-danger" onclick="deleteQty(event)">X</button>' +
                              '</div>' +
                            '</div>');
  }

</script>
@endsection
