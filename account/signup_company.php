<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="signup__container">
          <ul class="signup-link__box">
            <li><a href="./signup_normal1.php">일반 회원가입</a></li>
            <li class="on"><a href="./signup_company.php">기업 회원가입</a></li>
          </ul>
          <div class="company_signup">
            <div class="signup_title">
              <h3>기업 회원가입</h3>
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
                  <label for="" class="input_label">회사명 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <input type="text" placeholder="회사명을 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">대표자 이름 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <input type="text" placeholder="대표자 이름을 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">대표자 휴대전화 <span class="asterisk">*</span></label>
                  <div class="account_content">
                    <input type="text" placeholder="대표자 휴대전화를 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">대표자 이메일 <span class="asterisk">*</span>
                  </label>
                  <div class="account_content">
                    <input type="text" placeholder="대표자 이메일을 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">비밀번호 <span class="asterisk">*</span></label>
                  <div class="account_content mb8">
                    <input type="password" placeholder="영문, 숫자 혹은 혼합 8자 이상">
                  </div>
                  <div class="account_content">
                    <input type="password" placeholder="비밀번호를 한번 더 입력해 주세요">
                  </div>
                  <!-- 유효성 -->
                  <!-- <p class="error"></p> -->
                </div>
                <div class="account_input">
                  <label for="" class="input_label">담당자 휴대폰 인증 <span class="asterisk">*</span>
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
                  <label for="" class="input_label">담당자 이메일 <span class="asterisk">*</span></label>
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