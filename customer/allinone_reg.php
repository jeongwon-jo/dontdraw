<?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/head.php"; ?>
<body>
<body>
  <div id="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"; ?>
    <main class="main">
      <div class="community__container">
        <div class="community-reg__inner">
          <div class="community__title">
            <h3>올인원회원신청</h3>
          </div>
          <form action="" class="form_reg--typeA">
            <fieldset>
              <div class="regA_input">
                <label for="" class="input_label">제목 <span class="asterisk">*</span></label>
                <div class="regA_content">
                  <input type="text" minlength="10" placeholder="10자 이상 입력">
                </div>
                <!-- <p class="error"></p> -->
              </div>
              <div class="regA_input">
                <label for="" class="input_label">내용 <span class="asterisk">*</span></label>
                <div class="regA_content">
                  <div class="custom_textarea">
                    <textarea name="" id="" class="scroll" minlength="50" placeholder="50자 이상 등록해주세요"></textarea>
                  </div>
                </div>
                <!-- <p class="error"></p> -->
              </div>
              <div class="regA_input">
                <label for="" class="input_label">파일첨부</label>
                <div class="regA_content">
                  <div class="custom_file--typeA">
                    <div class="input_file">
                      <label for="file">파일 업로드</label> 
                      <input type="file" id="file" accept=".jpg, .png, .gif" multiple onchange="inputFile()">
                    </div>
                    <div class="file_info-txt">
                      <p>- jpg, png, gif 30MB 이하의 이미지만 업로드 가능합니다.</p>
                      <p>- 사진은 최대 5장까지 등록 가능합니다.</p>
                    </div>
                  </div>
                  <div id="selectedFileList" class="file--typeA__list">
                    <!-- <div class="file">
                      <a href="#">배경소품 신청 이미지 파일명 .jpg</a>
                      <button type="button" class="btn_delete_file"></button>
                    </div>-->
                  </div>
                </div>
                <!-- <p class="error"></p> -->
              </div>
              <div class="regA_input">
                <label for="" class="input_label">공개설정 <span class="asterisk">*</span></label>
                <div class="regA_content">
                  <div class="bg_flex_box">
                    <div class="radio--typeA">
                      <label for="form1">
                        <input type="radio" name="radio_form" id="form1" checked><em></em> 공개
                      </label>
                    </div>
                    <div class="radio--typeA">
                      <label for="form2">
                        <input type="radio" name="radio_form" id="form2"><em></em> 비공개
                      </label>
                    </div>
                  </div>
                </div>
                <!-- <p class="error"></p> -->
              </div>
              <div class="regA_btns">
                <a href="./list.php" class="btn btn-big btn_brand_outline2 btn_cancel">취소</a>
                <button type="button" class="btn btn-big btn_brand btn_submit">등록하기</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </main>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"; ?>
  </div>
  <script>
    function inputFile () {
      var selectFile = document.getElementById('file'); 

      let fileSrc = "";
      // 파일 복수선택
      if(selectFile.files.length > 1) {
        for (let i=0; i<selectFile.files.length;i++) {
          fileSrc = `
            <div class="file">
              <a href="#">${selectFile.files.item(i).name}</a>
              <button type="button" class="btn_delete_file"></button>
            </div>
          `;

          $('#selectedFileList').append(fileSrc)
        }
        // 파일 하나 선택
      } else {
        fileSrc = `
          <div class="file">
            <a href="#">${selectFile.files.item(0).name}</a>
            <button type="button" class="btn_delete_file"></button>
          </div>
        `

        $('#selectedFileList').append(fileSrc)
      }
    };

    $(function() {
      $(document).on("click", ".btn_delete_file", function () {
        $(this).parents('.file').remove()
      });
    })

  </script>
</body>
</html>