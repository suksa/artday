<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <div class="page_title_field">
        <h2 class="page_subject type3">오프라인 서면응찰</h2>
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
                            <img src="http://www.artday.co.kr/_img/data/2005/T/001%201.jpg" alt="" class="w100">
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
                    <li>1. 서면응찰은 <span class="highlight">일반응찰과 동일한 효력</span>을 지니며, 응찰 후에는 취소가 불가능합니다. 신중히 결정해 주시기 바랍니다.</li>
                    <li>2. 최종적으로 낙찰을 받으신 경우에는 낙찰금액에 구매수수료 <span class="highlight">12%(부가세 별도)</span>가 부과됩니다.</li>
                    <li>3. 경매는 <span class="highlight">오프라인 경매장에서 진행되며</span>, 현장 응찰가격과 동일한 서면응찰이 있을 경우 서면에 우선권이 있습니다.</li>
                    <li>4. 서면응찰 시 별도의 요청이 없을 경우 경매 전에 확인전화를 드리지 않습니다.</li>
                    <li>5. 반드시 작품상태를 확인하신 후 응찰해 주시기 바랍니다. 문의 02-3210-2255</li>
                </ul>
            </div>
        </div>
        <div class="state">
            <div class="con1 info">
                <div class="top">
                    <div class="title">응찰정보</div>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>최대응찰금액</th>
                            <td><input type="text"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="con2">
                <div class="top">
                    <div class="title">메모</div>
                </div>
                <textarea name="" id="" class="memo"></textarea>
            </div>
        </div>
    </div>
</div>


<?php include_once(ROOT_PATH.'/include/footer.php') ?>