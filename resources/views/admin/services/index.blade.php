@extends('admin.layouts.layout')
@section('container')
<div class="main-body">

    <div class="page-title-actions">
        <div class="d-inline-block dropdown d-flex justify-content-end mt-2">
          <a class="btn-shadow btn btn-info" href="{{ route('admin.services.create') }}">
            Add  Services
          </a>
        </div>
      </div>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                @include('admin.partial.alert')
                <div class="card">
                    <div class="card-header">
                        <h1>Services</h1>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Add Service</h4>
                        <div class="table-responsive ">
                            <table class="mb-0 table ">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Title</th>
                                  <th>Images</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($service as $list)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $list->title ?? '' }}</td>
                                  <td><img src="{{ asset('storage/'.$list->image) }}" alt="" style="width: 100px; height:100px"></td>
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
                                            <a href="{{ route('admin.services.status',['id'=>$list->id,'status'=>1]) }}"
                                              class="nav-link">Active
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="{{ route('admin.services.status',['id'=>$list->id,'status'=>0]) }}"
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
                                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                                        <ul class="nav flex-column">
                                          <li class="nav-item">
                                            <a href="{{ route('admin.services.edit',$list->id) }}" class="nav-link">
                                              <i class="nav-link-icon pe-7s-chat"> </i><span>Edit</span>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);"
                                              data-id="{{ route('admin.services.destroy',$list->id) }}">
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
        <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
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
