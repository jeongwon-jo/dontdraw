<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="mypage__container">
        <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/mypage_nav.php"; ?>
        <div class="mypage__content">
          <div class="modify-info__inner">
            <div class="title">
              <h3>회원정보변경</h3>
            </div>
            <!-- TODO : 일반회원, 개인구독회원, 기업구독회원, 기업개인회원에 따라 정보수정페이지에 나오는 인풋 영역이 다릅니다. 기획안을 참고하셔서 노출시키면 됩니다. -->
            <form action="" class="form-modify_info">
              <fieldset>
                <div class="primary-info">
                  <h4>기본정보</h4>
                  <div class="modify_input flex mb16">
                    <label for="" class="input_label">회원등급 </label>
                    <div class="modify_content">
                      개인 일반회원 / 개인 구독회원
                    </div>
                  </div>
                  <div class="modify_input flex mb16">
                    <label for="" class="input_label">아이디 </label>
                    <div class="modify_content">
                      Bnsystem0123
                    </div>
                  </div>
                  <div class="modify_input flex mb16">
                    <label for="" class="input_label">이름 </label>
                    <div class="modify_content">
                      홍길동
                    </div>
                  </div>
                  <div class="modify_input flex mb16">
                    <label for="" class="input_label">필명 </label>
                    <div class="modify_content">
                      홍길동
                    </div>
                  </div>
                  <!-- <div class="modify_input flex mb24">
                    <label for="" class="input_label">회사명 </label>
                    <div class="modify_content">
                      비엔시스템
                    </div>
                  </div> -->
                  <!-- <div class="modify_input flex mb24">
                    <label for="" class="input_label">소속회사 </label>
                    <div class="modify_content">
                      비엔시스템
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">대표자</label>
                    <div class="modify_content">
                      <input type="text" value="홍길동" placeholder="대표자 이름을 입력해 주세요.">
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">대표자 휴대전화</label>
                    <div class="modify_content">
                      <input type="text" value="010-1234-1234" placeholder="대표자 휴대전화를 입력해 주세요.">
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">대표자 이메일</label>
                    <div class="modify_content">
                      <input type="text" value="Bnsystem0123@naver.com" placeholder="대표자 이메일을 입력해 주세요.">
                    </div>
                  </div> -->
                  <div class="modify_input mb24">
                    <label for="" class="input_label">이메일</label>
                    <div class="modify_content">
                      <input type="text" value="Bnsystem0123@naver.com" placeholder="이메일 주소를 입력해 주세요">
                      <small class="noti">
                        알림 및 로그인 시 사용되는 이메일이니 정확하게 입력해 주세요.
                      </small>
                    </div>
                  </div>
                  <div class="modify_input mb24">
                    <label for="" class="input_label">비밀번호</label>
                    <div class="modify_content">
                      <div class="modify_flex_box">
                        <input type="password" minlength="8" placeholder="영문, 숫자 혹은 혼합 8자 이상">
                        <button type="button" class="btn btn-lg btn_brand_outline2 btn_change_pw">비밀번호 변경</button>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">담당자 휴대전화</label>
                    <div class="modify_content">
                      <input type="text" value="010-1324-5678" placeholder="담당자 휴대전화를 입력해 주세요.">
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">담당자 이메일</label>
                    <div class="modify_content">
                      <input type="text" value="Bnsystem0123@naver.com" placeholder="담당자 이메일을 입력해 주세요.">
                      <small class="noti">
                        알림 및 로그인 시 사용되는 이메일이니 정확하게 입력해 주세요.
                      </small>
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">필명</label>
                    <div class="modify_content">
                      <input type="text" placeholder="필명을 입력해 주세요.">
                    </div>
                  </div> -->
                  <div class="modify_input flex mb16">
                    <label for="" class="input_label">생년월일 </label>
                    <div class="modify_content">
                      1984-01-01
                    </div>
                  </div>
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">생년월일 <span class="asterisk">*</span></label>
                    <div class="modify_content">
                      <div class="modify_flex_box birth">
                        <div class="select_box w100p">
                          <select name="year" id="select_birth_year" class="nice-select select--typeA w100p">
                            <option value="">년도</option>
                          </select>
                        </div>
                        <div class="select_box">
                          <select name="month" id="select_birth_month" class="nice-select select--typeA w100p">
                            <option value="">월</option>
                          </select>
                        </div>
                        <div class="select_box">
                          <select name="day" id="select_birth_day" class="nice-select select--typeA w100p">
                            <option value="">일</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">휴대폰 번호 <span class="asterisk">*</span></label>
                    <div class="modify_content">
                      <div class="modify_flex_box">
                        <div class="tel_box">
                          <select name="tel" id="tel" class="nice-select select--typeA w100p">
                            <option value="">010</option>
                            <option value="">011</option>
                          </select>
                          <span>-</span>
                          <input type="number">
                          <span>-</span>
                          <input type="number">
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="modify_input flex mb24">
                    <label for="" class="input_label">성별 </label>
                    <div class="modify_content">
                      여자
                    </div>
                  </div>
                  <!-- <div class="modify_input mb24">
                    <label for="" class="input_label">성별 <span class="asterisk">*</span></label>
                    <div class="modify_content">
                      <div class="modify_flex_box radio">
                        <div class="radio--typeA">
                          <label for="man">
                            <input type="radio" name="radio_sex" id="man" checked><em></em> 남자
                          </label>
                        </div>
                        <div class="radio--typeA">
                          <label for="woman">
                            <input type="radio" name="radio_sex" id="woman"><em></em> 여자
                          </label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="modify_input mb24">
                    <label for="" class="input_label">휴대폰 번호</label>
                    <div class="modify_content">
                      <input type="text" placeholder="전화번호를 입력해 주세요">
                    </div>
                  </div>
                  <div class="modify_input mb24">
                    <label for="" class="input_label">주소</label>
                    <div class="modify_content">
                      <div class="modify_flex_box mb8">
                        <input type="text" class="input_address" disabled>
                        <button type="button" id="btn_find_address" class="btn btn-lg btn_gray_outline btn_find_address">주소 검색</button>
                      </div>
                      <input type="text" id="address" class="mb8" placeholder="">
                      <input type="text" id="detail_address" placeholder="상세주소를 입력해 주세요">
                    </div>
                  </div>
                  <div class="modify_input flex mb24">
                    <label for="" class="input_label">추천인 </label>
                    <div class="modify_content">
                      김둘리
                    </div>
                  </div>
                  <div class="modify_input mb24">
                    <label for="" class="input_label">성인인증 <span class="asterisk">*</span></label>
                    <div class="modify_content">
                      <div class="modify_flex_box adult_vert">
                        <div class="modify_flex_box radio">
                          <div class="radio--typeA">
                            <label for="yes">
                              <input type="radio" name="radio_adult" id="yes" checked><em></em> 예
                            </label>
                          </div>
                          <div class="radio--typeA">
                            <label for="no">
                              <input type="radio" name="radio_adult" id="no"><em></em> 아니오
                            </label>
                          </div>
                        </div>
                        <button type="button" class="btn btn-lg btn_brand_outline2 btn_vertify">성인인증</button>
                      </div>
                    </div>
                  </div>
                  <div class="modify_input">
                    <label for="" class="input_label">회원약관동의 <span class="asterisk">*</span></label>
                    <div class="modify_content">
                      <div class="modify_flex_box radio">
                        <div class="radio--typeA">
                          <label for="agree">
                            <input type="radio" name="radio_agree" id="agree" checked><em></em> 예
                          </label>
                        </div>
                        <div class="radio--typeA">
                          <label for="not_agree">
                            <input type="radio" name="radio_agree" id="not_agree"><em></em> 아니오
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modify-info_btns">
                    <button type="button" class="btn btn-big btn_black">회원탈퇴</button>
                    <button type="submit" class="btn btn-big btn_brand">수정완료</button>
                  </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>