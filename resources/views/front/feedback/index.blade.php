@extends('admin.layouts.layout')
@section('container')
<div class="main-body">
  <div class="page-wrapper">
    <div class="page-header card">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <div class="page-header-title">
            <i class="icofont icofont-file-code bg-c-blue"></i>
            <div class="d-inline">
              <h4>Feedback</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-block">
              @include('admin.partial.alert')
              <h4 class="sub-title">Feedback</h4>
              <div class="table-responsive ">
                <table class="mb-0 table ">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>User Name</th>
                      <th>Product Type</th>
                      <th>Rating</th>
                      <th>Subject</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($feedbacks as $list)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ auth()->user()->name }}</td>
                      <td>{{ $list->product_type ?? '' }}</td>
                      <td>
                      @for($i=1; $i<=$list->rating; $i++)
                      <span class="" >
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" fill="#e39912" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                      </span>
                
                      @endfor

                      @for($i=1; $i<=(5 - $list->rating); $i++)
                      <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" fill="white" viewBox="0 0 576 512" style="stroke:#e39912; stroke-width:40px"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        
                          
                      </span>
             
                      @endfor
                    </td>
                      <td>{{ $list->subject ?? '' }}</td>
                      <td><img src="{{ asset('storage/'.$list->image) }}" alt="" style="width: 100px; height:100px">
                      </td>
                      <td>
                        <div class="dropdown d-inline-block show">
                          @php
                          if($list->status==1){
                          $btn='success';
                          }else{
                          $btn='danger';
                          }
                          @endphp
                          <button type="button" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown"
                            class="mb-2 mr-2 dropdown-toggle btn btn-{{ $btn }}">
                            @if ($list->status==1)
                            Active
                            @else
                            Dective
                            @endif
                          </button>
                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu"
                            x-placement="top-start"
                            style="position: absolute; transform: translate3d(0px, -362px, 0px); top: 0px; left: 0px; will-change: transform;min-width: 9rem;">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a href="{{ route('front.feedback.status',['id'=>$list->id,'status'=>1]) }}"
                                  class="nav-link">Active
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ route('front.feedback.status',['id'=>$list->id,'status'=>0]) }}"
                                  class="nav-link">Deactive</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown d-inline-block">
                          <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                            class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                          </button>
                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu"
                            style="min-width: 9rem;">
                            <ul class="nav flex-column">
                              {{-- <li class="nav-item">
                                <a href="{{ route('admin.services.edit',$list->id) }}" class="nav-link">
                                  <i class="nav-link-icon pe-7s-chat"> </i><span>Edit</span>
                                </a>
                              </li> --}}
                              <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link" type="button"
                                  onclick="delete_service(this);"
                                  data-id="{{ route('front.feedback.destroy',$list->id) }}">
                                  <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  style="padding-right: 17px;" aria-modal="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Are you Sure to delete this!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="" method="post" id="delete_form">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>
@endsection