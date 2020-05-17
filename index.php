<?php
include_once('./common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="long_container page_<?=PAGE_NAME?>">
    <?php include('./include/mainLayer.php') ?>  
    <div class="swiper-container bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/banner/20200508103524_1.jpg" alt="" class="w100"></div>
            <div class="swiper-slide"><img src="/images/banner/20200508214227_2.jpg" alt="" class="w100"></div>
            <div class="swiper-slide"><img src="/images/banner/20200508214227_3.jpg" alt="" class="w100"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="view">
        <div class="title">아트데이옥션 5월<br>온라인미술품경매</div>
        <div class="content">
            <dl>
                <dt>경매&전시</dt>
                <dd>2020.5.9(토) - 5.13(수)</dd>
            </dl>
            <dl>
                <dt>전시장소</dt>
                <dd>헤럴드갤러리(10am - 6pm)</dd>
            </dl>
            <dl>
                <dt>경매마감</dt>
                <dd>5.13(수) 4pm부터 작품순 1분간격 1점씩 마감</dd>
            </dl>
            <dl>
                <dt>주차안내</dt>
                <dd>인근 지정주차장 이용(무료) <a href="#">상세보기</a></dd>
            </dl>
        </div>
        <div class="under">
            <a href="#" class="fill">출품작 보기</a>
            <a href="#">오시는 길</a>
        </div>
    </div>
</div>

<script>
    var bannerSwiper = new Swiper('.bannerSwiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
    })
</script>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>