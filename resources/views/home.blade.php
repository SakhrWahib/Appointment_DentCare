<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body >


        <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-flex justify-content-between align-items-center">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <small class="py-2">
                    <i class="far fa-clock text-primary me-2"></i>
                    اليوم: {{ strftime('%A') }}
                </small>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <a href="{{ route('login') }}" class="btn btn-primary">تسجيل الدخول</a>
            </div>
        </div>



        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">


                    <a href="{{ route('contact') }}"class="nav-item nav-link">تواصل</a>
                    <a href="about.html" class="nav-item nav-link">حول</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">الخدمات</a>
                </div>
                                    <a href="{{ url('/') }}" class="nav-item nav-link active">الرئيسية</a>

                <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary py-2 px-4 ms-3">حجز موعد</a>

            </div>
        </nav>
                    <div class="modal fade" id="searchModal" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex align-items-center justify-content-center">
                                    <div class="input-group" style="max-width: 600px;">
                                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Full Screen Search End -->


                    <!-- Carousel Start -->
                    <div class="container-fluid p-0">
                        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="img/carousel-1.jpg" alt="صورة">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 900px;">
                                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">احفظ صحة أسنانك</h5>
                                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">تلقي أفضل علاجات الأسنان ذات الجودة العالية</h1>
                                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">موعد</a>
                                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">اتصل بنا</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="img/carousel-2.jpg" alt="صورة">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 900px;">
                                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">احفظ صحة أسنانك</h5>
                                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">تلقي أفضل علاجات الأسنان ذات الجودة العالية</h1>
                                            <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">موعد</a>
                                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">اتصل بنا</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">السابق</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">التالي</span>
                            </button>
                        </div>
                    </div>
                    <!-- Carousel End -->


                    <!-- Banner Start -->
                    
                    <!-- Banner Start -->
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-5">
                                    <div class="section-title mb-4">
                                        <h5 class="position-relative d-inline-block text-primary text-uppercase">خطة التسعير</h5>
                                        <h1 class="display-5 mb-0">نقدم أسعارًا عادلة لعلاجات الأسنان</h1>
                                    </div>
                                    <p class="mb-4">النص هنا يمثل وصفًا لخطة التسعير، يمكنك وضع تفاصيل حول الأسعار والخدمات المتوفرة.</p>
                                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">اتصل للحجز</h5>
                                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+967772627882</h1>
                                </div>
                                <div class="col-lg-7">
                                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                                        <div class="price-item pb-4">
                                            <div class="position-relative">
                                                <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                                    <h2 class="text-primary m-0">1000 ر.ي</h2>
                                                </div>
                                            </div>
                                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                                <h4>تبييض الأسنان</h4>
                                                <hr class="text-primary w-50 mx-auto mt-0">
                                                <div class="d-flex justify-content-between mb-3"><span>معدات حديثة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>طبيب أسنان محترف</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-2"><span>دعم الاتصال على مدار الساعة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">حجز موعد</a>
                                            </div>
                                        </div>
                                        <div class="price-item pb-4">
                                            <div class="position-relative">
                                                <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                                    <h2 class="text-primary m-0">1500 ر.ي</h2>
                                                </div>
                                            </div>
                                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                                <h4>زرع الأسنان</h4>
                                                <hr class="text-primary w-50 mx-auto mt-0">
                                                <div class="d-flex justify-content-between mb-3"><span>معدات حديثة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>طبيب أسنان محترف</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-2"><span>دعم الاتصال على مدار الساعة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary py-2 px-4 ms-3">حجز موعد</a>
                                            </div>
                                        </div>
                                        <div class="price-item pb-4">
                                            <div class="position-relative">
                                                <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                                    <h2 class="text-primary m-0">8000 ر.ي</h2>
                                                </div>
                                            </div>
                                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                                <h4>تنظيف الجذور</h4>
                                                <hr class="text-primary w-50 mx-auto mt-0">
                                                <div class="d-flex justify-content-between mb-3"><span>معدات حديثة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-3"><span>طبيب أسنان محترف</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <div class="d-flex justify-content-between mb-2"><span>دعم الاتصال على مدار الساعة</span><i class="fa fa-check text-primary pt-1"></i></div>
                                                <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary py-2 px-4 ms-3">حجز موعد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container py-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="offer-text text-center rounded p-5">
                                        <h1 class="display-5 text-white">وفّر 30٪ في فحص أسنانك الأول</h1>
                                        <p class="text-white mb-4">استمتع بخصم 30٪ عند الفحص الأول لأسنانك. تفضل بزيارة عيادتنا واستفد من هذا العرض الرائع الآن.</p>
                                        <a href="appointment.html" class="btn btn-dark py-3 px-5 me-3">حجز موعد</a>
                                        <a href="#" class="btn btn-light py-3 px-5">قراءة المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Start -->
                    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-7">
                                    <div class="section-title mb-4">
                                        <h5 class="position-relative d-inline-block text-primary text-uppercase">عنا</h5>
                                        <h1 class="display-5 mb-0">أفضل عيادة أسنان في العالم التي يمكنك الوثوق بها</h1>
                                    </div>
                                    <h4 class="text-body fst-italic mb-4">دولار الألم دولار النص السياحي. كليتا إيرات النص ولوريم ستيت لا لوريم سيت كليتا دو ماجنا دولور</h4>
                                    <p class="mb-4">تم تصميم الفقرة لتحتوي على النص البديل لصورة العنصر أو لوحة الشرائح. بالنسبة لـ HTML ، فإنه يمكن أن يكون كلمة أو جملة يمكن أن توضح الصورة أو المحتوى المعروض في العنصر أو لوحة الشرائح.</p>
                                    <div class="row g-3">
                                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>فائز بجائزة</h5>
                                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>طاقم محترف</h5>
                                        </div>
                                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>مفتوح على مدار الساعة طوال أيام الأسبوع</h5>
                                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>أسعار مناسبة</h5>
                                        </div>
                                    </div>
                                    <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">حجز موعد</a>
                                </div>
                                <div class="col-lg-5" style="min-height: 500px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About End -->


                    <!-- Appointment Start -->

                    <!-- Appointment End -->


                    <!-- Service Start -->

                    <!-- Service End -->


                    <!-- Offer Start -->

                    <!-- Offer End -->



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
                                        <h1 class="display-5 mb-0">نحن نقدم أفضل خدمات طب الأسنان بأعلى جودة</h1>
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
                                        <h3 class="text-white mb-3">احجز موعدًا</h3>
                                        <p class="text-white mb-3">من خلال الاتصال بنا، يمكنك الحصول على استشارة مجانية</p>
                                        <h2 class="text-white mb-0">+012 345 6789</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ```
                    <!-- Service End -->


                    <!-- Offer Start -->


                    <!-- Offer End -->


                    <!-- Pricing Start -->


                    <!-- Pricing End -->



                    <!-- Testimonial End -->


                    <!-- Team Start -->

                    <!-- Team End -->


                    <!-- Newsletter Start -->
                    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
                        <div class="container">
                            <div class="bg-primary p-5">
                                <form class="mx-auto" style="max-width: 600px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                        <button class="btn btn-dark px-4">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter End -->


                    <!-- Footer Start -->
                    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
                        <div class="container pt-5">
                            <div class="row g-5 pt-4">
                                <div class="col-lg-3 col-md-6">
                                    <h3 class="text-white mb-4">روابط سريعة</h3>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>الرئيسية</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>من نحن</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>خدماتنا</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>آخر المقالات</a>
                                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>اتصل بنا</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h3 class="text-white mb-4">الروابط الشهيرة</h3>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>الرئيسية</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>من نحن</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>خدماتنا</a>
                                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>آخر المقالات</a>
                                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>اتصل بنا</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h3 class="text-white mb-4">تواصل معنا</h3>
                                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>١٢٣ شارع، مذبح  صنعاء</p>
                                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>sakhr@example.com</p>
                                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>772627882</p>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <h3 class="text-white mb-4">تابعنا</h3>
                                    <div class="d-flex">
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid text-light py-4" style="background: #051225;">
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>.sakhr.</p>
                                </div>
                                <div class="col-md-6 text-center text-md-end">
                                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com"></a><br>
                                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">مذبح</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->


                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


                    <!-- JavaScript Libraries -->
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="lib/wow/wow.min.js"></script>
                    <script src="lib/easing/easing.min.js"></script>
                    <script src="lib/waypoints/waypoints.min.js"></script>
                    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                    <script src="lib/tempusdominus/js/moment.min.js"></script>
                    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
                    <script src="lib/twentytwenty/jquery.event.move.js"></script>
                    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

                    <!-- Template Javascript -->
                    <script src="js/main.js"></script>
                </body>

                </html>
