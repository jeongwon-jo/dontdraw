<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="community__container">
        <ul class="community__link">
          <li><a href="./bg_apply_list.php">배경소품 신청</a></li>
          <li class="on"><a href="./review_list.php">리뷰보기</a></li>
        </ul>
        <ul class="breadcrumb">
					<li>홈</li>
					<li>커뮤니티</li>
					<li>리뷰보기</li>
				</ul>
        <div class="community__inner">
          <div class="community__title">
            <div>
              <h3>리뷰보기</h3>
              <p>내가 찾는 상품의 리뷰를 확인하세요.</p>
            </div>
          </div>
          <div class="review__content">
            <div class="review_advert">
              <div class="title">
                <h3>돈드로우 포인트적립</h3>
                <p>상품리뷰 작성하고 포인트 적립받으세요</p>
              </div>
              <div class="write_point_info">
                <div class="point_info">
                  <div class="tit">
                    <span>일반리뷰 작성 시</span>
                    <h3>1000P</h3>
                  </div>
                  <div class="img normal">
                    <span>1000P</span>
                  </div>
                </div>
                <div class="point_info">
                  <div class="tit">
                    <span>포토리뷰 작성 시</span>
                    <h3>3000P</h3>
                  </div>
                  <div class="img photo">
                    <span>3000P</span>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-big btn_brand btn_review">리뷰 작성하기</a>
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
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
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
  <script>
    $(function() {
      var swiper = new Swiper('.photo-review_swiper', {
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

      $('.review__item .btn_toggle').click(function() {
        $(this).toggleClass('active')
        $(this).parents('.review_imgs').siblings('.admin_answer').slideToggle()
      })

      $('.answer_btn_area .btn_answer_toggle').click(function() {
        $(this).toggleClass('active')
        $(this).parents('.answer_btn_area').siblings('.admin_answer').slideToggle()
      })

    })
  </script>
</body>
</html>