<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <h2 class="page_subject">참여안내</h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <ul class="order">
            <li>
                <b>1</b>
                <strong>회원가입</strong>
            </li>
            <li>
                <b>2</b>
                <strong>작품선택</strong>
            </li>
            <li>
                <b>3</b>
                <strong>응찰</strong>
            </li>
            <li>
                <b>4</b>
                <strong>결과확인·정산</strong>
            </li>
            <li>
                <b>5</b>
                <strong>배송</strong>
            </li>
        </ul>
        <div class="text_style">
            <div class="column c1">
                <div class="subject">
                    <span class="ico">1</span>
                    <b>회원가입</b>
                </div>
                <div class="content">
                    <p>작품 응찰을 위해서는 먼저 회원가입 후 로그인이 필요합니다 우측상단 '로그인'또는 아래 회원가입 클릭.</p>
                    <button class="btn btn_1 register_btn" onclick="layer_on('register_layer')">회원가입 ></button>
                    <ul class="ul">
                        <li>- 아트데이 옥션 회원가입 및 이용은 무료입니다.</li>
                        <li>- 고객님의 정확한 신상정보를 기입해야만 원활한 회원가입 및 작품 응찰이 가능합니다.</li>
                        <li>- 회원가입 중 어려운 점이 발생할 경우 언제든 문의주시기 바립니다. 02-3210-2255</li>
                    </ul>
                </div>
            </div>
            <div class="column c2">
                <div class="subject">
                    <span class="ico">2</span>
                    <b>경매확인</b>
                </div>
                <div class="content">
                    <h4>오프라인 경매</h4>
                    <ul class="ul">
                        <li>- 프리뷰 전시장 또는 홈페이지 경매 > 오프라인경매 페이지에서 출품작을 확인 할 수 있으며, 검색창을 통해 검색이 가능합니다.</li>
                        <li>- 작품 이미지, 작가명, 작품명을 클릭해 상세정보 페이지로 이동할 수 있습니다.</li>
                        <li>- 오프라인경매의 경우 전화, 현장방문 외에도 홈페이지를 통한 서면응찰 신청이 가능합니다.</li>
                    </ul>
                    <h4>온라인 경매</h4>
                    <ul class="ul">
                        <li>- 경매 > 온라인경매 페이지에서 출품작을 확인 할 수 있으며, 검색창을 통해 검색이 가능합니다.</li>
                        <li>- 작품 이미지, 작가명, 작품명을 클릭해 상세정보 페이지로 이동할 수 있습니다.</li>
                    </ul>
                    <a href="/pages/auction/online-auction.php" class="btn btn_1">현재 진행중인 경매 바로가기 ></a>
                    <h4>프리뷰</h4>
                    <ul class="ul">
                        <li>- 경매 출품작은 오프라인 전시를 통해 확인할 수 있습니다.</li>
                        <li>- 누구나 관람이 가능하며, 현장에서 작품상태 확인과 자세한 안내를 받으실 수 있습니다.</li>
                        <li>- 초대장, 홈페이지, 이메일 등을 통해 경매 프리뷰 및 경매 날짜가 공지됩니다.</li>
                        <li>- 모든 출품작은 위탁받은 상태 그대로 판매됩니다. 작품상태에 대한 보증은 경매된 시점의 상태에 준합니다.</li>
                    </ul>
                    <p>구매하시고자 하는 작품이 있다면 전시기간 동안 <span class="highlight">직접 작품을 확인</span>하시기 바랍니다.<br>작품확인이 어려운 고객께서는 문의주시면 자세히 안내드리겠습니다.</p>
                    <div class="info_box">
                        <dl class="type1">
                            <dt>전시장소</dt>
                            <dd>헤럴드갤러리 (서울 용산구 후암로4길 10 헤럴드스퀘어 2층 )<br>10, Huam-ro 4-gil, Yongsan-gu, Seoul, Korea</dd>
                        </dl>
                        <dl class="type1">
                            <dt>운영시간</dt>
                            <dd>10am - 6pm (경매기간 중 무휴)</dd>
                        </dl>
                        <dl class="type1">
                            <dt>문의</dt>
                            <dd>02-3210-2255</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="column c3">
                <div class="subject">
                    <span class="ico">3</span>
                    <b>응찰</b>
                </div>
                <div class="content">
                    <h4>오프라인 경매</h4>
                    <ul class="ul">
                        <li>- 경매 마감 당일 마감시간(5pm) 전에 경매장을 방문하여 패들을 등록해주시기 바랍니다.</li>
                        <li>- 회원가입자에 한하여 패들을 등록해드립니다. 비회원의 경우 현장에서 회원가입을 도와드리겠습니다.</li>
                        <li>- 패들 등록 후 패들을 수령하여 직접 경매에 참여할 수 있습니다.</li>
                    </ul>
                    <h4>온라인경매</h4>
                    <p>'응찰' 혹은 '예약응찰' 버튼을 클릭해 응찰 페이지로 이동하여 경매에 참여할 수 있습니다.</p>
                    <div class="two_button">
                        <button class="b1">응찰</button>
                        <button class="b2">예약응찰</button>
                    </div>
                    <h4>응찰</h4>
                    <p>주어진 금액에 따라 1회씩 직접 응찰하는 방식입니다.</p>
                    <div class="info_box">
                        <dl class="type1">
                            <dt>오프라인 경매</dt>
                            <dd>- 경매사가 현장에서 경매를 진행하여 낙찰이 이루어지는 방식입니다.</dd>
                            <dd>- 현장에서 응찰이 발생하더라도 서면응찰이 존재할 경우 <span class="highlight">서면에 우선권</span>이 주어집니다.</dd>
                            <dd>- 서면응찰의 경우 실제 응찰과 동일한 효력을 가지므로 신중한 요청 부탁드립니다.</dd>
                        </dl>
                        <dl class="type1">
                            <dt>오프라인 경매</dt>
                            <dd>- 각 작품마다 마감시간이 다르며, LOT순 1분간격 1점씩 마감됩니다.</dd>
                            <dd>- 작품 마감 30초 전에 응찰이 들어왔을 경우 해당작품 마감이 <span class="highlight">30초 연장</span>됩니다.</dd>
                        </dl>
                        <p><span class="highlight">*</span>한번 응찰된 작품은 <b class="highlight">응찰을 취소 할 수 없습니다.</b> 신중한 선택 부탁드립니다.</p>
                    </div>
                </div>
            </div>
            <div class="column c4">
                <div class="subject">
                    <span class="ico">4</span>
                    <b>결과확인·정산</b>
                </div>
                <div class="content">
                    <p>경매 종료 후 '<b>마이페이지</b>'에서 결과를 확인할 수 있습니다.</p>
                    <p>또한 가입하신 이메일 주소로 낙찰확인서가 발송되며, 마이페이지에서도 확인 가능합니다.</p>
                    <p>낙찰자는 <span class="highlight">낙찰일로부터 7일 이내에 낙찰대금을 당사에 지불</span>하셔야 합니다.</p>
                    <p>낙찰 수수료에 한해서 신용카드결제가 가능하며 <span class="highlight">낙찰대금 입금 후 작품을 배송</span>받으실 수 있습니다.</p>
                    <div class="info_box">
                        <dl class="type1">
                            <dd>- 낙찰가 : 경매 마감시간에 마지막으로 응찰된 최고 금액</dd>
                            <dd>- 낙찰수수료 : 낙찰가의 12%(부가가치세별도)를 적용합니다.</dd>
                            <dd>- 낙찰대금 : 낙찰가 + 낙찰수수료 + 부가가치세</dd>
                        </dl>
                        <br>
                        <p><b>국민은행 813001-04-058787 (주)헤럴드아트데이</b></p>
                    </div>
                    <p>낙찰자는 <span class="highlight">낙찰을 철회할 수 없습니다.</span> 부득이 철회를 하는 경우, 낙찰일로부터 7일 이내에 서면으로 철회의사를 통보한 후 위탁자의 동의하에 낙찰철회를 결정합니다.</p>
                    <p>위약금으로 낙찰가의 30%에 해당하는 금액을 낙찰일로부터 7일 이내에 납부하여야 합니다.</p>
                </div>
            </div>
            <div class="column c5">
                <div class="subject">
                    <span class="ico">5</span>
                    <b>배송</b>
                </div>
                <div class="content">
                    <h4>직접픽업</h4>
                    <p>작품을 직접 가져가길 희망하시는 경우, 방문 하루전 당사에 예약하신 후 방문 부탁드립니다.</p>
                    <p>사전예약 없이 방문하실 경우 픽업이 불가할 수 있습니다.</p>
                    <br>
                    <ul class="ul">
                        <li><b>- 운영시간 : 월-금 10am-6pm (토, 일, 공휴일 휴무)</b></li>
                        <li><b>- 픽업예약 : 02-3210-2255</b></li>
                    </ul>
                    <br>
                    <h4>배송</h4>
                    <p>낙찰자와 상담 후 협의된 기간에 최대한 맞춰 배송을 드리며, 서울·경기 외 지역은 경매 후 약 2주 이상 소요됩니다.</p>
                    <p>배송비가 책정된 작품에 한해서 배송비를 받고 있사오니 경매 응찰시 관련정보에 유념해 주시기 바랍니다.</p>
                </div>
            </div>
            <div class="column c6">
                <div class="subject">
                    <span class="ico">6</span>
                    <b>작품보증</b>
                </div>
                <div class="content">
                    <p>작품에 대한 보증은 (주)헤럴드아트데이가 보증하며, 보증서를 발급합니다.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>