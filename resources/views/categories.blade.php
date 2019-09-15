
<!-- Best sales -->
<!-- Văn học, Phát triển bản thân, Tài chính, Quản trị, Maketing -->

<div class="mt-5">

@foreach(range(1,4) as $index)
  <h2 class="h2 d-inline pr-1 pr-md-3">Bán chạy trong tuần</h2>
  <a href="#"><button class="btn btn-sm btn-light text-primary border-0 mt-n2">Xem thêm</button></a>
  <hr>
  <div class="row">
    @foreach(range(1,8) as $index)
    <div class="col-12 col-md-3 pb-1 pb-md-3">
      <a href="#" class="text-decoration-none text-dark">
        <div class="card border-0" style="//width: 15rem;">
          <img src="{{ asset('images/books/matbiec.jpg') }}" class="card-img-top" alt="img">
          <div class="card-body text-center pt-0">
            <h6 class="card-title mb-1">Mắt biếc</h6>
            <p class="mb-1 text-muted">Nguyễn Nhật Ánh</p>
            <p class="text-muted d-inline align-top" style="text-decoration: line-through; font-size: 0.75rem">135.000đ</p>
            <p class="font-weight-bold d-inline pl-2 pl-md-4">-20%</p>
            <p class="text-danger font-weight-bold mb-1">120.000đ</p>
            <a href="#" class="btn btn-danger">Thêm vào giỏ</a>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
@endforeach

</div>