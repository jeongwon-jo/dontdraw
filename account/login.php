<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="account__container">
        <div class="account_title login">
          <div class="logo"></div>
        </div>
        <form class="form_account">
          <fieldset>
            <div class="account__area">
              <div class="account_input">
                <label for="" class="input_label">아이디</label>
                <input type="text" placeholder="아이디를 입력해 주세요.">
              </div>
              <div class="account_input">
                <label for="" class="input_label">비밀번호</label>
                <input type="password" placeholder="패스워드를 입력해 주세요.">
              </div>
              <!-- <p class="error">아이디 또는 비밀번호를 확인해주세요.</p> -->
              <button type="submit" class="btn btn-big btn-w100p btn_brand">로그인</button>
            </div>
            <ul class="account_menu">
              <li><a href="./find_id.php">아이디 찾기</a></li>
              <li><a href="./find_pw.php">비밀번호 찾기</a></li>
              <li class="link_signup"><a href="./signup_normal1.php">회원가입</a></li>
            </ul>
            <div class="account_sns">
              <div class="sns_title">
                <span class="bar"></span>
                <h5>SNS 계정으로 간편하게 로그인</h5>
                <span class="bar"></span>
              </div>
              <ul class="sns_list">
                <li class="sns_kakao"><a href="#"></a></li>
                <li class="sns_google"><a href="#"></a></li>
                <li class="sns_naver"><a href="#"></a></li>
                <li class="sns_apple"><a href="#"></a></li>
              </ul>
            </div>
          </fieldset>
        </form>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>