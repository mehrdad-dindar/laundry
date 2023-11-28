<?php
get_header();
?>
<main class="container mx-auto my-6 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="rounded-lg overflow-hidden">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide1.webp"?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide2.webp"?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide3.webp"?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide4.webp"?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide5.webp"?>">
                    <img class="swiper-slide" src="<?= get_template_directory_uri()."/dist/imgs/slide6.webp"?>">
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center">
        <h1 class="font-bold text-2xl mb-6">نصب، تعمیر و سرویس انواع لباسشویی</h1>
        <ul class="leading-8 list-image-checkmark">
            <li>نصب، نگهداری و تعمیر انواع لباسشویی ال جی، سامسونگ، دوو، بوش و پاکشوما</li>
            <li>تعویض قطعات فرسوده و معیوب انواع لباسشویی</li>
            <li>تهیه و توضیع قطعات و لوازم جانبی انواع لباسشویی</li>
            <li>رسوب زدایی و جرم گیری کامل ماشین لباسشویی</li>
            <li>تعویض یا تعمیر تخصصی انواع برد ماشین لباسشوویی</li>
            <li>سرویس سالیانه</li>
        </ul>
    </div>
</main>
<script>
    const slider = new Swiper(".swiper",{
        spaceBetween:16,
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

</script>
<?php
get_footer();