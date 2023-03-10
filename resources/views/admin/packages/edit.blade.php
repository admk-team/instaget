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
                                <h4>Edit Packages</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a class="btn-shadow btn btn-primary text-white"
                                        href="{{ route('admin.package.index') }}">
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
                                <h4 class="title">Edit Package</h4>
                                <form method="POST" action="{{ route('admin.package.update', $package->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <div class="col-12 m-2">
                                            <label for="title">Title</label>
                                            <input type="text" name="title"
                                                value="{{ old('title') ?? $package->title }}" class="form-control"
                                                placeholder="Title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 m-2">
                                            <label for="menu" class="">Category</label>
                                            <select name="category_id" id="category_id" class="form-control category_id" data-url="{{ '/admin/get/subcategories' }}"
                                                value="{{ old('category_id') }}">
                                                <option value="">Select Category</option>
                                                @foreach ($category as $list)
                                                    <option value="{{ $list->id }}" @if($package->category_id == $list->id) selected @endif>{{ $list->title ?? '' }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12 m-2">
                                            <label for="menu" class="">Sub Category</label>
                                            <select name="subcategory_id" id="subcategory_id" class="form-control"
                                                value="{{ old('subcategory_id') }}">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                            @error('parent_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12 m-2">
                                            <label for="title">Original Price</label>
                                            <input type="text" onkeypress=" return isNumberKey(event);"
                                                name="original_price"
                                                value="{{ old('title') ?? $package->original_price }}" class="form-control"
                                                placeholder="Original Price">
                                            @error('original_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 m-2">
                                            <label for="title">Sale Price</label>
                                            <input type="text" onkeypress=" return isNumberKey(event);" name="sale_price"
                                                value="{{ old('sale_price') ?? $package->sale_price }}"
                                                class="form-control" placeholder="Sale Price ">
                                            @error('sale_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 m-2">
                                          <label for="qty">Quantity</label>
                                          <input type="number" class="form-control" name="quantity" value="{{ old('qty') ?? $package->qty }}">
                                          @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
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
    <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        $('.category_id').change( function(){
    	let url = $(this).data('url');
      let id = $(this).val();
      console.log(url);
      $.ajax({
        type : 'get',
        url : url+'/'+id,
        success: function(response){
          $.each(response , function (index , value) {
            $('#subcategory_id').html('')
            $('#subcategory_id').append('<option value="'+value.id+'">'+value.title+'</option>')
          })
        }
      })

    //   $("#subcategory_id"+demovalue).show();
    });

    </script>
@endsection
