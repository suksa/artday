<?php
include_once('../../common.php');
include_once(ROOT_PATH.'/include/header.php');
?>

<div class="container">
    <h2 class="page_subject">마이페이지</h2>
    <?php include('./menu.php') ?>
    <div class="content_wrap page_<?=PAGE_NAME?>">
        <div class="column column1">
            <div class="form cus_tb type2">
                <h3>로그인 정보</h3>
                <div class="tr">
                    <div class="th">아이디</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">비밀번호(6~16자리)</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">비밀번호 재입력</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                        <p class="msg">-비밀번호는 6 ~ 16 자의 영문 대소문자, 숫자를 조합하여 설정해 주세요.</p>
                        <p class="msg">-안전을 위해 자주 사용했거나 쉬운 비밀번호가 아닌 새 비밀번호를 등록하고 주기적으로 변경해주세요.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column column1">
            <div class="form cus_tb type2">
                <h3>필수입력 정보</h3>
                <div class="tr">
                    <div class="th">이름</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">성별</div>
                    <div class="td size1">
                        <div class="basic_radio three_input">
                            <input type="radio" id="same1" name="same2">
                            <label for="same1">남성</label>
                        </div>
                        <div class="basic_radio three_input">
                            <input type="radio" id="same3" name="same2">
                            <label for="same3">여성</label>
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">생년월일</div>
                    <div class="td size1">
                        <select name="" id="" class="three_input">
                            <option value="">1920</option>
                        </select>
                        <select name="" id="" class="three_input">
                            <option value="">1</option>
                        </select>
                        <select name="" id="" class="three_input">
                            <option value="">1</option>
                        </select>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">이메일</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">전화</div>
                    <div class="td size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">휴대전화</div>
                    <div class="td size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">주소</div>
                    <div class="td adr">
                        <button type="button" class="tb_btn tb_btn1">우편번호 검색</button>
                        <input type="text" name="">
                        <div class="adr2">
                            <input type="text" name="" class="basic_input">
                            <input type="text" name="" class="basic_input">
                        </div>
                        <p class="msg">-이벤트나 경매 낙찰시 경품 및 작품을 받을 수 있는 정확한 주소를 입력해주세요.</p>
                        <p class="msg">-정확하지 않은 배송지 정보 제공에 따른 회원의 피해는 회사가 책임지지 않습니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column column1">
            <div class="form cus_tb type2">
                <h3>추가입력 정보</h3>
                <div class="tr">
                    <div class="th">은행명</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">계좌번호</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">예금주</div>
                    <div class="td">
                        <input type="text" name="" class="basic_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">뉴스레터수신</div>
                    <div class="td">
                        <div class="size1">
                            <div class="basic_checkbox three_input">
                                <input type="checkbox" id="same5" name="same4">
                                <label for="same5">아트데이</label>
                            </div>
                            <div class="basic_checkbox three_input">
                                <input type="checkbox" id="same6" name="same4">
                                <label for="same6">아트데이 옥션</label>
                            </div>
                            <div class="basic_checkbox three_input">
                                <input type="checkbox" id="same7" name="same4">
                                <label for="same7">수신안함</label>
                            </div>
                        </div>
                        <p class="msg">-아트데이 | 예술계 국내 및 해외 소식을 한 달에 2회 발송합니다.</p>
                        <p class="msg">-아트데이옥션 | 아트데이옥션 관련 경매정보를 발송합니다.</p>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">직업</div>
                    <div class="td job">
                        <div class="size1">
                            <select name="" id="" class="two_input">
                                <option value="선택안함">직업을 선택해주세요.</option>
                                <option value="건설업">건설업</option>
                                <option value="공무원">공무원</option>
                                <option value="공업">공업</option>
                                <option value="교사">교사</option>
                                <option value="교육">교육</option>
                                <option value="군인">군인</option>
                                <option value="금융/증권/보험">금융/증권/보험</option>
                                <option value="농/수/임업">농/수/임업</option>
                                <option value="법률">법률</option>
                                <option value="사무직">사무직</option>
                                <option value="상업">상업</option>
                                <option value="서비스업">서비스업</option>
                                <option value="언론">언론</option>
                                <option value="예술/미술">예술/미술</option>
                                <option value="유통업">유통업</option>
                                <option value="의료">의료</option>
                                <option value="자영업">자영업</option>
                                <option value="주부">주부</option>
                                <option value="컴퓨터/인터넷/IT">컴퓨터/인터넷/IT</option>
                                <option value="학생">학생</option>
                                <option value="회사원">회사원</option>
                                <option value="무직">무직</option>
                                <option value="기타">기타</option>
                            </select>
                            <input type="text" name="" class="two_input" placeholder="직장명 입력">
                        </div>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">직장주소</div>
                    <div class="td adr">
                        <button type="button" class="tb_btn tb_btn1">우편번호 검색</button>
                        <input type="text" name="">
                        <div class="adr2">
                            <input type="text" name="" class="basic_input">
                            <input type="text" name="" class="basic_input">
                        </div>
                        <p class="msg">-이벤트나 경매 낙찰시 경품 및 작품을 받을 수 있는 정확한 주소를 입력해주세요.</p>
                        <p class="msg">-정확하지 않은 배송지 정보 제공에 따른 회원의 피해는 회사가 책임지지 않습니다.</p>
                    </div>
                </div>
                <div class="tr">
                    <div class="th">전화</div>
                    <div class="td size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">팩스</div>
                    <div class="td size1">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                        <input type="text" name="" class="three_input">
                    </div>
                </div>
                <div class="tr">
                    <div class="th">관심분야</div>
                    <div class="td">
                        <div class="size2">
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same9" name="same8">
                                <label for="same9">고미술</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same10" name="same8">
                                <label for="same10">근현대</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same11" name="same8">
                                <label for="same11">동양화</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same12" name="same8">
                                <label for="same12">현대미술</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same13" name="same8">
                                <label for="same13">민예품</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same14" name="same8">
                                <label for="same14">도자기</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same15" name="same8">
                                <label for="same15">미술정보</label>
                            </div>
                            <div class="basic_checkbox four_input">
                                <input type="checkbox" id="same16" name="same8">
                                <label for="same16">미술품경매</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f_btn_group">
                <button class="btn btn_1">취소</button>
                <button class="btn btn_2">정보수정</button>
            </div>
        </div>
    </div>
</div>

<?php include_once(ROOT_PATH.'/include/footer.php') ?>