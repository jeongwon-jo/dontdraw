$(function () {
  /* Nice Select */
  $(".nice-select").niceSelect();

  /* Datepicker */
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
  });

  // 사이드바 카테고리 1뎁스 클릭
  $(".sidebar-snb .sidebar_1depth").click(function () {
    $(this).toggleClass("active");
    $(".sidebar-snb .sidebar_1depth").not($(this)).removeClass("active");
    $(this).siblings().slideToggle();
    $(".sidebar-snb ul.snb_2depth").not($(this).siblings()).slideUp();
  });

  // 사이드바 카테고리 2뎁스 클릭
  $(".sidebar-snb .sidebar_2depth").click(function () {
    $(this).toggleClass("active");
    $(".sidebar-snb .sidebar_2depth").not($(this)).removeClass("active");
    $(this).siblings().slideToggle();
    $(".sidebar-snb ul.snb_3depth").not($(this).siblings()).slideUp();
  });
  $(".sidebar-snb>ul>li:nth-child(1) .sidebar_1depth").addClass("active");
  $(".sidebar-snb>ul>li:nth-child(1) .sidebar_1depth~.snb_2depth").show();
  $(
    ".sidebar-snb>ul>li:nth-child(1) ul.snb_2depth li:nth-child(1) .sidebar_2depth"
  ).addClass("active");
  $(
    ".sidebar-snb>ul>li:nth-child(1) ul.snb_2depth li:nth-child(1) .sidebar_2depth~.snb_3depth"
  ).show();

  // 헤더 상단 광고 영역 삭제버튼
  $(".header-ad .btn_close").click(function () {
    $(this).parents(".header-ad").hide();
    $(".main").css("padding-top", "136px");
    $('.main__container aside.sidebar').addClass('up')
  });

  // 스크롤탑
  $(".scroll-top").click(function () {
    $("html,body").animate({ scrollTop: 0 }, 1000);
  });

  // 카드아이템 좋아요 버튼 클릭
  $(".btn_like").click(function () {
    $(this).toggleClass("active");
  });

  // 리뷰 좋아요 버튼 클릭
  $('.review__item .btn_vote').click(function () {
    let count = Number($(this).children().text());

    if ($(this).hasClass('active')) {
      $(this).children().text(count - 1)
    } else {
      $(this).children().text(count + 1)
    }

    $(this).toggleClass('active')
    
  })

  // 공통 : 탭 메뉴 (한 페이지에 탭 메뉴 한개여야 함)
  $("ul.tabs li.tabs__link").click(function () {
    var tab_id = $(this).attr("data-tab");

    $("ul.tabs li.tabs__link").removeClass("on");
    $('.tab__content').removeClass('on');

    $(this).addClass("on");
    $("#" + tab_id).addClass("on");
  });

  // 주소찾기
  $("#btn_find_address").click(function () {
    new daum.Postcode({
      oncomplete: function (data) {
        $("#btn_find_address").siblings("input").val(data.zonecode);
        $("#btn_find_address")
          .parent()
          .siblings("#address")
          .val(data.address);
        $("#detail_address").focus();
      },
    }).open();
  });

  // 필터 셀렉트 영역 누르면 해당 내용 show
  $(".filter_select .selected").click(function () {
    $(".filter_select .filter-select__list")
      .not($(this).siblings())
      .removeClass("active");
    $(this).siblings().toggleClass("active");
  });

  // 전체검색 포커스 온 -> 최근검색어 영역 노출
  $(".header_search input").focus(function () {
    $(this).parents(".main-search_area").siblings().addClass("active");
  });

  // 최근검색어 삭제
  $(".recent_search_word .btn_delete").click(function () {
    $(this).parents(".search_item").remove();
    if ($(".recent_search_word .search_item").length == 0) {
      $(".recent_search_word .no-result__search").addClass("active");
    }
  });

  $(".recent_search_word .btn_delete_all").click(function () {
    $(".recent_search_word .search_item").remove();
    $(".recent_search_word .no-result__search").addClass("active");
  });

  // 장바구니 추가완료 모달
  $(document).on(
    "click",
    ".modal_cart .modal__close, .modal_cart .btn_shop",
    function () {
      $('.header .modal_cart .modal__inner').html("")
      $('.modal_cart').fadeOut()
    }
  );
});

$(window).on("resize", function () {
  let width = $(window).width();
});

$(window).on("scroll", function () {});

$(window).on("click", function (e) {
  // 헤더 전체검색 최근검색어 닫힘
  if (!e.target.closest(".header_search")) {
    if ($(e.target).parent(".search_item").length == 0) {
      $(".recent_search_word").removeClass("active");
    }
  }

  // 필터 셀렉트 닫힘
  if (!e.target.closest(".filter_select")) {
    $(".filter_select .filter-select__list").removeClass("active");
  }

  // 모달 바깥영역 클릭시 닫힘
  const modalOuter = document.querySelector(".modal");
  if (e.target == modalOuter) {
    $(".modal").fadeOut();
    $("body").css("overflow-y", "scroll");
  }
});

function openModal(id) {
  $("#" + id).fadeIn();
  $("body").css("overflow-y", "hidden");
}

function closeModal(id) {
  $("#" + id).fadeOut();
  $("body").css("overflow-y", "scroll");
}

function closeAllModal() {
  $(".modal").hide();
}

function searchTotal() {
  if ($("#total_search_input").val() == "") {
    alert("찾으시는 상품을 입력해 주세요!");
  } else {
    location.href = `/search.php?search_word=${$("#total_search_input").val()}`;
  }
}
