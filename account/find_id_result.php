<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="account_title">
          <h3>아이디 찾기</h3>
        </div>
        <!-- 정보 일치 -->
        <div class="find-idpw_result">
          <p class="result_tit">
            입력하신 정보와 일치하는 아이디는 아래와 같습니다.
          </p>
          <div class="result_content">
            <p>BNSYSTEM0123</p>
          </div>
          <div class="result_btns">
            <a href="./find_pw.php" class="btn btn-big btn-w100p btn_brand">비밀번호 찾기</a>
            <a href="./login.php" class="btn btn-big btn-w100p btn_transparent">로그인 페이지 돌아가기</a>
          </div>
        </div>
        <!-- 정보 없음 -->
        <!-- <div class="find-idpw_result">
          <p class="result_tit">
            입력하신 정보와 일치하는 회원정보가 존재하지 않습니다.
          </p>
          <div class="result_btns">
            <a href="./signup_normal1.php" class="btn btn-big btn-w100p btn_brand">회원가입 하러가기</a>
            <a href="./find_id.php" class="btn btn-big btn-w100p btn_transparent">다시 시도하기</a>
          </div>
        </div> -->
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>