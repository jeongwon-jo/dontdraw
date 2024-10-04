<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="signup_comp__container">
          <img src="/_img/icon/signup_complete.png" alt="">
          <div class="complete_title">
            <h3>회원가입이 완료되었습니다.</h3>
            <!-- TODO : 기업회원가입인 경우 노출 -->
            <!-- <p>기업회원의 경우 구독결제를 신청하셔야 이용가능합니다.</p> -->
          </div>
          <div class="result_btns">
            <!-- TODO : 일반회원가입인 경우 노출 -->
            <a href="#" class="btn btn-big btn-w100p btn_brand">정액구독 결제신청</a>
            <!-- TODO : 기업회원가입인 경우 노출 -->
            <!-- <a href="#" class="btn btn-big btn-w100p btn_brand">기업구독 결제신청</a> -->
            <a href="./login.php" class="btn btn-big btn-w100p btn_transparent">로그인 페이지 돌아가기</a>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>