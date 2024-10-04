<header class="header">
  <div class="header__inner">
    <div class="header-ad">
      <div class="header-ad__inner">
        <a href="#" class="header-ad_link">
          <span>
            돈드로우 정액제 회원들만을 위한 특별한 할인 혜택! 지금 돈드로우 정액제 구독하고 고객님을 위한 특별한 혜택을 만나보세요!
          </span>
        </a>
        <button type="button" class="btn_close"></button>
      </div>
    </div>
    <div class="header__wrap">
      <div class="header__area">
        <div class="header_logo">
          <a href="/" class="logo">
            <img src="/_img/common/logo.png" alt="돈드로우 로고">
          </a>
          <div class="etc_menu mo_show">
            <ul>
              <li><a href="#" class="menu_cart"></a></li>
              <li><a href="#" class="menu_noti"></a></li>
            </ul>
          </div>
        </div>
        <div class="header_search">
          <div class="main-search_area">
            <div class="search_input">
              <button type="button" class="btn_search" onclick="searchTotal()"></button>
              <input type="text" id="total_search_input" onkeypress="if(event.keyCode=='13'){event.preventDefault(); searchTotal();}" autocomplete="off" placeholder="찾으시는 상품을 입력해 주세요!">
            </div>
          </div>
          <div class="recent_search_word">
            <div class="recent-search_title">
              <h4>최근검색어</h4>
              <a type="button" class="btn_delete_all">전체 지우기</a>
            </div>
            <!-- 노출시 active 클래스 -->
            <div class="no-result__search">
              <p>최근검색어가 없습니다.</p>
            </div>
            <div class="search_list">
              <div class="search_item">
                <a href="/search.php?search_word=와인병" class="search_link">와인병</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=오션뷰 호텔" class="search_link">오션뷰 호텔</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=베이커리카페" class="search_link">베이커리카페</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=호텔룸" class="search_link">호텔룸</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=야경" class="search_link">야경</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=유럽풍" class="search_link">유럽풍</a>
                <button type="button" class="btn_delete"></button>
              </div>
              <div class="search_item">
                <a href="/search.php?search_word=판타지" class="search_link">판타지</a>
                <button type="button" class="btn_delete"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="account">
          <div class="etc_menu">
            <ul>
              <li><a href="#" class="menu_noti"></a></li>
              <li><a href="#" class="menu_like"></a></li>
              <li><a href="#" class="menu_cart"></a>
                <!-- 장바구니 추가 완료 모달 시작 -->
                <div id="modal_cart" class="modal_cart">
                  <div class="modal__inner">
                    
                  </div>
                </div>
                <!-- 장바구니 추가 완료 모달 끝 -->
              </li>
              <li><a href="/account/login.php" class="menu_account"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="header-gnb">
      <div class="header-gnb__inner">
        <div class="header_tab">
          <ul>
            <li><a href="/item_list.php">전체보기</a></li>
            <li><a href="/gnb/new.php">신작</a></li>
            <li><a href="#">구독</a></li>
            <li><a href="/gnb/sale.php">할인</a></li>
            <li><a href="/event/event_list.php">이벤트</a></li>
            <li><a href="/gnb/best.php">베스트</a></li>
          </ul>
          <ul>
            <li><a href="/community/bg_apply_list.php">커뮤니티</a></li>
            <li><a href="/customer/list.php">고객센터</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>