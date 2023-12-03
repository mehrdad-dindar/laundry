<?php
get_header();
?>
    <main class="container my-6 mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex items-center">
            <div class="swiper rounded-lg" id="slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide1.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide2.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide3.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide4.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide5.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/slide6.webp" ?>">
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-2xl mb-6">نصب، تعمیر و سرویس انواع لباسشویی</h1>
            <ul class="leading-8 list-image-checkmark list-disc">
                <li>نصب، نگهداری و تعمیر انواع لباسشویی ال جی، سامسونگ، دوو، بوش و پاکشوما</li>
                <li>تعویض قطعات فرسوده و معیوب انواع لباسشویی</li>
                <li>تهیه و توضیع قطعات و لوازم جانبی انواع لباسشویی</li>
                <li>رسوب زدایی و جرم گیری کامل ماشین لباسشویی</li>
                <li>تعویض یا تعمیر تخصصی انواع برد ماشین لباسشوویی</li>
                <li>سرویس سالیانه</li>
            </ul>
        </div>
    </main>
    <section class="container my-6">
        <div class="swiper rounded-lg" id="services">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide flex flex-col justify-center items-center bg-laundry-100 rounded-lg p-4">
                    <span class="w-12 h-12 mb-2">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                             viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path
                                    d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
                                    fill="#145990"/></svg>
                    </span>
                    <strong class="text-lg mb-2">سرویس سالیانه</strong>
                    <span class="text-center">ارائه سرویس های سالیانه به صورت متداول به مشتریان محترم</span>
                </div>
                <div class="swiper-slide flex flex-col justify-center items-center bg-laundry-100 rounded-lg p-4">
                    <span class="w-12 h-12 mb-2">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                             viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path
                                    d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"
                                    fill="#145990"/></svg>
                    </span>
                    <strong class="text-lg mb-2">پشتیبانی فنی</strong>
                    <span class="text-center">ارائه خدمت پشتیبانی در قبال تعمیرات و اقدامات انجام شده</span>
                </div>
                <div class="swiper-slide flex flex-col justify-center items-center bg-laundry-100 rounded-lg p-4">
                    <span class="w-12 h-12 mb-2">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                             viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path
                                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm165.8 21.7c-7.6 8.1-20.2 8.5-28.3 .9s-8.5-20.2-.9-28.3c14.5-15.5 35.2-22.3 54.6-22.3s40.1 6.8 54.6 22.3c7.6 8.1 7.1 20.7-.9 28.3s-20.7 7.1-28.3-.9c-5.5-5.8-14.8-9.7-25.4-9.7s-19.9 3.8-25.4 9.7z"
                                    fill="#145990"/></svg>
                    </span>
                    <strong class="text-lg mb-2">سابقه و تجربه طولانی</strong>
                    <span class="text-center">دارای بهترین نصاب و تعمیرکاران متخصص با چندین سال سابقه مفید و درخشان</span>
                </div>
                <div class="swiper-slide flex flex-col justify-center items-center bg-laundry-100 rounded-lg p-4">
                    <span class="w-12 h-12 mb-2">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                             viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path
                                    d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
                                    fill="#145990"/></svg>
                    </span>
                    <strong class="text-lg mb-2">مشاوره رایگان</strong>
                    <span class="text-center">مشاوره دقیق و تخصصی در زمینه نصب، تعمیر و نگهداری انواع ماشین لباسشویی</span>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-6 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col justify-center items-center">
            <h1 class="font-bold text-2xl mb-6">نصب و تعمیر تخصصی لباسشویی‌های دوو، پاکشوما و اسنوا</h1>
            <ul class="leading-10 list-image-thumbs">
                <li>خدمات نصب و تعمیر تخصصی لباسشویی</li>
                <li>پشتیبانی کامل برای انواع لباسشویی‌ها</li>
                <li>تعمیرات حرفه‌ای لباسشویی با تضمین کیفیت</li>
                <li>نصب لباسشویی با خدمات پس ازفروش</li>
                <li>تعمیرات سریع و کارآمد برای انواع لباسشویی</li>
            </ul>
        </div>
        <div class="flex items-center">
            <div class="swiper rounded-lg" id="slider2">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/washing-machine-1.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/washing-machine-2.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/washing-machine-3.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/washing-machine-4.webp" ?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri() . "/dist/imgs/washing-machine-5.webp" ?>">
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <script>
        const slider = new Swiper("#slider", {
            spaceBetween: 16,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
        const slider2 = new Swiper("#slider2", {
            spaceBetween: 16,
            centeredSlides: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
        const services = new Swiper("#services", {
            spaceBetween: 24,
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                },
                768: {
                    slidesPerView: 2.5,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });


    </script>
<?php
get_footer();