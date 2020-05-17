<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <h2 class="page_subject">마이페이지</h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="mypage_layout clearfix">
            <h5>일반응찰</h5>
            <div class="box">
                <p><b>낙찰수수료는 낙찰금액에 구매수수료 12%(부가가치세 별도)가 부과됩니다.</b></p>
            </div>
            <h5>예약응찰</h5>
            <div class="box">
                <p>낙찰수수료에 한하여 온라인 카드 결제가 가능합니다.</p>
                <p>낙찰대금은 경매 후 7일 이내에 입금이 원칙입니다. 입금이 늦어질 경우 당사 회계팀에 연락 부탁드립니다. 02-3210-2255</p>
                <p><b>낙찰 철회는 불가</b>하나 피치 못한 사유일 경우 위탁자의 동의하에 가능하며 <b>낙찰금액의 30%에 해당하는 위약금</b>을 받고 있습니다.</p>
                <p class="highlight">입금계좌 안내 | 국민은행 813001-04-058787 ㈜헤럴드아트데이</p>
            </div>
        </div>
        <div class="bo_table size1">
            <div class="bo_head">
                <select name="" id="">
                    <option value="">10개씩 보기</option>
                </select>
                <select name="" id="">
                    <option value="">5월 온라인미술품 경매 2020-05-13</option>
                </select>
            </div>
            <table class="tbl_type1">
                <colgroup>
                    <col style="width: 160px">
                    <col>
                    <col style="width: 50px">
                    <col style="width: 130px">
                    <col style="width: 100px">
                    <col style="width: 70px">
                    <col style="width: 90px">
                </colgroup>
                <thead>
                    <tr>
                        <th>경매정보</th>
                        <th>작품이미지</th>
                        <th>LOT</th>
                        <th>작품정보</th>
                        <th>응찰가</th>
                        <th>응찰수</th>
                        <th>응찰결과</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="info_title"><b>5월 온라인미술품 경매</b></div>
                            <p class="date">2020-05-09<br>19:01:03</p>
                        </td>
                        <td class="img">
                            <img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt="" class="w100">
                        </td>
                        <td class="lot">20</td>
                        <td class="d_info">
                            <div class="d_info_box">
                                <p class="drw_title">파라다이스</p>
                                <p class="material">오프셋 프린트 위 실크스크린</p>
                            </div>
                        </td>
                        <td class="price">1,008,000</td>
                        <td class="people">3</td>
                        <td class="state">
                            <span class="btn_small grey">진행중</span> <!-- grey red green -->
                        </td>
                    </tr>
                </tbody>
            </table>
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
</div>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>