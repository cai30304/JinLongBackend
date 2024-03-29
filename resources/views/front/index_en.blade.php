@extends('layouts.template_en')

@section('recaptcha')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" integrity="sha512-aMup4I6BUl0dG4IBb0/f32270a5XP7H1xplAJ80uVKP6ejYCgZWcBudljdsointfHxn5o302Jbnq1FXsBaMuoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/css/index.css">

<style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }

    main #news .container .link .news_title {
        width: calc(100% - 120px);
    }

    @media(max-width: 575px) {
        main #news .container .link .news_pic {
            width: 90px;
            height: 90px;
        }

    }
</style>
@endsection

@section('content')
    <main>
        <section id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($banners as $banner)
                        <div class="swiper-slide">
                            <img width="100%" src="{{$banner->img}}" alt="{{$banner->alt}}">
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <section id="about_us">
            <div class="container">
                <div class="content row">
                    <div class="col-12 col-md-3">
                        <div class="company">
                            <span class="title">
                                ABOUT
                            </span>
                            <img width="100%" class="lazy" data-src="/img/about_us.jpg" src="/img/about_us.jpg">
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="text">
                            <p>
                                Zheng long Plastics Factory Co., Ltd. was founded in 1989. It is a professional manufacturer of cable ties. From plastic mold design to product injection molding, it has been operating consistently. The products are of high quality and are well received by customers.<br>
                                In addition to the main professional manufacturing of cable ties for wiring, it is also committed to the development and application of peripheral products, such as cable ties holders, plastic bottle caps, mineral water handles... etc. OEM/ODM are welcome.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="news">
            <div class="container">
                <div class="content">
                    <span class="title">
                        NEWS
                    </span>
                    @foreach ($all_news as $news)
                        <a class="link" href="/news/en/{{$news->id}}">
                            <div class="news_pic lazy" data-bg="{{$news->img}}" style="background-image: url({{$news->img}});"></div>
                            <div class="news_title">{{$news->title_en}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="container">
                    <div class="content">
                        <span class="title">
                            PRODUCTS
                        </span>
                    </div>
                    <div class="products">
                        <div class="row">
                            @foreach ($productTypes as $type)
                                <a href="/Types/en/{{$type->id}}" class="product">
                                    <div class="product_pic">
                                        <div class="h-100 w-100 lazy" data-bg="{{$type->img}}" style="background-image: url({{$type->img}});"></div>
                                    </div>
                                    <div class="product_name">
                                        {{$type->type_name_en}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="contact_us">
            <div class="container">
                <div class="content">
                    <span class="title">
                        CONTACT
                    </span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="/contact_us" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="name">Name:</span>
                                <input type="text" class="form-control" aria-label="name" aria-describedby="name" name="name" required>
                                <span class="input-group-text">Phone:</span>
                                <input type="text" class="form-control" aria-label="Phone" name="phone" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email">Email:</span>
                                <input type="email" class="form-control" aria-label="email" name="email" aria-describedby="email" required>
                            </div>
                            <div class="input-group text_area">
                                <span class="input-group-text">Message:</span>
                                <textarea class="form-control" aria-label="With textarea" name="content" height="300px" required></textarea>
                            </div>

                            <div class="mt-3 g-recaptcha" data-sitekey="6LfJjvMfAAAAAJns6znQ3dAh2QFC2ryo3h5fK9SA"></div>
                            <button class="btn form_button" type="submit">send</button>
                        </form>
                        ZHENG LONG PLASTICS FACTORY CO.<br>
                        VAT Number: 22600859<br>
                        TEL: 04-22703754<br>
                        FAX: 04-22766553<br>
                        EMAIL: zl@zl-cabletie.com<br>
                    </div>
                    <div class="col-12 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6124.034760900535!2d120.70580771590774!3d24.123540643071493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x780d72272bbe514!2z5q2j6b6N!5e0!3m2!1szh-TW!2stw!4v1617725044978!5m2!1szh-TW!2stw"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <a class="backToTop" href="#">
            <span class="m-auto">
                ↑
            </span>
        </a>
    </main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.js" integrity="sha512-l83GrO3fDEz/cSQ8aDkNluU2SWGyGEMFB2iVPD6cF/BhX6mavNEGmEXjhjtwpH5jeAj5Nk3dl5JaryF6RPfJ6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 5000,
            },
            autoHeight: true, //enable auto height
            lazy: true, // lazyload
        });

        var product_imgs = document.querySelectorAll('.product');


        product_imgs.forEach(function (product_img) {
            var pic = product_img.children[0];

            pic.setAttribute("style", 'height:' + pic.offsetWidth + 'px')
        })


        window.addEventListener('resize', function (event) {
            product_imgs.forEach(function (product_img) {
                var pic = product_img.children[0];

                pic.setAttribute("style", ';height:' + pic.offsetWidth + 'px')
            })
        })

    </script>
@endsection
