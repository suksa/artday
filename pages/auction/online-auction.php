<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <div class="page_title_field">
        <h2 class="page_subject type3">2020년 5월<br> 온라인미술품 경매</h2>
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
        <div class="bo_top">
            <div class="search_box clearfix">
                <select name="" id="">
                    <option value="">작가명 or 작품명</option>
                </select>
                <input type="text">
                <button>검색</button>
            </div>
            <div class="align_box">
                <div class="align1">
                    <button class="on" id="list_mode_button"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                    <button id="gallery_mode_button"><i class="fa fa-th-large" aria-hidden="true"></i></button>
                </div>
                <select name="" id="">
                    <option value="">정렬선택</option>
                </select>
            </div>
        </div>
        <div class="tbl_group list_mode">
            <div class="thead">
                <div class="d1">LOT</div>
                <div class="d2">이미지</div>
                <div class="d3">작가정보</div>
                <div class="d4">작품정보</div>
                <div class="d5">현재가격</div>
                <div class="d6">추정가격</div>
                <div class="d7">경매마감</div>
                <div class="d8">응찰</div>
                <div class="d9">　</div>
            </div>
            <ul class="list">
                <li>
                    <div class="d1">1</div>
                    <div class="d2">
                        <a href="./online-auction-d.php"><img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt=""></a>
                    </div>
                    <div class="d3">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>김태호</b></p>
                                <p>Kim TaeHo</p>
                                <p>1948 ~</p>
                            </a>
                        </div>
                    </div>
                    <div class="d4">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>내재율 201139</b></p>
                                <p> 27.3×19cm (3호)</p>
                                <p>캔버스에 아크릴</p>
                                <p>2011</p>
                            </a>
                        </div>
                    </div>
                    <div class="d5">
                        <div>
                            <span class="highlight">3,000,000원</span><b>(3)</b>
                        </div>
                    </div>
                    <div class="d6">3,000,000<br> ~<br> 6,000,000</div>
                    <div class="d7">
                        <div>
                            <p>2020-05-13</p>
                            <p>16:00:00</p>
                        </div>
                    </div>
                    <div class="d8">99</div>
                    <div class="d9">
                        <div>
                            <button class="d9_btn-full" onclick="location.href='/pages/auction/online-auction-bid.php'">응찰</button>
                            <button class="d9_btn-o" onclick="location.href='/pages/auction/online-auction-pay.php'">예약응찰</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d1">1</div>
                    <div class="d2">
                        <a href="./online-auction-d.php"><img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt=""></a>
                    </div>
                    <div class="d3">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>김태호</b></p>
                                <p>Kim TaeHo</p>
                                <p>1948 ~</p>
                            </a>
                        </div>
                    </div>
                    <div class="d4">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>내재율 201139</b></p>
                                <p> 27.3×19cm (3호)</p>
                                <p>캔버스에 아크릴</p>
                                <p>2011</p>
                            </a>
                        </div>
                    </div>
                    <div class="d5">
                        <div>
                            <span class="highlight">3,000,000원</span><b>(3)</b>
                        </div>
                    </div>
                    <div class="d6">3,000,000<br> ~<br> 6,000,000</div>
                    <div class="d7">
                        <div>
                            <p>2020-05-13</p>
                            <p>16:00:00</p>
                        </div>
                    </div>
                    <div class="d8">99</div>
                    <div class="d9">
                        <div>
                            <button class="d9_btn-full" onclick="location.href='/pages/auction/online-auction-bid.php'">응찰</button>
                            <button class="d9_btn-o" onclick="location.href='/pages/auction/online-auction-pay.php'">예약응찰</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d1">1</div>
                    <div class="d2">
                        <a href="./online-auction-d.php"><img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt=""></a>
                    </div>
                    <div class="d3">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>김태호</b></p>
                                <p>Kim TaeHo</p>
                                <p>1948 ~</p>
                            </a>
                        </div>
                    </div>
                    <div class="d4">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>내재율 201139</b></p>
                                <p> 27.3×19cm (3호)</p>
                                <p>캔버스에 아크릴</p>
                                <p>2011</p>
                            </a>
                        </div>
                    </div>
                    <div class="d5">
                        <div>
                            <span class="highlight">3,000,000원</span><b>(3)</b>
                        </div>
                    </div>
                    <div class="d6">3,000,000<br> ~<br> 6,000,000</div>
                    <div class="d7">
                        <div>
                            <p>2020-05-13</p>
                            <p>16:00:00</p>
                        </div>
                    </div>
                    <div class="d8">99</div>
                    <div class="d9">
                        <div>
                            <button class="d9_btn-full" onclick="location.href='/pages/auction/online-auction-bid.php'">응찰</button>
                            <button class="d9_btn-o" onclick="location.href='/pages/auction/online-auction-pay.php'">예약응찰</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d1">1</div>
                    <div class="d2">
                        <a href="./online-auction-d.php"><img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt=""></a>
                    </div>
                    <div class="d3">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>김태호</b></p>
                                <p>Kim TaeHo</p>
                                <p>1948 ~</p>
                            </a>
                        </div>
                    </div>
                    <div class="d4">
                        <div>
                            <a href="./online-auction-d.php">
                                <p><b>내재율 201139</b></p>
                                <p> 27.3×19cm (3호)</p>
                                <p>캔버스에 아크릴</p>
                                <p>2011</p>
                            </a>
                        </div>
                    </div>
                    <div class="d5">
                        <div>
                            <span class="highlight">3,000,000원</span><b>(3)</b>
                        </div>
                    </div>
                    <div class="d6">3,000,000<br> ~<br> 6,000,000</div>
                    <div class="d7">
                        <div>
                            <p>2020-05-13</p>
                            <p>16:00:00</p>
                        </div>
                    </div>
                    <div class="d8">99</div>
                    <div class="d9">
                        <div>
                            <button class="d9_btn-full" onclick="location.href='/pages/auction/online-auction-bid.php'">응찰</button>
                            <button class="d9_btn-o" onclick="location.href='/pages/auction/online-auction-pay.php'">예약응찰</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="pagination">
            <li class="disabled"><a href="#">&lt;</a></li>							
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#">&gt;</a></li> 
        </ul>
    </div>
</div>

<script>
var currentState = 'list'
function list_mode() {
    $('#gallery_mode_button').removeClass('on')
    $('#list_mode_button').addClass('on')
    $('.tbl_group').removeClass('gallery_mode').addClass('list_mode')
}
function gall_mode() {
    $('#list_mode_button').removeClass('on')
    $('#gallery_mode_button').addClass('on')
    $('.tbl_group').removeClass('list_mode').addClass('gallery_mode')
}
function resize() {
    if (window.innerWidth > 1040) {
        if (currentState !== 'gallery') {
            list_mode()
        }
    } else {
        gall_mode()
    }
}
    
$('#list_mode_button').on('click', function() {
    list_mode()
    currentState = 'list'
})
$('#gallery_mode_button').on('click', function() {
    gall_mode()
    currentState = 'gallery'
})
    
$(window).resize(function() {
    resize()
})

$(function() {
    resize()
})
</script>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>