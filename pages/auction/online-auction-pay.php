<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <div class="page_title_field">
        <h2 class="page_subject type3">예약응찰</h2>
    </div>
    <div class="content_wrap page_online-auction-com page_<?=PAGE_NAME?>">
        <table class="tb1">
            <colgroup>
                <col style="width: 120px">
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>이미지</th>
                    <th>LOT</th>
                    <th>작가정보</th>
                    <th>작품정보</th>
                    <th>현재가격</th>
                    <th>추정가격</th>
                    <th>경매마감</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td1">
                        <div>
                            <img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt="" class="w100 thumb_size_limit">
                        </div>
                    </td>
                    <td class="td2">
                        <div>
                            1
                        </div>
                    </td>
                    <td class="td3">
                        <div>
                            <p><b>김태호</b></p>
                            <p>Kim TaeHo</p>
                            <p>1948 ~</p>
                        </div>
                    </td>
                    <td class="td4">
                        <div>
                            <p><b>내재율 201139</b></p>
                            <p> 27.3×19cm (3호)</p>
                            <p>캔버스에 아크릴</p>
                            <p>2011</p>
                        </div>
                    </td>
                    <td class="td5">
                        <div>
                            <b><span class="highlight">3,000,000원</span> (3)</b>
                        </div>
                    </td>
                    <td class="td6">
                        <div>3,000,000<br> ~<br> 6,000,000</div>
                    </td>
                    <td class="td7">
                        <div>
                            <p>2020-05-13</p>
                            <p>16:00:00</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="notice">
            <div class="title">응찰전 유의사항</div>
            <div class="content">
                <ul>
                    <li>1. 예약응찰은 현재가에는 불가능하며 현재가의 <span class="highlight">두 호가 이상</span> 부터 가능합니다.</li>
                    <li>2. 응찰 후에는 <span class="highlight">취소가 불가</span>합니다. 신중히 결정해 주시기 바랍니다.</li>
                    <li>3. 본 경매는 <span class="highlight">실물 확인 후 응찰을 전제</span>로 하며, 작품 및 액자 상태에 대한 이유로 응찰철회가 불가합니다.</li>
                    <li>4. 경매 종료 시간은 아트데이 서버시간 기준으로 진행되오니 유념해 주시기 바랍니다.</li>
                    <li>5. 마감시간 30초 전 응찰이 있을 경우 자동으로 30초의 경매시간이 연장됩니다.</li>
                    <li>6. <span class="highlight">응찰 현황에 '낙찰'</span> 이라고 표시되기 이전까지 응찰이 가능하며 응찰 전후 새로고침 버튼을 눌러 응찰현황에 표기된 현재가격을 확인바랍니다.</li>
                    <li>7. 구매대금은 낙찰일로부터 <span class="highlight">7일 이내 입금</span> 이 원칙이며, <span class="highlight">구매수수료 12%(부가가치세 별도)</span>가 합산됩니다.</li>
                    <li>8. 7일 초과 시 약관에 따라 추가 비용이 발생되오니 원활한 경매 진행을 위해 빠른 입금 바랍니다.</li>
                </ul>
            </div>
        </div>
        <div class="state">
            <div class="con1">
                <div class="title">응찰</div>
                <table>
                    <tbody>
                        <tr>
                            <th>남은시간</th>
                            <td><span class="highlight"><b>경매가 마감되었습니다</b></span></td>
                        </tr>
                        <tr>
                            <th>시작가</th>
                            <td><b>0원</b></td>
                        </tr>
                        <tr>
                            <th>현재가</th>
                            <td><span class="highlight"><b>0원</b></span></td>
                        </tr>
                        <tr>
                            <th>응찰단위</th>
                            <td><b>0원</b></td>
                        </tr>
                        <tr>
                            <th colspan="2">응찰금액</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="cal">
                                    <input type="text">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="con2">
                <div class="top">
                    <div class="title">응찰현황</div>
                    <div class="btn_group">
                        <button>리스트</button>
                        <button class="refresh"><i class="fa fa-refresh" aria-hidden="true"></i> 새로고침</button>
                    </div>
                </div>
                <table>
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col style="width: 100px">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>아이디</th>
                            <th>응찰금액</th>
                            <th>응찰일시</th>
                            <th>상태</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>###ngart</td>
                            <td>3,000,000원</td>
                            <td>2020-05-14 16:36:22</td>
                            <td>낙찰</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>###ngart</td>
                            <td>3,000,000원</td>
                            <td>2020-05-14 16:36:22</td>
                            <td>낙찰</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once(ROOT_PATH.'/include/footer.php') ?>