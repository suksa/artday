<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <h2 class="page_subject">참여안내</h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="column column1">
            <div class="form cus_tb type2">
                <h3>01. 필수 입력 정보</h3>
                <div class="tr">
                    <div class="th">아이디</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">이름</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">주소</div>
                    <div class="td adr">
                        <button type="button" class="tb_btn tb_btn1">우편번호 검색</button>
                        <input type="text" name="">
                        <div class="adr2">
                            <input type="text" name="">
                            <input type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">전화</div>
                    <div class="td space size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">휴대전화</div>
                    <div class="td space size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">이메일</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th"></div>
                    <div class="td">
                        <button class="submit_btn">필수 정보 수정</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="column column2">
            <div class="form cus_tb type2">
                <h3>02. 추가입력 정보</h3>
                <div class="tr">
                    <div class="th">제목</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input" placeholder="제목입력">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">추정가격</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input" placeholder="추정가격">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">작가명</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input" placeholder="여러점일 경우 대표작가만 입력해도 무방">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">작품명</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input" placeholder="여러점일 경우 대표작가만 입력해도 무방">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">사이즈</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input" placeholder="가로x세로x높이cm">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">재질</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">제작년도</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">위탁신청내용</div>
                    <div class="td size1">
                        <textarea name="" id="ir1" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">이미지 업로드</div>
                    <div class="td size1">
                        <input type="file" name="" class="basic_file">
                        <p class="msg">최대 5개까지 파일 업로드가 가능합니다.</p>
                    </div>
                </div>
            </div>
            <div class="f_btn_group">
                <button class="btn btn_1">취소</button>
                <button class="btn btn_2">위탁신청 접수</button>
            </div>
        </div>
    </div>
</div>

<script src="/plugin/smarteditor2-master/workspace/static/js/service/HuskyEZCreator.js"></script>
<script>
    var oEditors = [];
    nhn.husky.EZCreator.createInIFrame({
     oAppRef: oEditors,
     elPlaceHolder: "ir1",
     sSkinURI: "/plugin/smarteditor2-master/workspace/static/SmartEditor2Skin.html",
     fCreator: "createSEditor2"
    });
</script>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>