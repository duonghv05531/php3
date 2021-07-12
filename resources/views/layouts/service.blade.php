<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Dịch vụ</h6>
            <h1 class="display-5 text-uppercase mb-0">Những dịch vụ tuyệt vời dành cho thú cưng của bạn</h1>
        </div>
        <div class="row g-5">
            @foreach($service as $s)
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-{{$s->image}} display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">{{$s->name}}</h5>
                        <p>{{$s->desc}}</p>
                        <a class="text-primary text-uppercase" href="">Xem chi tiết<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>