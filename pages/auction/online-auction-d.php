<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <div class="page_title_field border">
        <h2 class="page_subject type3">
            <span class="sup">진행중인 경매</span>
            2020년 5월<br> 온라인미술품 경매
        </h2>
        <table>
            <tbody>
                <tr>
                    <th>경매기간</th>
                    <td>2020.05.09 (토) - 05.13(수)</td>
                </tr>
                <tr>
                    <th>경매마감</th>
                    <td>2020.05.13 (수) 16시부터 작품순 1분간격 1점씩 마감</td>
                </tr>
                <tr>
                    <th>전시안내</th>
                    <td>2020.05.09 (토) - 05.13(수) 헤럴드갤러리 (10am - 6pm) <a href="#">오시는길</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="detail_top">
            <div class="sns">
                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-envelope-square" aria-hidden="true"></i></a>
            </div>
            <div class="timer">
                <dl>
                    <dt>남은시간</dt>
                    <dd class="hightlight">경매가 마감되었습니다.</dd>
                    <dt>마감</dt>
                    <dd>05/13(수) 4:00 PM</dd>
                </dl>
            </div>
        </div>
        <div class="detail_contents">
            <div class="cont_1">
                <div class="swiper-container detail_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%201.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%204.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%202.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%203.jpg">
                        </div>
                    </div>
                </div>
                <div class="swiper-container detail_swiper-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="thumb" style="background-image:url('https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%201.jpg')"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="thumb" style="background-image:url('https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%204.jpg')"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="thumb" style="background-image:url('https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%202.jpg')"></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="thumb" style="background-image:url('https://dev.artday.co.kr/cdn/artwork/_img/data/2004/T/001%203.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont_2">
                <ul class="pic_info">
                    <li class="li_1">1</li>
                    <li class="li_2"><b class="name">김태호</b> Kim TaeHo 1948~</li>
                    <li class="li_3"><b>내재율 201139</b></li>
                    <li class="li_4">
                        27.3×19cm (3호)<br>
                        캔버스에 아크릴<br>
                        2011
                    </li>
                </ul>
                <div class="state">
                    <ul>
                        <li>
                            <span>응찰수</span>
                            <b>1</b>
                        </li>
                        <li>
                            <span>현재가</span>
                            <b class="hightlight">3,000,000 (시작가 3,000,000)</b>
                        </li>
                        <li>
                            <span>추정가</span>
                            <b class="ex_bold">3,000,000 - 6,000,000</b>
                        </li>
                    </ul>
                    <div class="btn_group">
                        <div class="btn1">
                            <a href="#">리스트</a>
                            <button onclick="layer_on('auction_status_layer')">응찰현황</button>
                        </div>
                        <div class="btn2">
                            <button class="b1" onclick="location.href='/pages/auction/online-auction-pay.php'">예약응찰</button>
                            <button class="b2" onclick="location.href='/pages/auction/online-auction-bid.php'">응찰</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont_3">
                <div class="cont_title"><b>작품설명</b></div>
                <div class="content">
                    <ul>
                        <li>사후판화</li>
                        <li>
                            [배송안내]<br>
                            본 작품에 한하여 낙찰자 직접픽업 또는 배송업체를 통해 유료로 배송드립니다.<br>
                            (서울 50,000원 / 수도권 100,000원 / 그 외 지역 150,000원)<br>
                            단, 작품컨디션과 배송지역에 따라 배송비가 소폭 변동 될 수 있으니 양해부탁드립니다.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cont_4">
                <div class="cont_title"><b>작가소개</b></div>
                <div class="content">
                    <dl>
                        <dt>학력</dt>
                        <dd>1984 동대학교 교육대학원 석사 </dd>
                        <dd>1972 홍익대학교 미술대학 회화과 학사 </dd>
                    </dl>
                    <dl>
                        <dt>전시(개인)</dt>
                        <dd>2015 부산시립미술관</dd>
                        <dd>2014 슈페리어갤러리, 서울</dd>
                        <dd>2014 노화랑, 서울</dd>
                    </dl>
                    <dl>
                        <dt>전시(그룹)</dt>
                        <dd>2009 한국의 모노크롬, WELLSIDE GALLERY, Shanghai China</dd>
                    </dl>
                </div>
                <div class="btn_group">
                    <button class="cont4_more">더보기</button>
                    <button class="cont4_closed">닫기</button>
                </div>
            </div>
            <div class="cont_5">
                <div class="cont_title"><b>작가의 다른 출품작</b></div>
                <ul>
                    <li><a href="#"><img src="http://www.artday.co.kr/_img/data/2005/T/002%201.jpg" alt=""></a></li>
                    <li><a href="#"><img src="http://www.artday.co.kr/_img/data/2005/T/002%201.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="detail_big_view_layer">
    <button class="closed"></button>
    <div class="swiper-container big_swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="http://www.artday.co.kr/_img/data/2005/001%201.jpg" alt=""></div>
            <div class="swiper-slide"><img src="http://www.artday.co.kr/_img/data/2005/001 2.jpg" alt=""></div>
        </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
</div>

<script>
$(window).load(function(){
    var detail_swiper_thumbs = new Swiper('.detail_swiper-thumbs', {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        direction: 'vertical',
    });
    var detail_swiper = new Swiper('.detail_swiper', {
        spaceBetween: 10,
        thumbs: {
            swiper: detail_swiper_thumbs
        }
    });
    
    function resize() {
        if (window.innerWidth > 1090) detail_swiper_thumbs.changeDirection('vertical')
        else detail_swiper_thumbs.changeDirection('horizontal')
    }
    resize()
    
    $(window).resize(function(){
        resize()
    })
})
    


    
var big_swiper = new Swiper('.big_swiper', {
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    observer: true,
    observeParents: true,
    on: {
        slideChange: function () {
            $('.current_index').text(this.activeIndex+1)
        },
    }
});

var cont4ListLength = $('.cont_4 .content dl').length
var cont4View = 0
var bigSwiperFlag = 0
$('.cont4_more').on('click', function() {
    if (cont4ListLength - 1 === cont4View) return
    cont4View+=1
    $('.cont_4 .content dl').eq(cont4View).show(0)
})
$('.cont4_closed').on('click', function() {
    cont4View = 0
    $('.cont_4 .content dl').hide(0)
    $('.cont_4 .content dl').eq(0).show(0)
})
    
$('.detail_big_view_layer .closed').on('click', function() {
    $('.detail_big_view_layer').hide(0)
})
$('.detail_swiper .swiper-slide').on('click', function() {
    $('.detail_big_view_layer').show(0)
    if (!bigSwiperFlag) {
        var len = big_swiper.imagesLoaded
        setTimeout(function() {
            $('.detail_big_view_layer .swiper-pagination').append('<span class="number"><span class="current_index">1</span> / '+len+'</span>')
        })
        bigSwiperFlag = 1
    }
})
</script>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>