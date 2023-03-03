@extends('layouts.layout')
@section('container')
  <div class="container-fluid m-0 p-0">
    <div class="reviews-section-hero">
      <div class="container">
        <div class="text text-center">
          <h1>고객 후기</h1>
          <h3>xxx에서 구매한 후기를 남겨주세요.</h3>
          <p>남겨주신 후기 종류에 따라 적립금을 지급해 드립니다.<br>리뷰 적립금은 구매 1건당(9,000원 이상) 1번의 적립금만 지급됩니다.</p>
        </div>
        <div class="row counts">
          <div class="col-12 col-md-6 col-lg-4 count mb-5 mb-lg-0">
            <div class="img">
              <img src="{{ asset('front_asset/images/부제목_추가의_사본의_사본-3.png')}}" alt="">
            </div>
            <h3>2줄이상의<br>텍스트 리뷰</h3>
            <h1>1,000원</h1>
          </div>
          <div class="col-12 col-md-6 col-lg-4 count mb-5 mb-lg-0">
            <div class="img">
              <img src="{{ asset('front_asset/images/부제목_추가의_사본의_사본-.png')}}" alt="">
            </div>
            <h3>비교<br>사진리뷰</h3>
            <h1>2,000원</h1>
          </div>
          <div class="col-12 col-lg-4 count mb-4">
            <div class="img">
              <img src="{{ asset('front_asset/images/부제목_추가의_사본의_사본-2.png')}}" alt="">
            </div>
            <h3>사진 리뷰를 포함한<br>블로그나 인스타그램 리뷰</h3>
            <h1>4,000원</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="reviews-section-table">
      <div class="container p-3">
        <div class="row">
          <div class="col-12 justify-content-right text-right">
            <ul class="list-group list-group-horizontal border-0 float-right table-nav">
              <li class="list-group-item border-0 text-primary"><a href="?" class="{{ !request()->order? 'active': '' }}"><i class="bi bi-check-lg"></i>&nbsp; Newest</a></li>
              <li class="list-group-item border-0"><a href="?order=like" class="{{ request()->order === 'like'? 'active': '' }}"><i class="bi bi-check-lg"></i>&nbsp; Popularity</a></li>
            </ul>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Number</th>
                  <th>Product Type</th>
                  <th>Title</th>
                  <th>Grade</th>
                  <th>Writer</th>
                  <th>Views</th>
                </tr>
              </thead>
              <tbody>
                @foreach($feedback as $list)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->product_type ?? '' }}</td>
                  <td>{{ $list->subject ?? '' }}</td>
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
                  <td>{{ auth()->user()->name }}</td>
                  <td>12310</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="banner d-flex align-items-center justify-content-between flex-wrap">
            <div class="text mb-4 mb-lg-0">
              <h1>{{ $review->title ?? '' }}</h1>
              <p>{{ $review->description ?? '' }}</p>
            </div>
            <div>
              <button href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal1" type="button" style="background-color: #715EFF" class="btn-cta d-flex justify-content-center align-items-end btn-primary text-black">
                <img src="{{ asset('front_asset/images/icons/pen-paper.svg') }}" alt=""> 리뷰를 작성
              </button>
            </div>
            {{-- model start hree --}}
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" style="background-color:#e75e3e">
                          <h5 class="modal-title text-white" id="exampleModalLabel"> 리뷰를 작성</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="model-body container">
                          <form method="POST" action="{{ route('front.feedback.store') }}" enctype="multipart/form-data">
                            @csrf
                              <div class="row mt-3">
                                  <div class="col-md-12">
                                      <select class="form-select" aria-label="Default select example" name="product">
                                          <option selected>상품 유형</option>
                                          @foreach($sub_category as $subcategory)
                                          <option>{{ $subcategory->title ?? '' }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                              <div class="row mt-3">
                                  <div class="col-md-12">
                                      <div class="rating">
                                          <input type="radio" name="rating" value="5" id="5"><label for="5" style="font-size:60px;">☆</label>
                                          <input type="radio" name="rating" value="4" id="4"><label for="4" style="font-size:60px;">☆</label>
                                          <input type="radio" name="rating" value="3" id="3"><label for="3" style="font-size:60px;">☆</label>
                                          <input type="radio" name="rating" value="2" id="2"><label for="2" style="font-size:60px;">☆</label>
                                          <input type="radio" name="rating" value="1" id="1"><label for="1" style="font-size:60px;">☆</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row mt-3">
                                  <div class="col-md-12">
                                      <label> 리뷰를 작성</label>
                                      <input type="text" placeholder="제목을 입력하세요" class="form-control" name="subject">
                                      <textarea name="description" class="form-control mt-3" style="height:100px" placeholder="리뷰를 3줄 이상 작성하셔야 적립금 1,000원을 드립니다. 서비스 전후 비교사진을 첨부하시면 적립금 2,000원을 드립니다."></textarea>
                                  </div>
                              </div>
                              <div class="row mt-3 ">
                                  <div class="col-md-12" style="background-color: #F6F6F6;">
                                      <div class="row mt-3 d-flex align-items-center">
                                          <div class="col-md-6">
                                              <i class="bi bi-plus-circle" style="font-size:100px; margin-left:100px"></i>
                                          </div>
                                          <div class="col-md-6">
                                              <h3>파일 첨부</h3>
                                          </div>
                                      </div>
                                      <p class="text-center">
                                          최대 3개까지 첨부 가능 (jpg, png , jpeg)</p>
                                      <div>
                                          <input type="file" style="opacity:-100" name="image">
                                      </div>
                                  </div>
                              </div>
                              <div class="row" style="background-color: #EDEDED;width:106%;height:50px"></div>
                              <p> ※ 이용정책에 맞지 않는 리뷰를 작성하시면 예고 없이 삭제될 수 있습니다.</p>
                      </div>
                      <div style="margin:0px auto;" class="mb-3">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"> 닫다 </button>
                          <button type="submit" class="btn text-white" style="background-color:#e75e3e">입력완료</button>
                      </div>
                      </form>

                  </div>
              </div>
          </div>
            {{-- model end hree --}}
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <img src="{{ asset('front_asset/images/icons/arrow-left-grey.png') }}" alt="">
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">77</a></li>
              <li class="page-item"><a class="page-link" href="#">78</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <img src="{{ asset('front_asset/images/icons/arrow-right-grey.png') }}" alt="">
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

  </div>
@endsection