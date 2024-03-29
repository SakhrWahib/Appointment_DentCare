@extends('master')

@section('sakhr')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                    <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title mb-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">خدماتنا</h5>
                    <h1 class="display-5 mb-0">نقدم أفضل خدمات طب الأسنان ذات الجودة العالية</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">تجميل الأسنان</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">زراعة الأسنان</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">جسور الأسنان</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">تبييض الأسنان</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                    <h3 class="text-white mb-3">حجز موعد</h3>
                    <p class="text-white mb-3">إنشاء موعد لطبيب الأسنان الخاص بك اليوم</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
