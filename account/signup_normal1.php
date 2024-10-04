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
            <div class="account_sns">
              <a href="./signup_normal2.php" class="btn btn-big btn-w100p btn_brand">일반회원 가입하기</a>
              <div class="sns_title">
                <span class="bar"></span>
                <h5>SNS 계정으로 간편하게 가입</h5>
                <span class="bar"></span>
              </div>
              <ul class="sns_list">
                <li class="sns_naver"><a href="#"><span>네이버로 간편 가입하기</span></a></li>
                <li class="sns_kakao"><a href="#"><span>카카오로 간편 가입하기</span></a></li>
                <li class="sns_google"><a href="#"><span>Google로 간편 가입하기</span></a></li>
                <li class="sns_apple"><a href="#"><span>Apple로 간편 가입하기</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>