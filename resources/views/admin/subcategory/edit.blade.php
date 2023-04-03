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
                        <form  method="POST" action="{{ route('admin.subcategory.update' , $sub_category->id) }}" enctype="multipart/form-data" id="checkvalue">
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
                                    <input type="color" name="color" value="{{ old('color') ?? $sub_category->color  }}" class="form-control" style="height: 50px">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-12 m-2">
                                    <label for="color">Description</label>
                                    <textarea name="description" class="form-control" style="height: 100px">{{ old('color') ?? $sub_category->description  }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 m-2">
                                    <div class="Quantity">
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="flex-grow-1 text-center"><strong>Add Quantity & 
                                                        Price & Sale Price</strong></p>
                                            </div>
                                        </div>
                                        <div class="Quantity-body mb-4">
                                            <?php $i=0; ?>
                                         @foreach($packages ?? [] as   $package)
                                         <input type="hidden" name="pid[]" value="{{ $package->id ?? '' }}">
                                            <div class="row mb-3">
                                                <div class="col-3 pl-1 pr-1">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control" name="ptitle[]" value="{{ old('ptitle.'.$i) ?? $package->title }}" placeholder="Title">
                                                   
                                                </div>
                                                <div class="col-1 pl-1 pr-1">
                                                    <label for="Qty">Quantity</label>
                                                    <input type="text" class="form-control" name="qty[]" value="{{ old('qty.'.$i) ?? $package->qty  }}" placeholder="Quantity">
                                                </div>
                                                <div class="col-3 pl-1 pr-1">
                                                    <label for="sub_title">Sub Title</label>
                                                    <input type="text" class="form-control" name="sub_title[]" value="{{ old('sub_title'.$i) ?? $package->sub_title }}" placeholder="Sub Title">
                                                </div>
                                                <div class="col-2 pl-1 pr-1">
                                                    <label for="Original Price">Price</label>
                                                    <input type="text" class="form-control orignial" name="original_price[]"  value="{{ old('original_price.'.$i) ?? $package->original_price ?? '' }}" placeholder="Price">
                                                
                                            </div>
                                                <div class=" col-2 pl-1 pr-1">
                                                    <label for="Sale Price"> Sale Price</label>
                                                    <input type="text" class="form-control"
                                                        name="sale_price[]" value="{{ old('sale_price.'.$i) ?? $package->sale_price ?? '' }}"  placeholder=" Sale Price">      
                                            </div>
                                                
                                    
                                                <div class=" col-1 pl-1 pr-1 d-flex align-items-center
                                                justify-content-center">
                                            <button type="button" class="btn btn-danger deleteQty" onclick="deleteQty(event)" data-url="{{ url('admin/delete/packages/'.$package->id ?? '') }}">X</button>
                            
                                        </div>
                                                
                                            </div>
                                         
                                            @endforeach
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
                                            <button type="button" class="btn btn-warning add-timeslot-btn"
                                                onclick="AddQty(event)"  data-day-num="0">Add Multiple</button>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <button class="mt-1 btn btn-primary" >Submit</button>
                        </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>

// $('#checkvalue').submit(function(e){
// e.preventDefault();
//     let original = $("[name='original_price[]']");
//     let sale = $("[name='sale_price[]']");
//     for(var i = 0; i <original.length; i++){
//         var original_value = original[i];
//         var sale_value = sale[i];
//         if(original_value.value < sale_value.value){
//             console.log('Ready to submit');
//         }else{
//             console.log('Original price must be less than sale price')
//         }
//     //     console.log("original["+i+"].value="+original_value.value);
//     //  console.log("sale["+i+"].value="+sale_value.value);
//     }
// })
// var inps = document.getElementsByName('original_price[]');
// var sale = document.getElementsByName('sale_price[]');
// for (var i = 0; i <inps.length; i++) {
// var inp=inps[i];
// var sale_price = sale[i];
// if(inp.value < sale_price.value){
//     console.log("Ya ready to continue");
// // }
// //     console.log("pname["+i+"].value="+inp.value);
// //     console.log("sname["+i+"].value="+sale_price.value);

// }else{
//     console.log('Sale price must be less than original price');
// }
// }

</script>
<script>


    function deleteQty(event) {
       
     event.target.closest('.row').remove();
  }

  $('.deleteQty').click(function(){
    let url = $(this).data('url');
    $.ajax({
            url:url,
            type:"GET",
            dataType:'json',
            success:function(data){
             console.log(true)
            }
    })
  })


  function AddQty(event){
    const url = event.target.closest('.Quantity').querySelector('.Quantity-body');
    $(url).append('<div class="row mb-3">' +
                              '<div class="col-3 pl-1 pr-1">' +
                                '<input type="text" class="form-control"  placeholder="Title" name="ptitle[]">' +
                              '</div>' +
                              '<div class="col-1 pl-1 pr-1">' +
                                '<input type="text" class="form-control" placeholder="Quantity" name="qty[]">' +
                              '</div>' +
                              '<div class="col-3 pl-1 pr-1">'+
                                '<input type="text" class="form-control" name="sub_title[]" placeholder="Sub title">'
                                '</div>'+
                              '<div class="col-2 pl-1 pr-1">' +
                                '<input type="text" class="form-control" placeholder="Sale Price" name="original_price[]">' +
                              '</div>' +
                              '<div class="col-2 pl-1 pr-1">' +
                                '<input type="text" class="form-control" placeholder=" Price" name="sale_price[]">' +
                              '</div>' +
                              '<div class="col-1 pl-1 pr-1 d-flex align-items-center justify-content-center">' +
                                '<button type="button" class="btn btn-danger" onclick="deleteQty(event)">X</button>' +
                              '</div>' +
                            '</div>');
  }

</script>
@endsection
