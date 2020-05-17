<?php
include_once('../../common.php');
include_once('../../include/header.php');
?>

<div class="container">
    <h2 class="page_subject"></h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="column c1">
            <h4>회원 로그인 Login</h4>
            <div class="login_form clearfix">
                <div class="field">
                    <input type="text" class="id" name="" placeholder="회원아이디">
                    <input type="password" name="" placeholder="비밀번호">
                </div>
                <button class="submit">로그인</button>
            </div>
            <div class="login_option">
                <input type="checkbox" id="id_save"><label for="id_save" class="id_save">ID 저장</label>
                <input type="checkbox" id="keep_login"><label for="keep_login">로그인 상태유지</label>
            </div>
            <div class="under">
                <a href="javascript:;" onclick="layer_on('id_find_layer')">아이디 찾기</a>
                <a href="javascript:;" onclick="layer_on('pw_find_layer')">비밀번호 찾기</a>
            </div>
        </div>
        <div class="column c2">
            <h4>회원 가입 Join Us</h4>
            <p class="text">경매 참여를 위해서는 아트데이옥션에 회원으로 가입해주셔야 합니다.</p>
            <p class="text">아직 가입 전이라면 회원가입 해주세요.</p>
            <div class="button_gorup">
                <a href="/pages/business/about.php">회사소개 보기</a>
                <button onclick="layer_on('register_layer')">회원가입 하기</button>
            </div>
            <div class="under">
                <dl>
                    <dt><b>아트데이옥션 회원 특전</b></dt>
                    <dd>- 온라인경매 응찰, 오프라인경매 서면응찰</dd>
                    <dd>- 경매안내물 수신</dd>
                    <dd>- 경매소식 문자 및 뉴스레터 수신</dd>
                    <dd>- 가입비용 무료</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<?php include_once('../../include/footer.php') ?>