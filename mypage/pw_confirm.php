<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="mypage__container">
        <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/mypage_nav.php"; ?>
        <div class="mypage__content">
          <div class="pw-confirm__inner">
            <div class="title">
              <h3>회원정보 변경</h3>
              <p>회원님의 개인정보 보호를 위해 비밀번호를 다시 한번 확인해 주세요.</p>
            </div>
            <form action="" class="form_pw_confirm">
              <fieldset>
                <input type="password" placeholder="비밀번호를 입력해 주세요.">
                <div class="btns">
                  <button type="submit" class="btn btn-w100p btn-big btn_brand">인증하기</button>
                  <a href="#" class="btn btn-w100p btn-big btn_transparent">취소하기</a>
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