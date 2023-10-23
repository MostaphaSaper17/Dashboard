@extends('layouts.website')
@section('content')
    <div class="swiper mySwiper layer-for-header-slider header">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('website/imgs/home-page-1.webp') }}" alt="img" class="img-fluid">
                <h1>من المملكة موطن الرّيادة ورمز الطموح</h1>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('website/imgs/home-page-2.webp') }}" alt="img" class="img-fluid">
                <h1>إلى رائدي الأعمال أصحاب الرّؤى وفكر التطوير</h1>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('website/imgs/home-page-3.webp') }}" alt="img" class="img-fluid">
                <h1>سلسلة معكم لتحقيق الرؤية وتحويلها إلى واقع</h1>
            </div>
        </div>
        <div class="swiper-pagination number-of-sliders z-index-999">
            <span>1</span>
            <span>2</span>
            <span>3</span>
        </div>
    </div>
    <section id="video">
        <div class="container">
            <div class="row mx-auto col-md-8">
                <h3 data-aos="fade-down" data-aos-duration="1000" class=" headline load-hidden">تعرف على <span
                        class="main-color">سلسلة</span> بفيديو</h3>
                <p data-aos="fade-down" data-aos-duration="1000" class="headline">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                    tristique,
                    nec malesuada elit
                </p>
                <div class="video-container">
                    <a href="https://www.youtube.com/watch?v=3PkufGVNlu0" target="_blank" class="video photo">
                        <img data-aos="fade-down" data-aos-duration="1000" src="{{ ('website/imgs/video-photo-2.webp') }}"
                            class="img-fluid video-photo" />
                        <img data-aos="fade-up" data-aos-duration="1000" src="{{ ('website/imgs/icons/play.svg') }}" class="video-icon"
                            alt="video icon">
                        <img data-aos="fade-left" data-aos-duration="1000" src="{{ ('website/imgs/right-top-video.png') }}"
                            class="right-top-video" alt="right top video">
                        <div data-aos="fade-right" data-aos-duration="1000" class="left-bottom-layer"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="articles">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">حقيبة ريادي</h3>
            <div class="main-articles-block">
                <div class="articles-block" data-aos="fade-down-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/1.png') }}" alt="img" class="img-fluid">
                    <div class="content one">
                        <div class="title">فكرة المشروع</div>
                        <div class="description">تقديم جلسة عصف ذهني لمناقشة فكرة المشروع والوصول الى أفضل فكرة تلامس
                            حاجة
                            السوق.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/2.png') }}" alt="img" class="img-fluid">
                    <div class="content two">
                        <div class="title">تصميم نموذج العمل التجاري</div>
                        <div class="description">تصميم نموذج العمل
                            التجاري لإظهار ملامح
                            المشروع.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/3.png') }}" alt="img" class="img-fluid">
                    <div class="content three">
                        <div class="title">دراسة جدوى</div>
                        <div class="description">إعداد ملف دراسة
                            جدوى معتمدة
                            (المالية – القانونية –
                            الفنية – السوقية)
                            للمشروع.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-down-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/4.png') }}" alt="img" class="img-fluid">
                    <div class="content four">
                        <div class="title">دراسة وتحليل</div>
                        <div class="description">دراسة وتحليل السوق
                            تحليل المنافسين
                            تحليل الجمهور
                            المستهدف.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/5.png') }}" alt="img" class="img-fluid">
                    <div class="content five">
                        <div class="title">تصميم
                            الهوية
                            البصرية
                            للمشوع</div>
                        <div class="description">تصميم الهوية البصرية
                            وفلسفة الشعار
                            واختيار اسم تجاري
                            إبداعي وفريد أو فكرة
                            العلامة التجارية بما يتوافق
                            مع النشاط والصناعة.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/6.png') }}" alt="img" class="img-fluid">
                    <div class="content six">
                        <div class="title">ملخص
                            وعرض
                            استثمار</div>
                        <div class="description">تقديم ملخص وعرض
                            استثمار لجذب التمويل
                            والمستثمرين.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/7.png') }}" alt="img" class="img-fluid">
                    <div class="content seven">
                        <div class="title">الاستشارات
                            والحلول
                            القانونية</div>
                        <div class="description">تقديم الاستشارات
                            والحلول القانونية.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/8.png') }}" alt="img" class="img-fluid">
                    <div class="content eight">
                        <div class="title">بناء هيكلية
                            الموارد
                            البشرية</div>
                        <div class="description">بناء هيكلية الموارد
                            البشرية والتوصيف
                            الوظيفي.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/9.png') }}" alt="img" class="img-fluid">
                    <div class="content nine">
                        <div class="title">الاستشارات
                            والحلول
                            التقنية.</div>
                        <div class="description">تقديم الاستشارات
                            والحلول التقنية.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/10.png') }}" alt="img" class="img-fluid">
                    <div class="content ten">
                        <div class="title">بناء
                            استراتيجية
                            التسويق</div>
                        <div class="description">بناء استراتيجية التسويق
                            حسب نوع النشاط
                            وميزانية الانطلاقة.</div>
                    </div>
                </div>
                <div class="articles-block" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('website/imgs/articles/11.png') }}" alt="img" class="img-fluid">
                    <div class="content eleven">
                        <div class="title">تحديد الأهداف
                            ووضع خطة
                            عمل متكاملة
                        </div>
                        <div class="description">تحديد الأهداف ووضع
                            خطة عمل متكاملة
                            تتضمن الخطة التشغيلية
                            والخطة التسويقية.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="header-content">
            <h3 data-aos="fade-up">الخدمات</h3>
            <p data-aos="fade-up">بفضل خبرتنا الواسعة والمتنوعة، نقدم مجموعة متنوعة من الخدمات التي تلبي <br
                    class="d-none d-lg-block">
                احتياجاتك بكفاءة
                واحترافية.
            </p>
        </div>
        <div class="container">
            <div class="main-services-block">
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down-left" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }

                                        .cls-5 {
                                            fill: url(#linear-gradient-5);
                                        }

                                        .cls-6 {
                                            fill: url(#linear-gradient-6);
                                        }

                                        .cls-7 {
                                            fill: url(#linear-gradient-7);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="35.15" y1="37.47" x2="41.03" y2="37.47"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="31.34" y1="37.47" x2="44.83" y2="37.47"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="4.59" y1="19.78" x2="45.41" y2="19.78"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="32.25" y1="26.37" x2="38.77" y2="26.37"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="10.7" y1="36.6" x2="17.22" y2="36.6"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-6" x1="17.88" y1="33.11" x2="24.41" y2="33.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-7" x1="25.07" y1="35.06" x2="31.59" y2="35.06"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <path class="cls-1"
                                    d="M38.09,34.42a2.86,2.86,0,0,0-2.08.89,3.14,3.14,0,0,0,0,4.32,2.86,2.86,0,0,0,4.05.11l.11-.11a3.16,3.16,0,0,0,0-4.32A2.87,2.87,0,0,0,38.09,34.42Zm0,4.67a1.62,1.62,0,1,1,1.55-1.62,1.59,1.59,0,0,1-1.55,1.62Z" />
                                <path class="cls-2"
                                    d="M44.06,35.54,43,35.41a.59.59,0,0,0,0-.08l.69-.89a.92.92,0,0,0-.07-1.19l-1.41-1.47A.83.83,0,0,0,41,31.71l-.86.71-.07,0L40,31.25a.88.88,0,0,0-.86-.79h-2a.87.87,0,0,0-.86.79l-.13,1.14-.07,0-.86-.71a.83.83,0,0,0-1.15.07l-1.41,1.47a.92.92,0,0,0-.07,1.19l.69.89,0,.08-1.08.13a.88.88,0,0,0-.77.89v2.08a.87.87,0,0,0,.77.89l1.08.13,0,.08-.69.9a.92.92,0,0,0,.07,1.19L34,43.17a.85.85,0,0,0,1.15.07l.86-.71.07,0,.13,1.13a.88.88,0,0,0,.86.8h2a.88.88,0,0,0,.85-.8l.13-1.13.07,0,.86.71a.85.85,0,0,0,1.15-.07l1.42-1.47a.94.94,0,0,0,.06-1.19l-.68-.9,0-.08,1.08-.13a.87.87,0,0,0,.77-.89V36.43A.88.88,0,0,0,44.06,35.54Zm-2.28,3.21c-.06.18-.14.36-.22.54a.93.93,0,0,0,.1,1l.59.77-.75.79-.75-.62a.82.82,0,0,0-.54-.2.86.86,0,0,0-.38.1,3.85,3.85,0,0,1-.52.22.9.9,0,0,0-.59.75l-.1,1H37.56l-.11-1a.89.89,0,0,0-.58-.75,3,3,0,0,1-.52-.22A.9.9,0,0,0,36,41a.82.82,0,0,0-.54.2l-.75.61L33.92,41l.6-.77a1,1,0,0,0,.09-1q-.12-.27-.21-.54a.87.87,0,0,0-.73-.61L32.73,38V36.92l.94-.11a.9.9,0,0,0,.73-.61,4.33,4.33,0,0,1,.21-.54,1,1,0,0,0-.09-1l-.6-.78.75-.78.75.62a.87.87,0,0,0,.93.1,3,3,0,0,1,.52-.23.88.88,0,0,0,.58-.75l.11-1h1.06l.1,1a.89.89,0,0,0,.59.75,3.93,3.93,0,0,1,.52.23.86.86,0,0,0,.92-.1l.75-.62.75.78-.59.78a.93.93,0,0,0-.1,1,4.33,4.33,0,0,1,.21.54.87.87,0,0,0,.73.61l.94.11V38l-.94.11A.87.87,0,0,0,41.78,38.75Z" />
                                <path class="cls-3"
                                    d="M45.33,8.74a.8.8,0,0,0-.72-.46.74.74,0,0,0-.36.09l-6.59,3.45A3.09,3.09,0,0,0,35.51,11a3.23,3.23,0,0,0-3.16,3.29A3.36,3.36,0,0,0,32.81,16L29.4,20.44a3,3,0,0,0-1.07-.19,3,3,0,0,0-2.17.9l-2-1.34a3.19,3.19,0,1,0-6.2-.93,3.37,3.37,0,0,0,.55,1.85l-3.37,4.2a3.1,3.1,0,0,0-3.78,1.15l-5.73-2a.78.78,0,0,0-.26,0,.8.8,0,0,0-.76.56.84.84,0,0,0,.5,1.05l5.69,2a2,2,0,0,0,0,.34,3.17,3.17,0,1,0,6.33,0,3.32,3.32,0,0,0-.2-1.13,3.26,3.26,0,0,0-.49-.92l3.29-4.1a3.06,3.06,0,0,0,2.66.08,3.1,3.1,0,0,0,1-.68l1.95,1.32a3.3,3.3,0,0,0-.15,1,3.17,3.17,0,1,0,6.33,0,3.35,3.35,0,0,0-.77-2.15L34,17.11a3.1,3.1,0,0,0,1.54.42,3.23,3.23,0,0,0,3.16-3.29,3.48,3.48,0,0,0-.15-1L45,9.85A.85.85,0,0,0,45.33,8.74Zm-17,16.43a1.64,1.64,0,1,1,1.56-1.63A1.6,1.6,0,0,1,28.33,25.17ZM35.51,12.6A1.64,1.64,0,1,1,34,14.24,1.61,1.61,0,0,1,35.51,12.6ZM15.53,28A1.57,1.57,0,1,1,14,26.34,1.6,1.6,0,0,1,15.53,28Zm5.62-10.73a1.64,1.64,0,1,1-1.57,1.64A1.61,1.61,0,0,1,21.15,17.25Z" />
                                <path class="cls-4"
                                    d="M37.4,29.24a.78.78,0,0,0,.54.25H38a.8.8,0,0,0,.78-.82V22.24a.81.81,0,0,0-.79-.83H33.05a.82.82,0,0,0-.8.83v8.28a.82.82,0,0,0,.24.59.79.79,0,0,0,.55.23.77.77,0,0,0,.39-.11h0a.86.86,0,0,0,.41-.73V23.07h3.33v5.6A.78.78,0,0,0,37.4,29.24Z" />
                                <path class="cls-5"
                                    d="M16.43,32.62H11.5a.82.82,0,0,0-.8.83v6.29a.8.8,0,1,0,1.6,0V34.28h3.33v5.46a.81.81,0,0,0,.79.83.82.82,0,0,0,.8-.83V33.45A.8.8,0,0,0,16.43,32.62Z" />
                                <path class="cls-6"
                                    d="M23.61,25.65H18.68a.82.82,0,0,0-.8.83V39.74a.8.8,0,1,0,1.6,0V27.3h3.33V39.74a.8.8,0,1,0,1.6,0V26.48A.82.82,0,0,0,23.61,25.65Z" />
                                <path class="cls-7"
                                    d="M31.59,33.7V30.37a.82.82,0,0,0-.8-.83H25.86a.81.81,0,0,0-.79.83v9.34a.81.81,0,0,0,.22.59.79.79,0,0,0,.55.27h0a.81.81,0,0,0,.8-.83V31.2H30v2.5a.83.83,0,0,0,.23.58.8.8,0,0,0,.56.24h0A.8.8,0,0,0,31.59,33.7Z" />
                            </svg>
                        </div>
                        <h4>الاستشارات والحلول الإدارية والمالية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }

                                        .cls-5 {
                                            fill: url(#linear-gradient-5);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="23.13" y1="18.04" x2="39.96" y2="18.04"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="20.19" y1="11.74" x2="30.64" y2="11.74"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="32.62" y1="24.17" x2="43.06" y2="24.17"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="7.34" y1="32.01" x2="27.63" y2="32.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="19.67" y1="39.3" x2="42.43" y2="39.3"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <polygon class="cls-1"
                                    points="23.13 17.88 31.41 9.65 39.96 18.2 31.68 26.43 23.13 17.88" />
                                <path class="cls-2"
                                    d="M22.43,16.56a1.29,1.29,0,0,1-1.82,0l-.07-.08a1.34,1.34,0,0,1-.08-1.71,26.47,26.47,0,0,1,8-8,1.38,1.38,0,0,1,1.7.09l.1.1a1.26,1.26,0,0,1,0,1.78h0Z" />
                                <path class="cls-3"
                                    d="M33,27.13a1.28,1.28,0,0,0,0,1.8h0l.07.07a1.35,1.35,0,0,0,1.72.09,26.44,26.44,0,0,0,8-8,1.38,1.38,0,0,0-.09-1.7l-.09-.09a1.27,1.27,0,0,0-1.8,0Z" />
                                <path class="cls-4"
                                    d="M8.32,41.12c-.16-.08-.23-.26-.37-.37a3.08,3.08,0,0,1,.41-4.13l16.7-14.7,1.3,1.26,1.27,1.31-14.8,16.6a3.12,3.12,0,0,1-4.15.39C8.58,41.34,8.4,41.28,8.32,41.12Z" />
                                <polygon class="cls-5"
                                    points="22.72 36 21.76 37.08 21.76 38.22 20.86 38.22 19.67 39.42 19.67 42.59 42.43 42.59 42.43 39.42 41.23 38.22 40.34 38.22 40.34 37.08 39.38 36 22.72 36" />
                            </svg>
                        </div>
                        <h4>الاستشارات والحلول القانونية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down-right" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }

                                        .cls-5 {
                                            fill: url(#linear-gradient-5);
                                        }

                                        .cls-6 {
                                            fill: url(#linear-gradient-6);
                                        }

                                        .cls-7 {
                                            fill: url(#linear-gradient-7);
                                        }

                                        .cls-8 {
                                            fill: url(#linear-gradient-8);
                                        }

                                        .cls-9 {
                                            fill: url(#linear-gradient-9);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="9.76" y1="33.81" x2="18.8" y2="33.81"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="11.81" y1="24.7" x2="16.74" y2="24.7"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="20.73" y1="21.39" x2="31.05" y2="21.39"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="23.11" y1="10.84" x2="28.67" y2="10.84"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="32.98" y1="33.81" x2="42.02" y2="33.81"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-6" x1="35.04" y1="24.7" x2="39.97" y2="24.7"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-7" x1="29" y1="15.8" x2="38.15" y2="15.8"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-8" x1="12.52" y1="16.36" x2="22.6" y2="16.36"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-9" x1="19.26" y1="32.85" x2="32.64" y2="32.85"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <path class="cls-1"
                                    d="M15.61,27.29l-2.76,0a3.1,3.1,0,0,0-3.09,3.14l0,4.06a1.13,1.13,0,0,0,1.14,1.13h.36a1.34,1.34,0,0,0,.39-.07l.05,4.74H17l0-4.79a1.32,1.32,0,0,0,.39.06h.35a1.15,1.15,0,0,0,1.14-1.15l0-4.06A3.13,3.13,0,0,0,15.61,27.29Zm2.05,7.32H17.3A.39.39,0,0,1,17,34.5a.36.36,0,0,1-.12-.27l0-3.17a.48.48,0,0,0-.49-.48h0l-.13,0-.06,0-.16.1s0,0,0,0a.52.52,0,0,0-.12.31h0v0L16,39.34H14.83l0-4.35a.49.49,0,0,0-.49-.49h0a.49.49,0,0,0-.49.49h0l0,4.35H12.7l-.07-8.24a.5.5,0,0,0-.49-.48h0a.48.48,0,0,0-.48.49h0l0,3.17a.39.39,0,0,1-.39.39h-.35a.14.14,0,0,1-.16-.15h0l0-4.06a2.14,2.14,0,0,1,2.12-2.16l2.76,0a2.13,2.13,0,0,1,2.16,2.11h0l0,4a.16.16,0,0,1-.16.17Z" />
                                <path class="cls-2"
                                    d="M14.28,27.16a2.47,2.47,0,1,0-2.47-2.46h0A2.47,2.47,0,0,0,14.28,27.16Zm0-3.95a1.49,1.49,0,1,1-1.49,1.49A1.49,1.49,0,0,1,14.28,23.21Z" />
                                <path class="cls-3"
                                    d="M29.81,23.37a1.25,1.25,0,0,0,1.24-1.25L31,17.42a3.53,3.53,0,0,0-3.57-3.5l-3.2,0a3.53,3.53,0,0,0-3.5,3.56h0l.05,4.7A1.25,1.25,0,0,0,22,23.45h.42a1.61,1.61,0,0,0,.53-.1L23,28.86h5.91l-.05-5.59a1.56,1.56,0,0,0,.52.11Zm-.42-1a.52.52,0,0,1-.53-.52l0-3.68a.49.49,0,0,0-.49-.48h0a.49.49,0,0,0-.49.49h0l.09,9.66H26.45l0-5.13a.49.49,0,0,0-.49-.48h0a.48.48,0,0,0-.48.49h0l.05,5.12H24l-.09-9.63a.49.49,0,0,0-.5-.48.48.48,0,0,0-.48.49h0l0,3.67a.51.51,0,0,1-.51.53H22a.27.27,0,0,1-.26-.27l-.05-4.7a2.56,2.56,0,0,1,2.53-2.58l3.2,0a2.65,2.65,0,0,1,1.82.73A2.57,2.57,0,0,1,30,17.43l.05,4.69a.27.27,0,0,1-.26.27h-.42Z" />
                                <path class="cls-4"
                                    d="M25.89,13.61a2.78,2.78,0,1,0-2.78-2.77A2.78,2.78,0,0,0,25.89,13.61Zm0-4.57a1.8,1.8,0,1,1-1.8,1.8h0A1.8,1.8,0,0,1,25.89,9Z" />
                                <path class="cls-5"
                                    d="M42,30.38a3.12,3.12,0,0,0-3.14-3.09h0l-2.77,0A3.12,3.12,0,0,0,33,30.46h0l0,4.06a1.14,1.14,0,0,0,1.14,1.13h.37a1.59,1.59,0,0,0,.38-.07L35,40.32H40.2l-.05-4.79a1.32,1.32,0,0,0,.39.06h.35A1.14,1.14,0,0,0,42,34.44h0Zm-1.1,4.23h-.35a.38.38,0,0,1-.39-.38l0-3.17a.49.49,0,0,0-.49-.48h0l-.13,0-.06,0a.47.47,0,0,0-.09.06l-.06,0,0,0a.51.51,0,0,0-.11.31h0v0l.08,8.25H38.06L38,35a.49.49,0,0,0-.48-.49h0A.48.48,0,0,0,37,35h0l0,4.35H35.93l-.08-8.24a.48.48,0,0,0-.49-.48h0a.49.49,0,0,0-.49.49h0l0,3.17a.39.39,0,0,1-.38.39h-.36a.17.17,0,0,1-.16-.16l0-4.06a2.14,2.14,0,0,1,2.12-2.16h0l2.76,0A2.13,2.13,0,0,1,41,30.39l0,4a.16.16,0,0,1-.16.17Z" />
                                <path class="cls-6"
                                    d="M35,24.7a2.47,2.47,0,1,0,2.46-2.47A2.46,2.46,0,0,0,35,24.7Zm4,0a1.49,1.49,0,1,1-1.49-1.49A1.49,1.49,0,0,1,39,24.7Z" />
                                <path class="cls-7"
                                    d="M29.21,11.19l.6,1.47a.48.48,0,0,0,.45.3.52.52,0,0,0,.18,0,.5.5,0,0,0,.27-.64h0l-.18-.44a11.26,11.26,0,0,1,6.64,9.45.49.49,0,0,0,.49.45h0a.49.49,0,0,0,.45-.52A12.25,12.25,0,0,0,30.93,11l.41-.17A.49.49,0,0,0,31,9.88l-2,.81.19.47Z" />
                                <path class="cls-8"
                                    d="M13.78,22.23l1.78-1.18a.48.48,0,0,0,.11-.68.49.49,0,0,0-.66-.13l-.31.2a11.29,11.29,0,0,1,7.6-9A.49.49,0,0,0,22,10.5a12.26,12.26,0,0,0-8.26,9.89l-.31-.46a.49.49,0,0,0-.68-.15.5.5,0,0,0-.14.68h0Z" />
                                <path class="cls-9"
                                    d="M32.64,31.93l-2-.67a.49.49,0,0,0-.31.92l.5.17A11.3,11.3,0,0,1,20,31.83a.49.49,0,0,0-.67.15.49.49,0,0,0,.15.68h0a12.3,12.3,0,0,0,11.67.59l-.13.37a.5.5,0,0,0,.26.64.49.49,0,0,0,.64-.26l0-.07.51-1.55s0,0,0,0Z" />
                            </svg>
                        </div>
                        <h4>استشارات الموارد البشرية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down-left" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }

                                        .cls-5 {
                                            fill: url(#linear-gradient-5);
                                        }

                                        .cls-6 {
                                            fill: url(#linear-gradient-6);
                                        }

                                        .cls-7 {
                                            fill: url(#linear-gradient-7);
                                        }

                                        .cls-8 {
                                            fill: url(#linear-gradient-8);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="5.46" y1="41.17" x2="45.58" y2="41.17"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="21.7" y1="19.48" x2="29.35" y2="19.48"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="35.41" y1="19.18" x2="37.19" y2="19.18"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="9.45" y1="29.01" x2="41.6" y2="29.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="13.85" y1="19.18" x2="15.63" y2="19.18"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-6" x1="16.39" y1="19.48" x2="34.65" y2="19.48"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-7" x1="12.1" y1="25.74" x2="28.83" y2="25.74"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-8" x1="22.17" y1="13.18" x2="38.95" y2="13.18"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <path class="cls-1"
                                    d="M5.46,40.2v1.41l5.38.53H40.2l5.38-.53V40.2Zm25.06,1.35H20.73a.2.2,0,0,1-.2-.2h0V41a.2.2,0,0,1,.2-.2h9.79Z" />
                                <path class="cls-2"
                                    d="M25.52,23.3a3.83,3.83,0,1,0-3.82-3.82A3.83,3.83,0,0,0,25.52,23.3Zm0-6.64a2.82,2.82,0,1,1-2.81,2.82h0A2.81,2.81,0,0,1,25.52,16.66Z" />
                                <path class="cls-3"
                                    d="M36.32,18.3h0a.87.87,0,0,0-.87.87h0v0a.87.87,0,0,0,.87.87h0a.87.87,0,0,0,.87-.87v-.05A.86.86,0,0,0,36.32,18.3Z" />
                                <path class="cls-4"
                                    d="M41.6,19.27a1,1,0,0,0-1-1h-.15a.78.78,0,0,0-.79.78h0a1.27,1.27,0,0,0,0,.2.78.78,0,0,0,.78.78v18.4H10.57V20.07a.78.78,0,0,0,.78-.78v-.2a.78.78,0,0,0-.77-.79h-.17a1,1,0,0,0-1,1V39.73H41.6Z" />
                                <path class="cls-5"
                                    d="M14.72,20.07h0a.87.87,0,0,0,.87-.87v0a.87.87,0,0,0-.87-.87h0a.87.87,0,0,0-.87.85v0a.87.87,0,0,0,.86.89Z" />
                                <path class="cls-6"
                                    d="M17.35,21.55l1.11.11a.24.24,0,0,1,.2.15l.36.86a.25.25,0,0,1,0,.25l-.71.87a1.05,1.05,0,0,0,.05,1.4l1.48,1.48a1,1,0,0,0,.72.3,1.14,1.14,0,0,0,.69-.25l.87-.71a.27.27,0,0,1,.15-.05l.1,0,.85.35a.25.25,0,0,1,.15.21l.11,1.12a1.06,1.06,0,0,0,1,.95h2.1a1.06,1.06,0,0,0,1-1l.11-1.11a.24.24,0,0,1,.15-.2l.86-.36A.23.23,0,0,1,29,26l.87.71a1.15,1.15,0,0,0,.69.24,1,1,0,0,0,.72-.3l1.48-1.47a1.08,1.08,0,0,0,.05-1.42l-.71-.86a.25.25,0,0,1,0-.25l.36-.86a.26.26,0,0,1,.2-.15l1.12-.11a1,1,0,0,0,.95-1V18.43a1,1,0,0,0-.95-1l-1.12-.11a.26.26,0,0,1-.2-.15L32,16.28a.25.25,0,0,1,0-.25l.72-.87a1.05,1.05,0,0,0-.06-1.4l-1.48-1.48a1,1,0,0,0-.72-.3,1.08,1.08,0,0,0-.69.25l-.87.7a.2.2,0,0,1-.15.06l-.09,0-.86-.36a.23.23,0,0,1-.15-.2l-.11-1.12a1.06,1.06,0,0,0-1-.95h-2.1a1.06,1.06,0,0,0-1,1l-.11,1.11a.24.24,0,0,1-.15.21l-.86.35a.23.23,0,0,1-.24,0l-.87-.72a1.15,1.15,0,0,0-.68-.24,1,1,0,0,0-.73.3l-1.48,1.48a1.06,1.06,0,0,0-.05,1.41L19,16a.25.25,0,0,1,0,.25l-.36.86a.24.24,0,0,1-.2.15l-1.12.11a1.06,1.06,0,0,0-.95,1v2.09A1,1,0,0,0,17.35,21.55Zm.06-3.12s0,0,0,0l1.11-.1.17,0,.08,0a1.23,1.23,0,0,0,.41-.21l.06-.06.09-.08a1.28,1.28,0,0,0,.23-.37l.18-.42.17-.43,0-.08a1.28,1.28,0,0,0,.07-.34v-.08a.19.19,0,0,0,0-.08.34.34,0,0,0,0-.1,1.16,1.16,0,0,0,0-.18l0-.09a1.38,1.38,0,0,0-.2-.33l-.64-.78-.06-.08h0v0h0l.74-.74.73-.74h.06l.86.71h0l.07,0h0l.06,0h0l.06,0h0l.07,0h0l.07,0h0l.07,0H22L22,14h.43l.07,0h0l.06,0h0l.07,0,.86-.36.15-.07a.71.71,0,0,0,.14-.1,1.54,1.54,0,0,0,.19-.17l.09-.14a1.27,1.27,0,0,0,.2-.55l.11-1.11,0,0h2.11a0,0,0,0,1,0,0l.11,1.11a1.26,1.26,0,0,0,.2.56.64.64,0,0,0,.1.13.77.77,0,0,0,.18.18.67.67,0,0,0,.14.09l.15.08.86.36.07,0h0l.06,0h0l.07,0h.51l.07,0h0l.07,0h0l.06,0h0l.07,0h0l.06,0h0l.06,0h0l.06,0h0l.3-.25.55-.45h.06L32,14.47h0l0,0-.71.87a1,1,0,0,0-.11.17,1.09,1.09,0,0,0-.08.15l0,.1a.65.65,0,0,0,0,.13c0,.05,0,.1,0,.14v.17a1.2,1.2,0,0,0,.06.33l0,.08.08.2.28.66a1.23,1.23,0,0,0,1,.77l1.1.11h.05v2.09a.05.05,0,0,1-.05,0l-1.11.11a1.25,1.25,0,0,0-.95.62c0,.05-.05.1-.08.16l-.35.85A1.52,1.52,0,0,0,31,23a.85.85,0,0,0,0,.17s0,0,0,.06a.88.88,0,0,0,.09.2l0,0,.07.11,0,0,.7.86h0a.08.08,0,0,1,0,0h0L30.53,26h-.05l-.14-.1-.73-.6h0l-.06,0h0l-.06,0h0l-.06,0h0l-.06,0h0l-.06,0h0l-.07,0h0l-.06,0h-.6l-.06,0h0l-.08,0-.85.36a1.21,1.21,0,0,0-.74.86.55.55,0,0,0,0,.17l-.11,1.11s0,0,0,0h-2.1a.05.05,0,0,1,0-.05l-.11-1.11a1.26,1.26,0,0,0-.77-1L22.71,25a1,1,0,0,0-.3-.08h-.18L22,25H22l-.07,0-.12,0-.12,0-.06,0-.17.12-.47.38-.38.32h-.06l-1.47-1.48h0a0,0,0,0,1,0,0l.71-.87a1.22,1.22,0,0,0,.28-.78,1.24,1.24,0,0,0,0-.33.75.75,0,0,0-.05-.16l-.35-.86a1.37,1.37,0,0,0-.29-.42l-.06-.06-.21-.14-.07,0a1.13,1.13,0,0,0-.24-.08l-.17,0-1.1-.11h0l0,0h0V18.43Z" />
                                <path class="cls-7"
                                    d="M25.52,32.88l.87,0,.73-.05-.52.52-.21.22a.47.47,0,0,0,0,.69h0a.49.49,0,0,0,.69,0h0l1.61-1.61a.49.49,0,0,0,0-.69l-1.61-1.61a.5.5,0,0,0-.7,0,.49.49,0,0,0,0,.69l.38.37.42.42-.59.06c-.36,0-.72,0-1.07,0A12.46,12.46,0,0,1,13.07,19.46a13.2,13.2,0,0,1,.13-1.78.5.5,0,0,0-.14-.42.49.49,0,0,0-.34-.15h0a.45.45,0,0,0-.16,0,.48.48,0,0,0-.32.39A13.43,13.43,0,0,0,23.61,32.74,13.64,13.64,0,0,0,25.52,32.88Z" />
                                <path class="cls-8"
                                    d="M23.93,8.63a.49.49,0,0,0,.69-.69h0l-.41-.41-.42-.42.59-.05a10.87,10.87,0,0,1,1.14,0A12.46,12.46,0,0,1,38,19.45a11.75,11.75,0,0,1-.13,1.78.5.5,0,0,0,.14.42.48.48,0,0,0,.34.14.41.41,0,0,0,.16,0,.47.47,0,0,0,.33-.39A13.81,13.81,0,0,0,39,19.45,13.44,13.44,0,0,0,25.52,6l-.86,0-.74.05.52-.52.18-.18a.49.49,0,0,0-.69-.69L22.32,6.33a.47.47,0,0,0,0,.69h0Z" />
                            </svg>
                        </div>
                        <h4>الاستشارات والحلول التقنية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #153561;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" d="M24,35a2.61,2.61,0,1,1-2.61-2.6A2.6,2.6,0,0,1,24,35Z" />
                                <path class="cls-1"
                                    d="M36.2,18.16a1.41,1.41,0,0,0-1.41,1.41,1.14,1.14,0,0,0,.05.37L32.4,22.78a1.34,1.34,0,0,0-.4-.06,1.62,1.62,0,0,0-.44.07L29.86,21a1.27,1.27,0,0,0,0-.34,1.41,1.41,0,0,0-2.82,0,1.27,1.27,0,0,0,.05.34l-1.7,2a1.25,1.25,0,0,0-.43-.07,1.41,1.41,0,1,0,1.41,1.41,1.34,1.34,0,0,0-.05-.35l1.7-2a1.25,1.25,0,0,0,.43.07,1.27,1.27,0,0,0,.44-.07l1.71,1.79a1.27,1.27,0,0,0-.05.34,1.41,1.41,0,1,0,2.82,0,1.58,1.58,0,0,0,0-.38l2.44-2.83a1.29,1.29,0,0,0,.4.06,1.41,1.41,0,0,0,0-2.82Z" />
                                <path class="cls-1"
                                    d="M11.6,21.08a4.22,4.22,0,1,1,4.22-4.21A4.22,4.22,0,0,1,11.6,21.08Z" />
                                <path class="cls-1"
                                    d="M38.11,12.92H21.31a3.48,3.48,0,0,0-3.47,3.48v4.28l2.6-.27v-4a.87.87,0,0,1,.87-.87h16.8a.87.87,0,0,1,.87.87V27.23a.87.87,0,0,1-.87.87H21.31a.87.87,0,0,1-.87-.87V24l-2.6.6v2.66a3.48,3.48,0,0,0,3.47,3.47h16.8a3.48,3.48,0,0,0,3.48-3.47V16.4A3.48,3.48,0,0,0,38.11,12.92Z" />
                                <path class="cls-1"
                                    d="M14,21.94a18,18,0,0,0-2.38-.46h0c-4.28.59-4.73,1.69-4.73,1.69a25.23,25.23,0,0,0,.37,8.34,4.85,4.85,0,0,0,1,1.55C9,40,9.67,40.88,9.67,40.88h3.85S14.19,40,15,33.06c0,0,.51-3.79.65-8.36a2.29,2.29,0,0,1,1.47-.86h0l.72-.16V21.55Z" />
                                <path class="cls-1"
                                    d="M23.56,22.33A2.33,2.33,0,0,0,25,20.82l-4.58.47v1.79C21.89,22.75,23.16,22.45,23.56,22.33Z" />
                                <path class="cls-1" d="M17.84,23.68l2.6-.6V21.29l-2.6.26Z" />
                                <path class="cls-1"
                                    d="M24.74,40.88c0-.52,0-1.08-.1-1.69,0,0-.31-.76-3.26-1.17h0c-2.94.41-3.25,1.17-3.25,1.17-.06.61-.09,1.17-.1,1.69Z" />
                                <path class="cls-1" d="M32.07,35a2.6,2.6,0,1,1-2.6-2.6A2.59,2.59,0,0,1,32.07,35Z" />
                                <path class="cls-1"
                                    d="M32.83,40.88c0-.52,0-1.08-.11-1.69,0,0-.3-.76-3.25-1.17h0c-2.95.41-3.25,1.17-3.25,1.17-.06.61-.09,1.17-.11,1.69Z" />
                                <path class="cls-1" d="M40.16,35a2.61,2.61,0,1,1-2.6-2.6A2.6,2.6,0,0,1,40.16,35Z" />
                                <path class="cls-1"
                                    d="M40.91,40.88c0-.52,0-1.08-.1-1.69,0,0-.31-.76-3.25-1.17h0c-2.94.41-3.25,1.17-3.25,1.17-.06.61-.09,1.17-.1,1.69Z" />
                            </svg>
                        </div>
                        <h4>الاستشارات والحلول التسويقية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block">
                    <div class="service-block text-center" data-aos="fade-down-right" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }

                                        .cls-5 {
                                            fill: url(#linear-gradient-5);
                                        }

                                        .cls-6 {
                                            fill: url(#linear-gradient-6);
                                        }

                                        .cls-7 {
                                            fill: url(#linear-gradient-7);
                                        }

                                        .cls-8 {
                                            fill: url(#linear-gradient-8);
                                        }

                                        .cls-9 {
                                            fill: url(#linear-gradient-9);
                                        }

                                        .cls-10 {
                                            fill: url(#linear-gradient-10);
                                        }

                                        .cls-11 {
                                            fill: url(#linear-gradient-11);
                                        }

                                        .cls-12 {
                                            fill: url(#linear-gradient-12);
                                        }

                                        .cls-13 {
                                            fill: url(#linear-gradient-13);
                                        }

                                        .cls-14 {
                                            fill: url(#linear-gradient-14);
                                        }

                                        .cls-15 {
                                            fill: url(#linear-gradient-15);
                                        }

                                        .cls-16 {
                                            fill: url(#linear-gradient-16);
                                        }

                                        .cls-17 {
                                            fill: url(#linear-gradient-17);
                                        }

                                        .cls-18 {
                                            fill: url(#linear-gradient-18);
                                        }

                                        .cls-19 {
                                            fill: url(#linear-gradient-19);
                                        }

                                        .cls-20 {
                                            fill: url(#linear-gradient-20);
                                        }

                                        .cls-21 {
                                            fill: url(#linear-gradient-21);
                                        }

                                        .cls-22 {
                                            fill: url(#linear-gradient-22);
                                        }

                                        .cls-23 {
                                            fill: url(#linear-gradient-25);
                                        }

                                        .cls-24 {
                                            fill: url(#linear-gradient-26);
                                        }

                                        .cls-25 {
                                            fill: url(#linear-gradient-27);
                                        }

                                        .cls-26 {
                                            fill: url(#linear-gradient-28);
                                        }

                                        .cls-27 {
                                            fill: url(#linear-gradient-29);
                                        }

                                        .cls-28 {
                                            fill: url(#linear-gradient-30);
                                        }

                                        .cls-29 {
                                            fill: url(#linear-gradient-31);
                                        }

                                        .cls-30 {
                                            fill: url(#linear-gradient-32);
                                        }

                                        .cls-31 {
                                            fill: url(#linear-gradient-33);
                                        }

                                        .cls-32 {
                                            fill: url(#linear-gradient-34);
                                        }

                                        .cls-33 {
                                            fill: url(#linear-gradient-35);
                                        }

                                        .cls-34 {
                                            fill: url(#linear-gradient-36);
                                        }

                                        .cls-35 {
                                            fill: url(#linear-gradient-37);
                                        }

                                        .cls-36 {
                                            fill: url(#linear-gradient-38);
                                        }

                                        .cls-37 {
                                            fill: url(#linear-gradient-39);
                                        }

                                        .cls-38 {
                                            fill: url(#linear-gradient-40);
                                        }

                                        .cls-39 {
                                            fill: url(#linear-gradient-41);
                                        }

                                        .cls-40 {
                                            fill: url(#linear-gradient-42);
                                        }

                                        .cls-41 {
                                            fill: url(#linear-gradient-43);
                                        }

                                        .cls-42 {
                                            fill: url(#linear-gradient-44);
                                        }

                                        .cls-43 {
                                            fill: url(#linear-gradient-45);
                                        }

                                        .cls-44 {
                                            fill: url(#linear-gradient-46);
                                        }

                                        .cls-45 {
                                            fill: url(#linear-gradient-47);
                                        }

                                        .cls-46 {
                                            fill: url(#linear-gradient-48);
                                        }

                                        .cls-47 {
                                            fill: url(#linear-gradient-49);
                                        }

                                        .cls-48 {
                                            fill: url(#linear-gradient-50);
                                        }

                                        .cls-49 {
                                            fill: url(#linear-gradient-51);
                                        }

                                        .cls-50 {
                                            fill: url(#linear-gradient-52);
                                        }

                                        .cls-51 {
                                            fill: url(#linear-gradient-53);
                                        }

                                        .cls-52 {
                                            fill: url(#linear-gradient-54);
                                        }

                                        .cls-53 {
                                            fill: url(#linear-gradient-55);
                                        }

                                        .cls-54 {
                                            fill: url(#linear-gradient-56);
                                        }

                                        .cls-55 {
                                            fill: url(#linear-gradient-57);
                                        }

                                        .cls-56 {
                                            fill: url(#linear-gradient-58);
                                        }

                                        .cls-57 {
                                            fill: url(#linear-gradient-59);
                                        }

                                        .cls-58 {
                                            fill: url(#linear-gradient-60);
                                        }

                                        .cls-59 {
                                            fill: url(#linear-gradient-61);
                                        }

                                        .cls-60 {
                                            fill: url(#linear-gradient-62);
                                        }

                                        .cls-61 {
                                            fill: url(#linear-gradient-63);
                                        }

                                        .cls-62 {
                                            fill: url(#linear-gradient-64);
                                        }

                                        .cls-63 {
                                            fill: url(#linear-gradient-65);
                                        }

                                        .cls-64 {
                                            fill: url(#linear-gradient-66);
                                        }

                                        .cls-65 {
                                            fill: url(#linear-gradient-67);
                                        }

                                        .cls-66 {
                                            fill: url(#linear-gradient-68);
                                        }

                                        .cls-67 {
                                            fill: url(#linear-gradient-69);
                                        }

                                        .cls-68 {
                                            fill: url(#linear-gradient-70);
                                        }

                                        .cls-69 {
                                            fill: url(#linear-gradient-71);
                                        }

                                        .cls-70 {
                                            fill: url(#linear-gradient-72);
                                        }

                                        .cls-71 {
                                            fill: url(#linear-gradient-73);
                                        }

                                        .cls-72 {
                                            fill: url(#linear-gradient-74);
                                        }

                                        .cls-73 {
                                            fill: url(#linear-gradient-75);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="9.52" y1="16.96" x2="18.05" y2="16.96"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="30.79" y1="16.96" x2="39.32" y2="16.96"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="9.52" y1="34.66" x2="18.05" y2="34.66"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="30.79" y1="34.66" x2="39.32" y2="34.66"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-5" x1="24.16" y1="13.86" x2="24.67" y2="13.86"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-6" x1="24.16" y1="37.76" x2="24.67" y2="37.76"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-7" x1="10.31" y1="25.81" x2="14.63" y2="25.81"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-8" x1="34.21" y1="25.81" x2="38.53" y2="25.81"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-9" x1="15.33" y1="24.36" x2="31.22" y2="24.36"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-10" x1="17.77" y1="27.34" x2="33.51" y2="27.34"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-11" x1="19.58" y1="49.29" x2="31.07" y2="49.29"
                                        gradientTransform="matrix(1, 0, 0, -1, 0, 76.21)"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-12" x1="17.77" y1="51.45" x2="29.42" y2="51.45"
                                        gradientTransform="matrix(1, 0, 0, -1, 0, 76.21)"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-13" x1="20.64" y1="25.23" x2="27.29" y2="25.23"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-14" x1="21.7" y1="26.47" x2="28.2" y2="26.47"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-15" x1="23.22" y1="26.14" x2="26.14" y2="26.14"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-16" x1="22.7" y1="25.57" x2="25.77" y2="25.57"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-17" x1="17.2" y1="48.74" x2="34.28" y2="48.74"
                                        gradientTransform="matrix(1, 0, 0, -1, 0, 76.21)"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-18" x1="14.55" y1="51.98" x2="31.8" y2="51.98"
                                        gradientTransform="matrix(1, 0, 0, -1, 0, 76.21)"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-19" x1="24.55" y1="28.21" x2="28.69" y2="28.21"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-20" x1="24.48" y1="28.21" x2="28.76" y2="28.21"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-21" x1="24.55" y1="27.84" x2="29.28" y2="27.84"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-22" x1="24.48" y1="27.84" x2="29.35" y2="27.84"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-25" x1="37.75" y1="14.17" x2="38.58" y2="14.17"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-26" x1="37.72" y1="13.4" x2="38.62" y2="13.4"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-27" x1="37.72" y1="13.8" x2="38.62" y2="13.8"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-28" x1="37.73" y1="12.15" x2="37.98" y2="12.15"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-29" x1="37.56" y1="13.62" x2="38.76" y2="13.62"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-30" x1="37.56" y1="13.98" x2="38.76" y2="13.98"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-31" x1="37.82" y1="14.32" x2="38.51" y2="14.32"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-32" x1="36.93" y1="11.87" x2="39.4" y2="11.87"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-33" x1="38.02" y1="12.82" x2="38.31" y2="12.82"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-34" x1="38.35" y1="12.15" x2="38.6" y2="12.15"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-35" x1="37.72" y1="13.36" x2="38.63" y2="13.36"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-36" x1="38.31" y1="13.35" x2="38.35" y2="13.35"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-37" x1="37.98" y1="13.35" x2="38.02" y2="13.35"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-38" x1="9.44" y1="12.72" x2="12.76" y2="12.72"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-39" x1="11.91" y1="13.27" x2="14.14" y2="13.27"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-40" x1="8.93" y1="39.01" x2="13.38" y2="39.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-41" x1="11" y1="37.29" x2="11.31" y2="37.29"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-42" x1="11" y1="40.73" x2="11.31" y2="40.73"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-43" x1="12.72" y1="39.01" x2="13.03" y2="39.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-44" x1="9.28" y1="39.01" x2="9.59" y2="39.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-45" x1="10.24" y1="37.57" x2="10.44" y2="37.57"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-46" x1="9.62" y1="38.26" x2="9.81" y2="38.26"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-47" x1="12.48" y1="39.71" x2="12.67" y2="39.71"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-48" x1="11.86" y1="40.4" x2="12.05" y2="40.4"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-49" x1="9.66" y1="39.72" x2="9.86" y2="39.72"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-50" x1="10.35" y1="40.34" x2="10.54" y2="40.34"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-51" x1="11.8" y1="37.48" x2="12" y2="37.48"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-52" x1="12.49" y1="38.11" x2="12.69" y2="38.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-53" x1="10.95" y1="39.09" x2="11.93" y2="39.09"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-54" x1="37.44" y1="38.09" x2="38.7" y2="38.09"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-55" x1="37.23" y1="38.09" x2="37.38" y2="38.09"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-56" x1="38.84" y1="38.13" x2="39.54" y2="38.13"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-57" x1="39.64" y1="38.11" x2="39.9" y2="38.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-58" x1="38.52" y1="39.34" x2="39.43" y2="39.34"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-59" x1="36.85" y1="38.11" x2="37.23" y2="38.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-60" x1="36.4" y1="38.11" x2="36.71" y2="38.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-61" x1="35.96" y1="38.11" x2="36.39" y2="38.11"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-62" x1="35.48" y1="38.12" x2="36.08" y2="38.12"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-63" x1="6.06" y1="25.81" x2="9.65" y2="25.81"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-64" x1="39.03" y1="25.98" x2="39.59" y2="25.98"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-65" x1="39.72" y1="25.54" x2="40.29" y2="25.54"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-66" x1="40.42" y1="25.55" x2="40.99" y2="25.55"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-67" x1="41.12" y1="25.55" x2="41.69" y2="25.55"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-68" x1="38.93" y1="26.44" x2="42.77" y2="26.44"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-69" x1="22.21" y1="10.51" x2="26.83" y2="10.51"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-70" x1="23.76" y1="9.57" x2="26.72" y2="9.57"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-71" x1="21.8" y1="11.78" x2="24.26" y2="11.78"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-72" x1="22.37" y1="41.01" x2="26.26" y2="41.01"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-73" x1="25.02" y1="41.59" x2="26.41" y2="41.59"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-74" x1="22.22" y1="41.59" x2="23.62" y2="41.59"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-75" x1="22.36" y1="42.29" x2="26.28" y2="42.29"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <polygon class="cls-1"
                                    points="17.71 18.88 13.97 15.54 9.52 15.54 9.52 15.03 14.16 15.03 18.05 18.51 17.71 18.88" />
                                <polygon class="cls-2"
                                    points="31.13 18.88 34.87 15.54 39.32 15.54 39.32 15.03 34.67 15.03 30.79 18.51 31.13 18.88" />
                                <polygon class="cls-3"
                                    points="17.71 32.73 13.97 36.08 9.52 36.08 9.52 36.58 14.16 36.58 18.05 33.11 17.71 32.73" />
                                <polygon class="cls-4"
                                    points="31.13 32.73 34.87 36.08 39.32 36.08 39.32 36.58 34.67 36.58 30.79 33.11 31.13 32.73" />
                                <rect class="cls-5" x="24.16" y="11.7" width="0.51" height="4.32" />
                                <rect class="cls-6" x="24.16" y="35.6" width="0.51" height="4.32" />
                                <rect class="cls-7" x="10.31" y="25.56" width="4.32" height="0.51" />
                                <rect class="cls-8" x="34.21" y="25.56" width="4.32" height="0.51" />
                                <path class="cls-9"
                                    d="M17.77,25.81a6.65,6.65,0,0,1,11.65-4.38l1.8-1.64A9.08,9.08,0,1,0,17.77,32l1.8-1.64A6.63,6.63,0,0,1,17.77,25.81Z" />
                                <path class="cls-10"
                                    d="M24.42,34.9a9.08,9.08,0,0,0,6.8-15.11l-1.8,1.63a6.65,6.65,0,0,1-9.85,8.94L17.77,32A9.08,9.08,0,0,0,24.42,34.9Z" />
                                <path class="cls-11"
                                    d="M28.2,25.81a3.78,3.78,0,0,1-6.5,2.62l-2.12,1.93a6.65,6.65,0,0,0,9.84-8.93l-2.13,1.93A3.73,3.73,0,0,1,28.2,25.81Z" />
                                <path class="cls-12"
                                    d="M24.42,19.16a6.65,6.65,0,0,0-4.85,11.2l2.13-1.93a3.78,3.78,0,1,1,5.43-5.25l.16.18,2.13-1.93A6.62,6.62,0,0,0,24.42,19.16Z" />
                                <path class="cls-13"
                                    d="M22.69,25.81a1.73,1.73,0,0,1,3.08-1.07l1.52-1.38a3.77,3.77,0,1,0-5.75,4.89,1.37,1.37,0,0,0,.16.18l1.52-1.38A1.7,1.7,0,0,1,22.69,25.81Z" />
                                <path class="cls-14"
                                    d="M24.42,29.59a3.78,3.78,0,0,0,3.78-3.78,3.73,3.73,0,0,0-.91-2.45l-1.52,1.38a1.73,1.73,0,0,1-2.55,2.31L21.7,28.43A3.77,3.77,0,0,0,24.42,29.59Z" />
                                <path class="cls-15"
                                    d="M24.42,27.53a1.72,1.72,0,0,0,1.35-2.79l-2.55,2.31A1.72,1.72,0,0,0,24.42,27.53Z" />
                                <path class="cls-16"
                                    d="M24.42,24.08a1.73,1.73,0,0,0-1.2,3l2.55-2.31A1.74,1.74,0,0,0,24.42,24.08Z" />
                                <path class="cls-17"
                                    d="M33.5,22a9.62,9.62,0,0,0-1.7-2.7l-.29.26-.29.26A9.08,9.08,0,0,1,17.77,32l-.29.27-.28.25.24.26A9.86,9.86,0,0,0,33.5,22Z" />
                                <path class="cls-18"
                                    d="M31.39,18.84A9.86,9.86,0,0,0,17.2,32.52l.28-.26.29-.26A9.08,9.08,0,1,1,31.22,19.79l.29-.26.29-.26C31.67,19.12,31.53,19,31.39,18.84Z" />
                                <polygon class="cls-19"
                                    points="24.55 25.9 26.14 30.52 26.84 28.77 28.29 30.19 28.69 29.78 24.55 25.9" />
                                <path class="cls-20"
                                    d="M26.14,30.59h0a.08.08,0,0,1-.07-.05l-1.59-4.62a.06.06,0,0,1,0-.08.08.08,0,0,1,.09,0l4.14,3.89a.09.09,0,0,1,0,.1h0l-.4.41a.09.09,0,0,1-.1,0l-1.37-1.35-.67,1.66A.07.07,0,0,1,26.14,30.59Zm-1.43-4.45,1.43,4.17.64-1.57a.07.07,0,0,1,.09,0l0,0,1.39,1.37.3-.3Z" />
                                <polygon class="cls-21"
                                    points="24.55 25.9 29.28 27.18 27.64 27.96 29.1 29.34 28.69 29.78 24.55 25.9" />
                                <path class="cls-22"
                                    d="M28.69,29.85h-.05L24.5,26a.07.07,0,0,1,0-.1.06.06,0,0,1,.07,0l4.73,1.28a.06.06,0,0,1,.05.06.08.08,0,0,1,0,.07L27.77,28l1.38,1.31a.08.08,0,0,1,0,.1l-.41.44s0,0,0,0ZM24.81,26l3.88,3.64.31-.33L27.6,28a.06.06,0,0,1,0-.07.05.05,0,0,1,0-.05l1.47-.71Z" />
                                <polygon class="cls-19"
                                    points="24.55 25.9 26.14 30.52 26.84 28.77 28.29 30.19 28.69 29.78 24.55 25.9" />
                                <polygon class="cls-21"
                                    points="24.55 25.9 29.28 27.18 27.64 27.96 29.1 29.34 28.69 29.78 24.55 25.9" />
                                <path class="cls-23"
                                    d="M37.85,14.22a.08.08,0,0,1,.08,0h.47a.08.08,0,0,1,.08,0l.1-.1h-.83Z" />
                                <polygon class="cls-24"
                                    points="38.55 13.36 38.51 13.36 38.37 13.36 38.34 13.36 38.21 13.36 38.16 13.36 38.13 13.36 37.96 13.36 37.93 13.36 37.9 13.36 37.72 13.36 37.72 13.46 38.62 13.46 38.62 13.35 38.55 13.36 38.55 13.36" />
                                <rect class="cls-25" x="37.72" y="13.76" width="0.9" height="0.09" />
                                <path class="cls-26"
                                    d="M37.93,12.08a.12.12,0,0,0-.1,0l-.07,0a.17.17,0,0,0,0,.1h0a.19.19,0,0,0,0,.07l.09,0H38v0A.22.22,0,0,0,37.93,12.08Z" />
                                <path class="cls-27"
                                    d="M38.66,13.52h-1a.1.1,0,0,0-.11.1.11.11,0,0,0,.11.11h1a.1.1,0,0,0,.1-.11.09.09,0,0,0-.1-.1Z" />
                                <path class="cls-28"
                                    d="M38.66,13.88h-1a.11.11,0,0,0-.11.1.11.11,0,0,0,.11.11h1a.1.1,0,0,0,.1-.11.1.1,0,0,0-.1-.1Z" />
                                <path class="cls-29"
                                    d="M38.48,14.26a.09.09,0,0,0-.08,0h-.47a.09.09,0,0,0-.08,0h0a.11.11,0,0,0,0,.15l.07,0h.47a.11.11,0,0,0,.11-.11s0-.05,0-.06Z" />
                                <path class="cls-30"
                                    d="M38.16,10.38h0a1.23,1.23,0,0,0-1.23,1.21,1.64,1.64,0,0,0,.39,1h0a1.45,1.45,0,0,1,.31.65.1.1,0,0,0,.07.1H38v-1h-.14a.16.16,0,0,1-.12,0,.13.13,0,0,1,0-.1.2.2,0,0,1,0-.13.21.21,0,0,1,.11,0,.18.18,0,0,1,.13.06.25.25,0,0,1,.05.19v0h.29v0a.26.26,0,0,1,.06-.19A.16.16,0,0,1,38.5,12a.18.18,0,0,1,.1,0,.21.21,0,0,1,0,.13.14.14,0,0,1,0,.1.16.16,0,0,1-.12,0h-.13v1h.28a.09.09,0,0,0,.06-.09,1.36,1.36,0,0,1,.31-.65h0a1.67,1.67,0,0,0,.37-1A1.23,1.23,0,0,0,38.16,10.38Zm-.21.34a1,1,0,0,0-.28.11.7.7,0,0,0-.37.41,1,1,0,0,0,.09.8.05.05,0,0,1,0,.08h0l-.05,0a1.16,1.16,0,0,1-.11-.91.71.71,0,0,1,.18-.3,1.1,1.1,0,0,1,.25-.19,1.21,1.21,0,0,1,.32-.11s.06,0,.07.05a.06.06,0,0,1,0,.07Z" />
                                <polygon class="cls-31"
                                    points="38.18 12.3 38.15 12.3 38.02 12.3 38.02 13.35 38.31 13.35 38.31 12.3 38.18 12.3" />
                                <path class="cls-32"
                                    d="M38.35,12.26h.14l.09,0a.19.19,0,0,0,0-.07h0a.17.17,0,0,0,0-.1l-.07,0a.12.12,0,0,0-.1,0,.22.22,0,0,0,0,.16Z" />
                                <polygon class="cls-33"
                                    points="38.35 13.35 38.35 13.36 38.31 13.36 38.31 13.35 38.02 13.35 38.02 13.36 37.98 13.36 37.98 13.35 37.72 13.35 37.72 13.36 37.9 13.36 37.93 13.36 37.96 13.36 38.13 13.36 38.16 13.36 38.21 13.36 38.34 13.36 38.37 13.36 38.51 13.36 38.55 13.36 38.55 13.36 38.63 13.35 38.63 13.35 38.35 13.35" />
                                <rect class="cls-34" x="38.31" y="13.35" width="0.04" height="0.01" />
                                <rect class="cls-35" x="37.98" y="13.35" width="0.04" height="0.01" />
                                <path class="cls-36"
                                    d="M11.77,13a.29.29,0,0,1,0-.09.85.85,0,0,1,.73-.7h.24a1,1,0,0,0-.29-.58h0s0,0,0,0a1.14,1.14,0,0,0-.71-.25H10.44a1.1,1.1,0,0,0-.75.35h0a1.75,1.75,0,0,0-.2.35,1.71,1.71,0,0,0-.05.55,1,1,0,0,0,.57.85,1.13,1.13,0,0,0,.51.12h.37c-.07.21-.15.42-.23.63l.44-.31.45-.31,0,0a1.22,1.22,0,0,0,.27,0s0-.07,0-.11A1.39,1.39,0,0,1,11.77,13Zm-1.3-.4a.2.2,0,0,1-.19-.19.19.19,0,0,1,.19-.18.18.18,0,0,1,.18.18.19.19,0,0,1-.18.19Zm.63,0h0a.19.19,0,0,1-.19-.19.18.18,0,0,1,.19-.18h0a.17.17,0,0,1,.17.19.19.19,0,0,1-.17.18Zm.61,0a.19.19,0,0,1-.19-.19.18.18,0,0,1,.19-.18.18.18,0,0,1,.18.18.18.18,0,0,1-.18.19Z" />
                                <path class="cls-37"
                                    d="M13,12.31h-.4a.73.73,0,0,0-.71.74v0a.73.73,0,0,0,.11.43.71.71,0,0,0,.6.34s.08,0,.11,0l.29.21.23.16a.09.09,0,0,0,.13,0,.13.13,0,0,0,0-.06c0-.1-.07-.19-.1-.29a.88.88,0,0,0,.28,0,.74.74,0,0,0,.48-.35.79.79,0,0,0,.08-.45v-.1a.72.72,0,0,0-.73-.61Z" />
                                <path class="cls-38"
                                    d="M11.16,36.78A2.23,2.23,0,1,0,13.38,39h0A2.23,2.23,0,0,0,11.16,36.78Zm0,4.18a1.95,1.95,0,1,1,1.94-2,1.95,1.95,0,0,1-1.94,2Z" />
                                <path class="cls-39"
                                    d="M11.16,37.45a.16.16,0,0,0,.15-.16.15.15,0,0,0-.15-.15.16.16,0,0,0-.16.15h0A.16.16,0,0,0,11.16,37.45Z" />
                                <path class="cls-40"
                                    d="M11.16,40.58a.16.16,0,0,0-.16.15.16.16,0,0,0,.16.16.16.16,0,0,0,.15-.16h0a.15.15,0,0,0-.15-.15Z" />
                                <path class="cls-41"
                                    d="M12.87,38.86a.15.15,0,0,0-.15.15.16.16,0,0,0,.15.16A.16.16,0,0,0,13,39h0a.15.15,0,0,0-.15-.15Z" />
                                <path class="cls-42"
                                    d="M9.44,38.86a.16.16,0,0,0-.16.15.16.16,0,0,0,.16.16A.16.16,0,0,0,9.59,39h0A.15.15,0,0,0,9.44,38.86Z" />
                                <path class="cls-43" d="M10.44,37.57a.1.1,0,1,0-.1.1.11.11,0,0,0,.1-.1Z" />
                                <path class="cls-44"
                                    d="M9.81,38.26a.09.09,0,0,0-.09-.1.09.09,0,0,0-.1.1.09.09,0,0,0,.1.09.09.09,0,0,0,.09-.09Z" />
                                <path class="cls-45" d="M12.58,39.61a.1.1,0,0,0,0,.2.1.1,0,0,0,0-.2Z" />
                                <path class="cls-46" d="M12,40.3a.1.1,0,0,0,0,.2.1.1,0,0,0,.1-.1h0a.1.1,0,0,0-.1-.1Z" />
                                <path class="cls-47"
                                    d="M9.76,39.62a.1.1,0,0,0,0,.2.11.11,0,0,0,.1-.1h0A.11.11,0,0,0,9.76,39.62Z" />
                                <path class="cls-48"
                                    d="M10.45,40.25a.09.09,0,0,0-.1.09.09.09,0,0,0,.1.1.09.09,0,0,0,.09-.1.09.09,0,0,0-.09-.09Z" />
                                <path class="cls-49"
                                    d="M11.9,37.58a.1.1,0,0,0,.1-.1.1.1,0,1,0-.2,0h0A.1.1,0,0,0,11.9,37.58Z" />
                                <path class="cls-50"
                                    d="M12.59,38a.09.09,0,0,0-.1.1.09.09,0,0,0,.1.09.11.11,0,0,0,.1-.09h0a.1.1,0,0,0-.1-.1Z" />
                                <path class="cls-51"
                                    d="M11.9,40.25a.08.08,0,0,0,0-.09l-.61-1a.22.22,0,0,0,0-.29l-.07,0V38a.07.07,0,1,0-.14,0v.83h0a.21.21,0,0,0-.13.27.2.2,0,0,0,.2.13h0l.61,1a.07.07,0,0,0,.09,0Z" />
                                <path class="cls-52"
                                    d="M37.44,36.78v2.61s.59-.75,1-.81h.25v-.92l-.2,0A1.78,1.78,0,0,1,37.44,36.78Z" />
                                <rect class="cls-53" x="37.23" y="36.78" width="0.15" height="2.6" />
                                <rect class="cls-54" x="38.84" y="37.61" width="0.7" height="1.03" />
                                <path class="cls-55" d="M39.64,37.69v.83a.47.47,0,0,0,.22-.62.45.45,0,0,0-.22-.21Z" />
                                <path class="cls-56"
                                    d="M38.87,38.72h.56l-.59,1.12a.15.15,0,0,1-.22.09c-.17-.06-.07-.22-.07-.22Z" />
                                <path class="cls-57" d="M37.23,37.74s-.38,0-.38.35.38.38.38.38Z" />
                                <path class="cls-58"
                                    d="M36.65,38.53h0a.63.63,0,0,1-.21-.44.56.56,0,0,1,.21-.38.06.06,0,1,1,.08.09h0a.49.49,0,0,0-.17.3.5.5,0,0,0,.17.34,0,0,0,0,1,0,.08S36.67,38.53,36.65,38.53Z" />
                                <path class="cls-59"
                                    d="M36.33,38.9h0a1.1,1.1,0,0,1-.34-.8,1,1,0,0,1,.34-.76.05.05,0,0,1,.08,0,.06.06,0,0,1,0,.09.82.82,0,0,0-.29.66,1,1,0,0,0,.29.7.06.06,0,0,1,0,.09Z" />
                                <path class="cls-60"
                                    d="M36,39.26h0a1.7,1.7,0,0,1-.5-1.16A1.42,1.42,0,0,1,36,37a.06.06,0,0,1,.09,0,.06.06,0,0,1,0,.08h0a1.34,1.34,0,0,0-.45,1,1.55,1.55,0,0,0,.46,1.07.06.06,0,0,1,0,.09Z" />
                                <path class="cls-61"
                                    d="M7.86,24a1.8,1.8,0,1,0,1.79,1.8A1.81,1.81,0,0,0,7.86,24Zm0,3.38a1.58,1.58,0,1,1,1.58-1.58h0A1.6,1.6,0,0,1,7.86,27.39Z" />
                                <polygon class="cls-62"
                                    points="39.59 26.25 39.59 25.52 39.03 25.52 39.03 26.45 39.38 26.33 39.59 26.25" />
                                <polygon class="cls-63"
                                    points="40.05 26.1 40.06 26.11 40.29 26.29 40.29 24.79 39.73 24.79 39.73 26.21 39.9 26.15 40.05 26.1" />
                                <polygon class="cls-64"
                                    points="40.57 26.53 40.61 26.51 40.99 26.37 40.99 24.57 40.42 24.57 40.42 26.41 40.55 26.51 40.57 26.53" />
                                <polygon class="cls-65"
                                    points="41.69 26.1 41.69 24.79 41.12 24.79 41.12 26.32 41.34 26.23 41.69 26.1" />
                                <polygon class="cls-66"
                                    points="41.97 25.84 42.08 26.11 42.06 26.12 41.69 26.26 41.34 26.39 41.12 26.47 41.03 26.51 40.99 26.53 40.61 26.67 40.57 26.68 40.55 26.67 40.42 26.56 40.29 26.45 40.06 26.26 40.05 26.25 39.9 26.3 39.73 26.36 39.59 26.41 39.38 26.48 39.03 26.6 38.93 26.63 39.06 26.94 39.59 26.76 39.59 26.76 39.73 26.71 39.95 26.64 39.98 26.63 39.99 26.64 40.29 26.89 40.48 27.05 40.73 26.95 40.99 26.86 41.12 26.81 41.39 26.71 41.41 26.7 41.69 26.59 42.17 26.41 42.3 26.68 42.77 25.97 41.97 25.84" />
                                <path class="cls-67"
                                    d="M25.67,12.12l.24-.41a.19.19,0,0,1,.25-.06h0l.67.39A.84.84,0,0,0,26,11.2a.67.67,0,0,0-.24,0l-.12-.08-1-1.05h0l-.71-.75a.29.29,0,0,1-.08-.13.84.84,0,0,0-1.21-1l.67.4a.17.17,0,0,1,.07.24l-.24.41a.17.17,0,0,1-.24.07L22.21,9a.83.83,0,0,0,.83.83.67.67,0,0,0,.24,0l.12.08,1,1.06h0l.71.74a.26.26,0,0,1,.08.13.83.83,0,0,0,.55,1,.8.8,0,0,0,.66-.07l-.67-.39a.18.18,0,0,1-.07-.25Z" />
                                <path class="cls-68"
                                    d="M26.72,8.38l-.29-.29-.49.2-.2.49L23.8,10.72c-.09.09,0,.15.07.23s.13.15.22.06L26,9.07l.49-.19Z" />
                                <path class="cls-69"
                                    d="M24.17,10.93l-.29-.29a.33.33,0,0,0-.46,0l-1.51,1.51a.32.32,0,0,0,0,.46l.29.29a.32.32,0,0,0,.46,0l1.51-1.51A.33.33,0,0,0,24.17,10.93ZM22,12.39,22,12.33s.05-.13.15-.23l1.21-1.22c.11-.1.21-.17.24-.14l.06.06s-.05.12-.15.23l-1.21,1.21C22.17,12.35,22.07,12.41,22,12.39Zm.22.22-.06-.06s0-.13.15-.24l1.21-1.21c.11-.1.21-.17.24-.14l.05,0s0,.13-.14.24L22.5,12.46c-.11.11-.22.17-.24.15Zm1.67-1.14-1.22,1.21c-.1.1-.21.17-.23.15l-.06-.06s0-.13.15-.24l1.21-1.21c.1-.1.21-.17.23-.15l.06.06s0,.13-.14.24Z" />
                                <path class="cls-70" d="M24.32,41.83l1.94-1.62H22.37Z" />
                                <path class="cls-71" d="M26.41,40.37a.43.43,0,0,1,0,0L25,41.47l1.38,1.39s0,0,0,0Z" />
                                <path class="cls-72" d="M22.24,40.32s0,0,0,0v2.44a.09.09,0,0,1,0,0l1.39-1.39Z" />
                                <path class="cls-73"
                                    d="M24.88,41.58l-.51.43a.08.08,0,0,1-.11,0l-.51-.43L22.36,43h3.92Z" />
                            </svg>
                        </div>
                        <h4>الخدمات التسويقية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
                <div class="child-services-block last-child">
                    <div class="service-block text-center" data-aos="fade-down-left" data-aos-duration="1000">
                        <div class="img">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: url(#linear-gradient);
                                        }

                                        .cls-2 {
                                            fill: url(#linear-gradient-2);
                                        }

                                        .cls-3 {
                                            fill: url(#linear-gradient-3);
                                        }

                                        .cls-4 {
                                            fill: url(#linear-gradient-4);
                                        }
                                    </style>
                                    <linearGradient id="linear-gradient" x1="12.89" y1="19.64" x2="38.16" y2="19.64"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#1b4071" />
                                        <stop offset="0.26" stop-color="#1d4374" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="19.9" y1="35.44" x2="30.93" y2="35.44"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-3" x1="19.9" y1="37.53" x2="30.93" y2="37.53"
                                        xlink:href="#linear-gradient" />
                                    <linearGradient id="linear-gradient-4" x1="20.65" y1="41.48" x2="30.39" y2="41.48"
                                        xlink:href="#linear-gradient" />
                                </defs>
                                <path class="cls-1"
                                    d="M25.52,5.48A12.63,12.63,0,0,0,12.89,18.11a13.26,13.26,0,0,0,4.16,9.66,8.48,8.48,0,0,1,2.85,6v.08h3.52V28.76h4.21v5.05h3.52v-.08a8.48,8.48,0,0,1,2.85-6,13.26,13.26,0,0,0,4.16-9.66A12.63,12.63,0,0,0,25.52,5.48Zm1.41,22.81H24.12V27.05h2.81Zm0-1.71H24.12a11,11,0,0,0-2.92-6.22,22.79,22.79,0,0,0,4.12-6.75v5.33a1.23,1.23,0,1,0,.41,2.42,1.22,1.22,0,0,0,1-1.42,1.23,1.23,0,0,0-1-1V13.61a22.58,22.58,0,0,0,4.12,6.75A10.86,10.86,0,0,0,26.93,26.58Z" />
                                <path class="cls-2"
                                    d="M30.54,34.82H20.29a.39.39,0,0,0-.39.39h0v.46a.4.4,0,0,0,.39.4H30.54a.39.39,0,0,0,.39-.4v-.46a.39.39,0,0,0-.39-.39Z" />
                                <path class="cls-3"
                                    d="M30.54,36.91H20.29a.39.39,0,0,0-.39.39h0v.46a.39.39,0,0,0,.39.39H30.54a.38.38,0,0,0,.39-.39V37.3A.38.38,0,0,0,30.54,36.91Z" />
                                <path class="cls-4"
                                    d="M20.65,39.44a4.49,4.49,0,0,0,4.48,4.48h.78a4.48,4.48,0,0,0,4.48-4.48h0V39H20.65Z" />
                            </svg>
                        </div>
                        <h4>خدمات التصميم والحملات الإعلانية</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lectus vitae justo
                            tristique, nec malesuada elit</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="statistics">
        <div class="container">
            <div class="row gy-4 nums">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="statistics-block">
                        <img src="{{ asset('website/imgs/icons/statistics-1.svg') }}" alt="statistics-1">
                        <div class="main-counter">
                            <div class="d-flex align-items-center w-100 justify-content-around">
                                <i class="fa fa-plus"></i>
                                <h3 data-count="746" class="counter">0</h3>
                            </div>
                            <h6>Descriptoin</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="statistics-block">
                        <img src="{{ asset('website/imgs/icons/statistics-2.svg') }}" alt="statistics-1">
                        <div class="main-counter">
                            <div class="d-flex align-items-center w-100 justify-content-around">
                                <i class="fa fa-percent"></i>
                                <h3 data-count="98" class="counter">0%</h3>
                            </div>
                            <h6>Descriptoin</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="statistics-block">
                        <img src="{{ asset('website/imgs/icons/statistics-3.svg') }}" alt="statistics-1">
                        <div class="main-counter">
                            <div class="d-flex align-items-center w-100 justify-content-around">
                                <i class="fa fa-plus"></i>
                                <h3 data-count="181" class="counter">0</h3>
                            </div>
                            <h6>Descriptoin</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="statistics-block">
                        <img src="{{ asset('website/imgs/icons/statistics-4.svg') }}" alt="statistics-1">
                        <div class="main-counter">
                            <div class="d-flex align-items-center w-100 justify-content-around">
                                <i class="fa fa-plus"></i>
                                <h3 data-count="972" class="counter">0</h3>
                            </div>
                            <h6>Descriptoin</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <h3 data-aos="fade-up" data-aos-duration="1000">تعرف على خبراء <span class="main-color">سلسلة</span></h3>
            <div class="swiper mySwiper-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. ليلى بنت معيض</span>
                            <span class="job">مستشارة اقتصادية ومطورة أعمال</span>
                            <p class="desc">
                                مؤسسة شركة خبراء سلسلة للاستشارات وحلول الأعمال و
                                مؤسسة منصة سلسلة لتخطيط الأعمال

                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. مصطفى حسن</span>
                            <span class="job">مستشار اقتصادي</span>
                            <p class="desc">
                                متخصص في دراسات الجدوى الاقتصادية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/أ.فاطمة مطاوع.png') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. فاطمة مطاوع</span>
                            <span class="job">مستشارة مالية وإدارية</span>
                            <p class="desc">
                                خبيرة التحليل والتخطيط المالي والمحاسبي والخدمات المالية و
                                مساهمة في تأسيس نظام سلسلة لتخطيط الأعمال

                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">د. عبد الله الحسيني</span>
                            <span class="job">مستشار ومراجع محاسبي</span>
                            <p class="desc">
                                خبير حوكمة وتأسيس شركات
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/أ.شادية المصري.png') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. شادية المصري</span>
                            <span class="job"> مستشارة ومقيّمة معتمدة في إدارة الابتكار المؤسسي وتطبيقات
                                الاستدامة</span>
                            <p class="desc">
                                باحثة في مجال الابتكار والريادة المجتمعية.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/أ.أحمد ديب.png') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">د. أحمد الديب</span>
                            <span class="job">مستشار الموارد البشرية</span>
                            <p class="desc">
                                متخصص إعداد الهياكل التنظيمية للمشاريع والشركات و
                                متخصص خدمات تخطيط القوى العاملة والاستقطاب والتوظيف

                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">المحامي فهد القحطاني</span>
                            <span class="job"> مستشار قانوني</span>
                            <p class="desc">
                                مستشار قانوني.

                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">المحامي أسامة جبر</span>
                            <span class="job">مستشار صياغة اللوائح والإجراءات والسياسات التنظيمية.</span>
                            <p class="desc">
                                مستشار صياغة اللوائح والإجراءات والسياسات التنظيمية.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. عبد الرحمن سليمان</span>
                            <span class="job">مستشار ومحلل استثماري</span>
                            <p class="desc">
                                متخصص تقييم شركات و متخصص تحليل الأسواق المالية وصناديق الاستثمار ودراسة مخاطر السوق.
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. أحمد محمود</span>
                            <span class="job">مستشار تسويق وتطوير العلامات التجارية</span>
                            <p class="desc">
                                مستشار تسويق وتطوير العلامات التجارية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. محمد الشحاذة</span>
                            <span class="job">مستشار مؤسس ومطور لكبرى العلامات التجارية في مجال الاغذية</span>
                            <p class="desc">
                                مستشار مؤسس ومطور لكبرى العلامات التجارية في مجال الاغذية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. كريم الزيادي</span>
                            <span class="job">مستشار تصميم الهوية البصرية والعلامات التجارية</span>
                            <p class="desc">
                                مستشار تصميم الهوية البصرية والعلامات التجارية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/م.كريم سيف.png') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ.كريم سيف</span>
                            <span class="job">مستشار تصميم تجربة المستخدم وتصميم الويب والتطبيقات</span>
                            <p class="desc">
                                مستشار تصميم تجربة المستخدم وتصميم الويب والتطبيقات
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">د. أحمد مصطفى</span>
                            <span class="job">مستشار الأبحاث التسويقية والطبية</span>
                            <p class="desc">
                                مستشار الأبحاث التسويقية والطبية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">د. محمد الأخرس</span>
                            <span class="job">مستشار تدريب وتأهيل ومعلق صوتي</span>
                            <p class="desc">
                                مستشار تدريب وتأهيل ومعلق صوتي
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ ('website/imgs/خبراء سلسلة/صور شخصية/غير معروف.jpg') }}" alt="testimonial-1" class="img-fluid">
                        <div class="info">
                            <span class="name">أ. محمد الشعار</span>
                            <span class="job">مستشار تأسيس وإدارة المطاعم والفنادق والخدمات السياحية</span>
                            <p class="desc">
                                مستشار تأسيس وإدارة المطاعم والفنادق والخدمات السياحية
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اطلب استشارة
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="planning">
        <div class="container">
            <h3 class="mb-5" data-aos="fade-up" data-aos-duration="1000">منصة سلسلة لتخطيط الأعمال</h3>
            <div class="up">
                <div class="imgs-container">
                    <div class="swiper mySwiper-6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('website/imgs/planning.webp') }}" alt="img" data-aos="fade-left" data-aos-duration="1000"
                                    class="rounded">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('website/imgs/planning.webp') }}" alt="img" data-aos="fade-left" data-aos-duration="1000"
                                    class="rounded">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('website/imgs/planning.webp') }}" alt="img" data-aos="fade-left" data-aos-duration="1000"
                                    class="rounded">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('website/imgs/planning.webp') }}" alt="img" data-aos="fade-left" data-aos-duration="1000"
                                    class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="planning-content" data-aos="fade-right" data-aos-duration="1000">
                    <p>كل ما تحتاجه لإنجاز وتخطيط أعمالك في منصة واحدة فقط، سارع وسجل في المنصة الآن لتحصل على كافة
                        المميزات المتاحة داخل
                        المنصة</p>
                    <a href="https://slsalah.space/signup">
                        <button>سجل الآن</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">تعرف على معرض أعمال <span class="main-color">سلسلة</span>
            </h3>
            <div class="row gap-0">
                <div class="col-lg-4 col-md-6 col-12 ">
                    <figure data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('website/imgs/portfolio/portfolio-1.webp') }}" alt="portfolio-1" class="img-fluid">
                        <div class="content-layer">
                            <h5 class="title">شركة الغامدي للمقاولات</h5>
                            <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة الحلول
                                التقنية والتسويقية والمتابعة
                                الدورية.</p>
                        </div>
                    </figure>
                    <figure data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('website/imgs/portfolio/portfolio-2.webp') }}" alt="portfolio-2" class="img-fluid">
                        <div class="content-layer">
                            <h5 class="title">شركة الغامدي للمقاولات</h5>
                            <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة الحلول
                                التقنية والتسويقية والمتابعة
                                الدورية.</p>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <figure data-aos="fade-down" data-aos-duration="1000">
                        <img src="{{ asset('website/imgs/portfolio/portfolio-3.webp') }}" alt="portfolio-3" class="img-fluid">
                        <div class="content-layer">
                            <h5 class="title">شركة الغامدي للمقاولات</h5>
                            <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة الحلول
                                التقنية والتسويقية والمتابعة
                                الدورية.</p>
                        </div>
                    </figure>
                    <figure data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('website/imgs/portfolio/portfolio-4.webp') }}" alt="portfolio-4" class="img-fluid">
                        <div class="content-layer">
                            <h5 class="title">شركة الغامدي للمقاولات</h5>
                            <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة بكافة الحلول
                                التقنية والتسويقية والمتابعة
                                الدورية.</p>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-12">
                    <figure data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('website/imgs/portfolio/portfolio-5.webp') }}" alt="portfolio-5" class="img-fluid">
                        <div class="content-layer">
                            <h5 class="title">شركة الغامدي للمقاولات</h5>
                            <p>تم استلام الفكرة من العميل والمساعدة على دراسة الجدوى الاقتصادية والمساعدة
                                بكافة الحلول
                                التقنية والتسويقية والمتابعة
                                الدورية.</p>
                        </div>
                    </figure>
                </div>
            </div>
            <button>المزيد</button>
        </div>
    </section>

    <section id="carousel">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">بكل فخر عملاء <span class="main-color">سلسلة</span></h3>
            <div class="swiper mySwiper-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-1.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-2.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-3.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-4.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-5.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-6.webp') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('website/imgs/logos/logo-7.webp') }}" alt="logo" class="img-fluid">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="swiper-button-next">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="other-testimonial">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">آراء عملائنا</h3>
            <div class="testimonial mySwiper-3">
                <div class="testi-content swiper-wrapper">
                    <div class="slide swiper-slide">
                        <p class="desc">
                            This proved to be impossible using the traditional concepts of space and time. Einstein
                            developed a new view of time
                            first and then space. This proved to be impossible using the traditional concepts of space
                            and time. Einstein developed
                            a new view of time first and then space.
                        </p>
                        <img src="{{ asset('website/imgs/cover.svg') }}" alt="" class="image" />
                        <i class="bx bxs-quote-alt-left quote-icon"></i>
                        <div class="details">
                            <span class="name">خالد</span>
                            <span class="job">محاسب لدى شركة Unknow</span>
                        </div>
                    </div>
                    <div class="slide swiper-slide">
                        <p class="desc">
                            This proved to be impossible using the traditional concepts of space and time. Einstein
                            developed a new view of time
                            first and then space. This proved to be impossible using the traditional concepts of space
                            and time. Einstein developed
                            a new view of time first and then space.
                        </p>
                        <img src="{{ asset('website/imgs/cover.svg') }}" alt="" class="image" />
                        <i class="bx bxs-quote-alt-left quote-icon"></i>
                        <div class="details">
                            <span class="name">خالد</span>
                            <span class="job">محاسب لدى شركة Unknow</span>
                        </div>
                    </div>
                    <div class="slide swiper-slide">
                        <p class="desc">
                            This proved to be impossible using the traditional concepts of space and time. Einstein
                            developed a new view of time
                            first and then space. This proved to be impossible using the traditional concepts of space
                            and time. Einstein developed
                            a new view of time first and then space.
                        </p>
                        <img src="{{ asset('website/imgs/cover.svg') }}" alt="" class="image" />
                        <i class="bx bxs-quote-alt-left quote-icon"></i>
                        <div class="details">
                            <span class="name">خالد</span>
                            <span class="job">محاسب لدى شركة Unknow</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next nav-btn rotate">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="f00" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="#1C274C" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-button-prev nav-btn">
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="#1C274C" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="last-blog">
        <div class="container">
            <h3 data-aos="fade-down" data-aos-duration="1000">آخر المقالات</h3>
            <div class="row align-items-center justify-content-center gy-4">
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="last-blog-block">
                        <h4>انـضـم لـنـشـرتـنـا الـبـريـديـة</h4>
                        <p>مقالات غنية بالمعلومات المفيدة</p>
                        <div class="d-flex flex-wrap">
                            <input type="email" placeholder="البريد الالكتروني" class="form-control">
                            <a href="https://slsalah.space/signup">
                                <button>سجل الآن</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="top position-relative">
                        <div>
                            <button>تحليل</button>
                            <button>تسويق</button>
                        </div>
                    </div>
                    <div class="bottom">
                        <h5>دراسة الجدوى الاقتصادية</h5>
                        <p>هذا النص هو نص تجريبي لتعويض نص حقيقي سيزود لاحقاً، هذا النص هو نص تجريبي لتعويض نص حقيقي
                            سيزود لاحقاً، هذا النص هو نص
                            تجريبي لتعويض نص حقيقي سيزود لاحقاً.</p>
                        <a href="#">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
    </section>

                                            {{-- Consulting Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="background-color: #fff;">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="close">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
                <div class="modal-header d-flex flex-column justify-content-center">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">احجز استشارة</h1>
                    <p>استشارة مجانية لمدة 30 دقيقة</p>
                </div>
                <div class="modal-body">
                    <form class="row needs-validation" novalidate style="width: 100%; margin: auto;">
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                الاسم الكامل
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;
                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <input type="text" class="form-control" id="validationCustom01" value="" placeholder="الاسم"
                                required>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال اسم
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                العنوان
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;

                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <input type="text" class="form-control" id="validationCustom01" value=""
                                placeholder="البلد، المدينة" required>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال العنوان
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                مجال العمل
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;

                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <input type="text" class="form-control" id="validationCustom01" value=""
                                placeholder="مطاعم، بنوك، مقاهي،...." required>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال مجال العمل
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                الجوال
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;

                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <div class="flag-input">
                                <input style="text-align: left; padding-left: 70px;" type="number" class="form-control"
                                    id="validationCustom01" value="" placeholder="12345678952" required>
                                <img src="imgs/icons/Saudi-Arabia-Flag.png" class="img-fluid" alt="flag">
                            </div>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال رقم جوال
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                البريد الالكتروني
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;

                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <input style="text-align: left; padding-left: 24px;" type="email" class="form-control"
                                id="validationCustom01" value="" placeholder="example@gmail.com" required>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال البريد الالكتروني
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                موضوع الاستشارة
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;

                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <input type="text" class="form-control" id="validationCustom01" value=""
                                placeholder="موضوع الاستشارة" required>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال موضوع الاستشارة
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label mb-0">
                                الشرح
                                <svg xmlns="http://www.w3.org/2000/svg" height=".4em" viewBox="0 0 512 512">
                                    <style>
                                        svg {
                                            fill: #da4949;
                                        }
                                    </style>
                                    <path
                                        d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z" />
                                </svg>
                            </label>
                            <textarea type="text" class="form-control" id="validationCustom01" value=""
                                placeholder="نبذة عن الاستشارة المطلوبة" required></textarea>
                            <div class="valid-feedback mt-2 ">
                                ممتاز
                            </div>
                            <div class="invalid-feedback mt-2">
                                الرجاء إدخال نبذة عن الاستشارة المطلوبة
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="submit">احجز الآن</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection