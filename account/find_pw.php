<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="account_title">
          <h3>비밀번호 찾기</h3>
          <p>회원가입 시 등록하신 정보를 입력해 주세요.</p>
        </div>
        <form class="form_account">
          <fieldset>
            <div class="account__area">
              <div class="account_input">
                <label for="" class="input_label">아이디</label>
                <input type="text" placeholder="아이디를 입력해 주세요.">
              </div>
              <div class="account_input">
                <label for="" class="input_label">이메일</label>
                <input type="email" placeholder="이메일을 입력해 주세요.">
              </div>
              <button type="submit" class="btn btn-big btn-w100p btn_brand">확인</button>
            </div>
            <ul class="account_menu">
              <li><a href="./login.php">로그인</a></li>
              <li><a href="./find_id.php">아이디 찾기</a></li>
              <li class="link_signup"><a href="./signup_normal1.php">회원가입</a></li>
            </ul>
          </fieldset>
        </form>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>