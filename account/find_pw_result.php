<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="account_title">
          <h3>비밀번호 찾기</h3>
        </div>
        <!-- 정보 일치 -->
        <div class="find-idpw_result">
          <p class="result_tit">
            회원님의 메일로 임시 비밀번호가 전송되었습니다.<br>
            <span class="c_brand fw500">로그인 후 반드시 마이페이지에서 비밀번호를 변경해 주세요.</span>
          </p>
          <div class="result_btns">
            <a href="./login.php" class="btn btn-big btn-w100p btn_brand">로그인 페이지 돌아가기</a>
          </div>
        </div>
        <!-- 정보 없음 -->
        <!-- <div class="find-idpw_result">
          <p class="result_tit">
            입력하신 정보와 일치하는 회원정보가 존재하지 않습니다.
          </p>
          <div class="result_btns">
            <a href="./signup_normal1.php" class="btn btn-big btn-w100p btn_brand">회원가입 하러가기</a>
            <a href="./find_pw.php" class="btn btn-big btn-w100p btn_transparent">다시 시도하기</a>
          </div>
        </div> -->
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>