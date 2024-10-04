<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="mypage__container">
        <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/mypage_nav.php"; ?>
        <div class="mypage__content">
          <div class="mypage_home__inner">
            <div class="home_myinfo">
              <div class="my_info">
                <div class="subscribe_circle">
                  <!-- 개인회원 : personal -->
                  <!-- <div class="sub_circle personal">
                    <div class="circle__inner">
                      <img src="/_img/mypage/icon_personal.svg" alt="">
                      <h4>개인회원</h4>
                    </div>
                  </div> -->
                  <!-- 개인회원구독 : personal_sub -->
                  <div class="sub_circle personal_sub">
                    <div class="circle__inner">
                      <img src="/_img/mypage/icon_personal_sub.svg" alt="">
                      <h4>개인회원구독</h4>
                      <span class="badge">구독중</span>
                    </div>
                  </div>
                  <!-- 기업회원구독 : company_sub -->
                  <!-- <div class="sub_circle company_sub">
                    <div class="circle__inner">
                      <img src="/_img/mypage/icon_company_sub.svg" alt="">
                      <h4>기업회원구독</h4>
                      <span class="badge">구독중</span>
                    </div>
                  </div> -->
                </div>
                <div class="myinfo_modify">
                  <div class="hello">
                    <h4>홍길동님, 반갑습니다!</h4>
                    <a href="#" class="btn-textType">성인인증</a>
                  </div>
                  <p>정액권 구독하고 더 많은 혜택을 받아보세요!</p>
                  <!-- <p>정액권 자동결제 이용중</p> -->
                  <div class="subscribe-period">
                    <div class="period">
                      <span>이용기간</span>
                      <p>2024-03-11 ~ 2025-03-11</p>
                    </div>
                    <em class="d-day">D-365</em>
                  </div>
                  <!-- <a href="#" class="btn_subscribe"><span>정액권 구독 신청하기</span></a> -->
                  <a href="#" class="btn btn-md btn_brand btn_modify">회원정보 수정</a>
                </div>
              </div>
              <div class="my_points">
                <div class="point">
                  <img src="/_img/mypage/point.png" alt="포인트 아이콘">
                  <span>내 포인트</span>
                  <h3>1500P</h3>
                  <a href="#" class="btn btn-md btn_gray_outline">포인트 관리</a>
                </div>
                <div class="coupon">
                  <img src="/_img/mypage/coupon.png" alt="쿠폰 아이콘">
                  <span>내 쿠폰</span>
                  <h3>2장</h3>
                  <a href="#" class="btn btn-md btn_gray_outline">쿠폰함</a>
                </div>
              </div>
            </div>
            <div class="mypage-home__tables">
              <div class="mypage-home_table">
                <div class="home_title">
                  <h3>최근 다운로드 내역</h3>
                  <a href="#" class="btn_show_all">전체보기</a>
                </div>
                <div class="home_content">
                  <div class="tbl--typeB tbl_download_list">
                    <table>
                      <colgroup>
                        <col style="width: auto">
                        <col style="width: 178px">
                        <col style="width: 130px">
                        <col style="width: 130px">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>상품정보</th>
                          <th>결제방법</th>
                          <th>상품금액</th>
                          <th>당첨여부</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="download_item">
                              <div class="thum">
                                <img src="/_img/thum/thum01.png" alt="">
                              </div>
                              <div class="desc">
                                <h3>가장 큰 로맨스 판타지 팰리스 - 깔끔한 내부</h3>
                                <ul class="desc_info">
                                  <li><span>주문번호</span> 20240311123456</li>
                                  <li><span>주문일자</span> 2024-03-11</li>
                                  <li><span>다운로드</span> ~2025-03-11 까지</li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td></td>
                          <td>
                            <div class="download_price">
                              <p class="cost">35,000원</p>
                              <p class="price">45,000원</p>
                            </div>
                          </td>
                          <td>
                            <div class="download_btns">
                              <a href="#" class="btn btn-sm btn_gray_outline">리뷰작성</a>
                              <a href="#" class="btn btn-sm btn_brand_outline btn_download">다운로드</a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="mypage-home_table">
                <div class="home_title">
                  <h3>나의 문의내역</h3>
                  <a href="#" class="btn_show_all">전체보기</a>
                </div>
                <div class="home_content">
                  <div class="tbl--typeB">
                    <table>
                      <colgroup>
                        <col style="width: 130px">
                        <col style="width: 130px">
                        <col style="width: auto">
                        <col style="width: 130px">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>날짜</th>
                          <th>구분</th>
                          <th>문의내용</th>
                          <th>답변</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="c_info">2024-03-11</span>
                          </td>
                          <td>저작권 문의</td>
                          <td>돈드로우에 문의한 내용이 들어갈 타이틀 텍스트 영역입니다.</td>
                          <td>
                            <span class="c_brand">답변완료</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="c_info">2024-03-11</span>
                          </td>
                          <td>저작권 문의</td>
                          <td>돈드로우에 문의한 내용이 들어갈 타이틀 텍스트 영역입니다.</td>
                          <td>
                            <span class="c_disabled">답변 대기중</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="mypage-home_table">
                <div class="home_title">
                  <h3>배경소품 신청현황</h3>
                  <a href="#" class="btn_show_all">전체보기</a>
                </div>
                <div class="home_content">
                  <div class="tbl--typeB">
                    <table>
                      <colgroup>
                        <col style="width: auto">
                        <col style="width: 160px">
                        <col style="width: 90px">
                        <col style="width: 130px">
                        <col style="width: 90px">
                        <col style="width: 120px">
                        <col style="width: 100px">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>제목</th>
                          <th>구분</th>
                          <th>첨부파일</th>
                          <th>작성일</th>
                          <th>조회수</th>
                          <th>투표수</th>
                          <th>진행상황</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="./bg_apply_dtl.php" class="title">호텔 내부 인테리어 배경 소품 신청합니다!</a>
                          </td>
                          <td>배경내부</td>
                          <td><i class="icon_file"></i></td>
                          <td><span class="c_info">2024-03-11</span></td>
                          <td>120</td>
                          <td><span class="vote_cnt">152</span></td>
                          <td><span class="vote_badge ing">제작 진행중</span></td>
                        </tr>
                        <tr>
                          <td>
                            <a href="./bg_apply_dtl.php" class="title">호텔 내부 인테리어 배경 소품 신청합니다!</a>
                          </td>
                          <td>배경내부</td>
                          <td><i class="icon_file"></i></td>
                          <td><span class="c_info">2024-03-11</span></td>
                          <td>120</td>
                          <td><span class="vote_cnt">152</span></td>
                          <td><span class="vote_badge complete">제작 완료</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="mypage-home_table">
                <div class="home_title">
                  <h3>최근 본 상품</h3>
                  <a href="#" class="btn_show_all">전체보기</a>
                </div>
                <div class="home_content">
                  <div class="home-card__list">
                    
                  </div>
                </div>
              </div>
              <div class="mypage-home_table">
                <div class="home_title">
                  <h3>찜한 상품</h3>
                  <a href="#" class="btn_show_all">전체보기</a>
                </div>
                <div class="home_content">
                  <div class="home-card__list">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
</body>
</html>