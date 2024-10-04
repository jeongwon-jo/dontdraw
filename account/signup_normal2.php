<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="signup__container">
          <ul class="signup-link__box">
            <li class="on"><a href="./signup_normal1.php">일반 회원가입</a></li>
            <li><a href="./signup_company.php">기업 회원가입</a></li>
          </ul>
          <div class="normal_signup">
            <div class="signup_title">
              <h3>일반 회원가입</h3>
            </div>
            <form class="form_signup">
              <fieldset>
                <div class="account_input">
                  <label for="" class="input_label">아이디 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <div class="account_flex_box">
                      <input type="text" placeholder="영문 소문자, 숫자포함 6~20자">
                      <button type="button" class="btn btn-lg btn_brand_outline2 btn_signup" onclick="checkDuplicates(event)">중복확인</button>
                    </div>
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">이름 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <input type="text" placeholder="이름을 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">이메일 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content">
                    <div class="account_flex_box">
                      <input type="text" placeholder="이메일 주소를 입력해 주세요">
                      <button type="button" class="btn btn-lg btn_brand_outline2 btn_signup" onclick="emailVertify(event)">인증요청</button>
                    </div>
                    <div id="email_auth_number" class="account_flex_box d-none mt8">
                      <input type="text" placeholder="인증번호를 6자리를 입력해 주세요.">
                      <button type="button" class="btn btn-lg btn_signup active">확인</button>
                    </div>
                    <small class="noti">
                      알림 및 로그인 시 사용되는 이메일이니 정확하게 입력해 주세요.
                    </small>
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">필명 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <input type="text" placeholder="사용하실 필명을 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">비밀번호 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content mb8">
                    <input type="password" minlength="8" placeholder="영문, 숫자 혹은 혼합 8자 이상">
                  </div>
                  <div class="account_content">
                    <input type="password" minlength="8" placeholder="비밀번호를 한번 더 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">생년월일 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content">
                    <div class="account_flex_box birth">
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
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">성별 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content">
                    <div class="account_flex_box sex">
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
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">휴대폰 인증 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content">
                    <div class="account_flex_box">
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
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">주소</label>
                  <div class="account_content">
                    <div class="account_flex_box mb8">
                      <input type="text" class="input_address" disabled>
                      <button type="button" id="btn_find_address" class="btn btn-lg btn_gray_outline btn_signup">주소 검색</button>
                    </div>
                    <input type="text" id="address" class="mb8" placeholder="">
                    <input type="text" id="detail_address" placeholder="상세주소를 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">추천인 입력</label>
                  <div class="account_content">
                    <input type="text" placeholder="추천인 회원 ID를 입력해 주세요">
                  </div>
                  <small class="noti c_brand">추천인 입력 후 회원가입 시 포인트가 지급됩니다. </small>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="agree_signup">
                  <div class="checkbox--typeA chkall">
                    <label for="chkAll">
                      <input type="checkbox" name="chkAll" id="chkAll"><em></em> 모든 약관을 확인하고 전체 동의합니다.
                    </label>
                  </div>
                  <div class="agree_checklist">
                    <div class="agree">
                      <div class="checkbox--typeA small">
                        <label for="chk1">
                          <input type="checkbox" name="checkbox_agree" id="chk1"><em></em> 이용약관동의 <span class="c_brand">(필수)</span>
                        </label>
                      </div>
                      <button type="button" class="btn-textType">내용보기</button>
                    </div>
                    <div class="agree">
                      <div class="checkbox--typeA small">
                        <label for="chk2">
                          <input type="checkbox" name="checkbox_agree" id="chk2"><em></em> 개인정보처리방침동의 <span class="c_brand">(필수)</span>
                        </label>
                      </div>
                      <button type="button" class="btn-textType">내용보기</button>
                    </div>
                    <div class="agree">
                      <div class="checkbox--typeA small">
                        <label for="chk3">
                          <input type="checkbox" name="checkbox_agree" id="chk3"><em></em> 휴대전화 sms 수신동의 (선택)
                        </label>
                      </div>
                    </div>
                    <div class="agree">
                      <div class="checkbox--typeA small">
                        <label for="chk4">
                          <input type="checkbox" name="checkbox_agree" id="chk4"><em></em> 마케팅수신동의 (선택)
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-big btn-w100p btn_brand">회원가입</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
  <script>
    $(function() {
      var now = new Date();
      var year = now.getFullYear();
      var mon = (now.getMonth() + 1) > 9 ? ''+(now.getMonth() + 1) : '0'+(now.getMonth() + 1); 
      var day = (now.getDate()) > 9 ? ''+(now.getDate()) : '0'+(now.getDate());           
              
      for(var i = year ; i >= 1900 ; i--) {
          $('#select_birth_year').append('<option value="' + i + '">' + i + '년</option>');    
      } 

      for(var i=1; i <= 12; i++) {
          var mm = i;            
          $('#select_birth_month').append('<option value="' + mm + '">' + mm + '월</option>');    
      }

      for(var i=1; i <= 31; i++) {
          var dd = i;            
          $('#select_birth_day').append('<option value="' + dd + '">' + dd+ '일</option>');    
      }   
      
      $("#chkAll").click(function() {
        if($("#chkAll").is(":checked")) $("input[name=checkbox_agree]").prop("checked", true);
        else $("input[name=checkbox_agree]").prop("checked", false);
      });

      $("input[name=checkbox_agree]").click(function() {
        var total = $("input[name=checkbox_agree]").length;
        var checked = $("input[name=checkbox_agree]:checked").length;

        if(total != checked) $("#chkAll").prop("checked", false);
        else $("#chkAll").prop("checked", true); 
      });
    })

    function checkDuplicates(e) {
      // TODO 중복확인 절차 진행

      // 버튼 disabled
      e.target.disabled = true;
    }

    function emailVertify(e) {
      // 인증요청 버튼 disabled
      e.target.disabled = true;

      // 인증번호 입력 영역 show
      $('#email_auth_number').removeClass('d-none')
    }
  </script>
</body>
</html>