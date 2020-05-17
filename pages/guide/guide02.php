<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <h2 class="page_subject">참여안내</h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="text_style">
            <p class="text_center">아트데이옥션에서는 한국 근·현대 미술품과 고미술품, 해외미술품 등 다양한 작품들을 위탁받고 있습니다.</p>
            <p class="text_center">작품 위탁절차는 다음과 같습니다.</p>
            <div class="contents">
                <div class="column c1">
                    <div class="subject">
                        <span class="ico">1</span>
                        <b>위탁신청 접수</b>
                    </div>
                    <div class="content">
                        <p><b>홈페이지, 이메일 등으로 작품에 대한 이미지와 정보를 등록하시면 확인 후 담당자가 답변을 드립니다.</b></p>
                        <div class="info_box half_box">
                            <div class="half">
                                <dl class="type1">
                                    <dt>홈페이지 접수</dt>
                                    <dd>- 회원가입/로그인 후 이용 가능합니다.</dd>
                                    <dd>- 입력해주신 연락처로 개별 답변을 드립니다.</dd>
                                </dl>
                                <a href="/pages/guide/application.php" class="btn btn_1 register_btn">위탁 신청하기 ></a>
                            </div>
                            <div class="half">
                                <dl class="type1">
                                    <dt>이메일 접수</dt>
                                    <dd>작품에 대한 상세한 정보와 이미지를 이메일로 보내주시면 개별 답변을 드립니다.</dd>
                                </dl>
                                <a href="mailto:auction@artday.co.kr" class="btn btn_1 register_btn">auction@artday.co.kr ></a>
                                <dl class="type2">
                                    <dt>메일 제목</dt>
                                    <dd>[위탁신청] 고객님 성함</dd>
                                    <dt>메일 내용</dt>
                                    <dd>- 작품정보<br>(작가명/작품명/사이즈/재질/제작연도)</dd>
                                    <dt></dt>
                                    <dd>- 소장 경위</dd>
                                    <dt></dt>
                                    <dd>- 고객님 연락처</dd>
                                    <dt></dt>
                                    <dd>- 작품 사진 첨부</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column c2">
                    <div class="subject">
                        <span class="ico">2</span>
                        <b>심의 및 작품검수</b>
                    </div>
                    <div class="content">
                        <p><b>위탁신청 접수된 작품은 심의 과정을 거쳐 개별적으로 위탁가능여부를 안내해 드리며 선별된 작품은 전문가 감정을 위해 실제 작품을 당사로 접수 받습니다.</b></p>
                        <br>
                        <p><b>1. 심의 : 위탁신청 접수 내용을 토대로 심의 후 위탁 가능 여부를 위탁자에게 개별 안내</b></p>
                        <p><b>2. 입고 : 전문가 감정을 위해 실제 작품을 당사에 입고</b></p>
                        <div class="info_box">
                            <dl class="type3">
                                <dt>위탁문의</dt>
                                <dd>이메일 : auction@artday.co.kr</dd>
                                <dd>대표전화 : 02-3210-2255</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="column c3">
                    <div class="subject">
                        <span class="ico">3</span>
                        <b>감정 및 위탁계약</b>
                    </div>
                    <div class="content">
                        <p><b>당사에 입고된 작품을 전문가를 통해 감정 후 최종으로 출품을 결정짓습니다.</b></p>
                        <br>
                        <p><b>1. 분야별 전문가를 통한 실물 감정</b></p>
                        <p><b>2. 위탁자와 출품가(시작가)를 결정 후 위탁계약서 작성</b></p>
                    </div>
                </div>
                <div class="column c4">
                    <div class="subject">
                        <span class="ico">4</span>
                        <b>결과 확인 및 정산</b>
                    </div>
                    <div class="content">
                        <p><b>경매가 종료되면 위탁작품의 낙찰 여부를 개별통보합니다. 또한 소정의 위탁수수료가 부과되며, 절차를 통해 낙찰대를 지급합니다.</b></p>
                        <br>
                        <ul class="ul">
                            <li><b>1. 경매종료 후 낙찰자와 위탁자 동시에 이메일 낙찰통보서 발송</b></li>
                            <li><b>2. 낙찰자를 통해 낙찰대금 수령 후 작품을 낙찰자에게 인도</b></li>
                            <li><b>3. 위탁자에게 낙찰대 지급(통상적으로 2주 이내)</b></li>
                            <li><b>4. 위탁자가 당사에 위탁 수수료 지급</b></li>
                        </ul>
                        <div class="info_box">
                            <dl class="type1">
                                <dt>위탁수수료</dt>
                                <dd>낙찰가의 3백만원 이하 금액에 대해서는 15%(부가가치세 별도),</dd>
                                <dd>3백만원 초과 금액에 대해서는 10%(부가가치세 별도)로 합산합니다.</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>