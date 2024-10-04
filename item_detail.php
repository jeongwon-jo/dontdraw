<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="detail__container">
        <ul class="breadcrumb">
          <li>카테고리</li>
          <li>3D 배경</li>
          <li>판타지</li>
          <li>학교/학원/교육</li>
        </ul>
        <div class="item_detail__inner">
          <div class="detail__info">
            <div class="item_thumbnail">
              <img src="/_img/thum/detail_thumbanail.png" alt="상세페이지 썸네일">
            </div>
            <div class="item_info">
              <div class="thum_badges">
                <span class="badge new">NEW</span>
                <span class="badge only"><em>ONLY</em></span>
              </div>
              <div class="item_review">
                <div class="stars">
                  <span class="star active"></span>
                  <span class="star active"></span>
                  <span class="star active"></span>
                  <span class="star active"></span>
                  <span class="star"></span>
                </div>
                <b class="star_score">4.0</b>
                <p class="review_cnt">24개의 상품 리뷰</p>
              </div>
              <div class="item_title">
                <h3>[~3/5] 가장 큰 로맨스 판타지 아카데미 - 오픈기념 할인 우리 마을 도시 패키지 6종</h3>
              </div>
              <div class="item_price">
                <span class="discount">30%</span>
                <p class="price">165,000원</p>
                <p class="cost">120,000</p>
                <span class="badge time">05:51:20 남음</span>
              </div>
              <div class="item-info__list">
                <ul>
                  <li>
                    <span class="tit">상품코드</span>
                    <div>KP 586_38536</div>
                  </li>
                  <li>
                    <span class="tit">확장자</span>
                    <div class="dtl_extension">
                      <span>skp</span>
                      <span>cs3o</span>
                    </div>
                  </li>
                  <li>
                    <span class="tit">프로그램</span>
                    <div class="dtl_program">
                      <span>스케치업</span>
                      <span>클립스튜디오</span>
                    </div>
                  </li>
                  <li>
                    <span class="tit">태그</span>
                    <div class="dtl_tag">
                      <span class="tag">태그1</span>
                      <span class="tag">태그2</span>
                      <span class="tag">태그3</span>
                    </div>
                  </li>
                  <li>
                    <span class="tit">포인트</span>
                    <div>165point</div>
                  </li>
                  <li>
                    <span class="tit">쿠폰</span>
                    <div>
                      <button type="button" class="btn-mini btn_gray_outline btn_dtl_download">쿠폰 다운로드</button>
                    </div>
                  </li>
                </ul>
              </div>
              <button type="button" class="btn btn-big btn-w100p btn_brand btn_buy" onclick="openModal('modal-subscribe')">구매하기</button>
              <div class="dtl_btns">
                <button type="button" class="btn btn-big btn_cart"><span>장바구니</span></button>
                <button type="button" class="btn btn-big btn_like_list"><span>찜하기</span></button>
              </div>
            </div>
          </div>
          <div class="detail__tab">
            <ul class="tabs">
              <li class="tabs__link on" data-tab="dtl_explain">상세설명</li>
              <li class="tabs__link" data-tab="dtl_notice">유의사항</li>
              <li class="tabs__link" data-tab="dtl_review">리뷰(24)</li>
            </ul>
            <div id="dtl_explain" class="tab__content on">
              <div class="explain__content" style="background-color:var(--bg_light)"></div>
            </div>  
            <div id="dtl_notice" class="tab__content">
              <div class="notice__content" style="background-color:var(--bg_light)"></div>
            </div>
            <div id="dtl_review" class="tab__content">
              <div class="dtl-review__content">
                <div class="review_top">
                  <h4>상품리뷰 <b class="c_brand">(2)</b></h4>
                  <div class="review_average">
                    <div class="stars">
                      <span class="star active"></span>
                      <span class="star active"></span>
                      <span class="star active"></span>
                      <span class="star active"></span>
                      <span class="star"></span>
                    </div>
                    <b class="star_score">4.0</b>
                  </div>
                </div>
                <div class="photo-review">
                  <h4>포토리뷰</h4>
                  <div class="photo-review__wrap">
                    <div class="swiper-container photo-review_swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum02.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="photo-review__content" onclick="openModal('modal-photo-collector')">
                            <img src="/_img/thum/thum01.png" alt="">
                          </div>
                        </div>
                      </div>
                      <button class="slider_prev"></button>
                      <button class="slider_next"></button>
                    </div>
                  </div>
                </div>
                <div class="review__list">
                  <div class="review_sort">
                    <ul class="sort">
                      <li class="on"><button type="button">최신순</button></li>
                      <li><button type="button">별점순</button></li>
                    </ul>
                    <select name="stars" id="stars" class="nice-select select--typeA small">
                      <option value="">별점 모아보기</option>
                    </select>
                  </div>
                  <div class="review__item">
                    <div class="review_info">
                      <div class="writer_info">
                        <div class="stars">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star"></span>
                        </div>
                        <ul class="writer-info_list">
                          <li>3D배경전문가</li>
                          <li class="c_info">2024-03-08</li>
                        </ul>
                      </div>
                      <button type="button" class="btn_vote">
                        <span class="vote_cnt small">132</span>
                      </button>
                    </div>
                    <div class="review_cnts">
                      <p>웨스트 판타지 아카데미 테마에 잘 어울리고 특히 검과 마법! 안에 너무 많은 사진을 캡처하지 못했습니다.가격대비 작업물도 훌륭하고 내부 디테일도 잘되어있어 여러 가지로 값어치 있습니다!</p>
                    </div>
                    <div class="review_imgs">
                      <div class="img" onclick="openModal('modal-photo-collector')">
                        <img src="/_img/thum/thum01.png" alt="">
                      </div>
                      <div class="img" onclick="openModal('modal-photo-collector')">
                        <img src="/_img/thum/thum01.png" alt="">
                      </div>
                      <!-- 관리자 답변이 있을 때 노출 -->
                      <button type="button" class="btn_toggle"></button>
                    </div>
                    <div class="admin_answer">
                      <ul class="admin_info">
                        <li>돈드로우</li>
                        <li class="c_info">2024.03.08</li>
                      </ul>
                      <div class="answer">
                        <p>
                          소중한 평가 감사드립니다<br> 
                          말씀에 힘입어 더욱 퀄리티 높은 상품을 제공하겠습니다.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="review__item">
                    <div class="review_info">
                      <div class="writer_info">
                        <div class="stars">
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star active"></span>
                          <span class="star"></span>
                        </div>
                        <ul class="writer-info_list">
                          <li>3D배경전문가</li>
                          <li class="c_info">2024-03-08</li>
                        </ul>
                      </div>
                      <button type="button" class="btn_vote">
                        <span class="vote_cnt small">132</span>
                      </button>
                    </div>
                    <div class="review_cnts">
                      <p>웨스트 판타지 아카데미 테마에 잘 어울리고 특히 검과 마법! 안에 너무 많은 사진을 캡처하지 못했습니다.가격대비 작업물도 훌륭하고 내부 디테일도 잘되어있어 여러 가지로 값어치 있습니다!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
    <!-- 정액제권 구독 모달 시작 -->
    <div id="modal-subscribe" class="modal modal--typeA">
      <div class="modal__inner small">
        <div class="modal__close">
          <button type="button" class="btn_modal_close" onclick="closeModal('modal-subscribe')"></button>
        </div>
        <div class="modal__header">
          <h3>정액제권 구독 문구 전달받아야합니다.</h3>
        </div>
        <div class="modal__content">
          <p>고객사 측에 정액제권 구독 문구 전달받아야 합니다.<br> 정액제권 구독 문구 전달 고객사</p>
        </div>
        <div class="modal__btns">
          <a href="#" class="btn btn-md btn_gray_outline">정액제 구독하기</a>
          <a href="#" class="btn btn-md btn_gray_outline">개별 결제하기</a>
        </div>
      </div>

    </div>
    <!-- 정액제권 구독 모달 끝 -->

    <!-- 이미지 모아보기 모달 시작 -->
    <div id="modal-photo-collector" class="modal modal_photo_collector">
      <div class="modal__inner">
        <div class="modal__close">
          <button type="button" class="btn_modal_close" onclick="closeModal('modal-photo-collector')"></button>
        </div>
        <div class="modal__content">
          <div class="review-image_slide">
            <div class="swiper-container photo_collector_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="photo-collertor_img">
                    <img src="/_img/thum/review_thum.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="photo-collertor_img">
                    <img src="/_img/thum/thum01.png" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <button class="slider_prev"></button>
              <button class="slider_next"></button>
            </div>
          </div>
          <!-- 위 리뷰아이템과 html 구조가 다르기 때문에 복붙하지마시고 유의해서 작업 부탁드립니다 :) -->
          <div class="review__item">
            <div class="review_info">
              <div class="modal_review_info">
                <div class="thum">
                  <img src="/_img/thum/thum01.png" alt="">
                </div>
                <div class="desc">
                  <h4>리뷰를 작성한 상품명 텍스트</h4>
                  <div class="desc_info">
                    <div class="desc_star">
                      <div class="stars">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                      </div>
                      <b class="star_score">4.0</b>
                    </div>
                    <ul class="writer-info_list">
                      <li>3D배경전문가</li>
                      <li>2024-03-08</li>
                    </ul>
                  </div>
                </div>
              </div>
              <button type="button" class="btn_vote">
                <span class="vote_cnt small">132</span>
              </button>
            </div>
            <div class="review_cnts">
              <p>웨스트 판타지 아카데미 테마에 잘 어울리고 특히 검과 마법! 안에 너무 많은 사진을 캡처하지 못했습니다.가격대비 작업물도 훌륭하고 내부 디테일도 잘되어있어 여러 가지로 값어치 있습니다!</p>
            </div>
            <!-- 관리자 답변이 있는 경우 노출 -->
            <div class="answer_btn_area">
              <button type="button" class="btn_answer_toggle"></button>
            </div>
            <div class="admin_answer">
              <ul class="admin_info">
                <li>돈드로우</li>
                <li class="c_info">2024.03.08</li>
              </ul>
              <div class="answer">
                <p>
                  소중한 평가 감사드립니다<br> 
                  말씀에 힘입어 더욱 퀄리티 높은 상품을 제공하겠습니다.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 이미지 모아보기 모달 끝 -->
  </div>
  <script>
    $(function() {
      // 리뷰 탭 이미지 슬라이드
      var photoReviewSwiper = new Swiper('.photo-review_swiper', {
        navigation: {
          prevEl: '.photo-review_swiper .slider_prev',
          nextEl: '.photo-review_swiper .slider_next'
        },
        spaceBetween: 16,
        slidesPerView: 9,
        centeredSlides: false
      })

      if ($(".swiper-container.photo-review_swiper  .swiper-slide").length > 9 ) {
        $('.photo-review_swiper').addClass('withButton')
      } else {
        $('.photo-review_swiper .slider_prev, .photo-review_swiper .slider_next').hide()
      }

      // 이미지 상세보기 모달 슬라이드
      var photoCollectorSwiper = new Swiper('.photo_collector_swiper', {
        navigation: {
          prevEl: '.photo_collector_swiper .slider_prev',
          nextEl: '.photo_collector_swiper .slider_next'
        },
         pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        slidesPerView: 1,
        centeredSlides: true,
      })
    })

    $('.review__item .btn_toggle').click(function() {
      $(this).toggleClass('active')
      $(this).parents('.review_imgs').siblings('.admin_answer').slideToggle()
    })

    $('.answer_btn_area .btn_answer_toggle').click(function() {
      $(this).toggleClass('active')
      $(this).parents('.answer_btn_area').siblings('.admin_answer').slideToggle()
    })

    $('.btn_like_list').click(function() {
      $(this).addClass('loading')

      // 임시 로딩중 보이기 위한 작업
      setTimeout(function() {
        $('.btn_like_list').removeClass('loading')
      }, 1000)

      $(this).toggleClass('active')
    })

    $('.btn_cart').click(function() {
      $('.header .modal_cart .modal__inner').html("")
      $('.header .modal_cart').fadeIn('fast')
      
      let cartModalSrc = `
        <div class="modal__close">
          <button type="button" class="btn_modal_close"></button>
        </div>
        <div class="modal__header">
          <h3>장바구니 추가완료</h3>
        </div>
        <div class="modal__content">
          <div class="cart_item">
            <div class="thum">
              <img src="/_img/thum/thum01.png" alt="">
            </div>
            <div class="desc">
              <h3>[~3/5] 가장 큰 로맨스 판타지 팰리스 - 깔끔한 내부</h3>
              <div class="item_price">
                <p class="price"><b>165,000</b>원</p>
                <p class="cost">120,000</p>
              </div>
            </div>
          </div>
          <div class="modal__btns">
            <button type="button" class="btn_shop">계속 쇼핑하기</button>
            <a href="#" class="btn_cart btn_brand">장바구니 가기</a>
          </div>
        </div>
      `

      $('.header .modal_cart .modal__inner').append(cartModalSrc)
    })
  </script>
</body>
</html>