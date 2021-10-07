$(function () {

  // const typingEffect = () => {
  let typingBool = false;
  let typingIdx = 0;
  let liIndex = 0;
  const liLength = $(".typing-txt>ul>li").length;

  // 타이핑될 텍스트를 가져온다 
  let typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
  typingTxt = typingTxt.split(""); // 한글자씩 자른다. 
  if (typingBool == false) { // 타이핑이 진행되지 않았다면 
    typingBool = true;
    var tyInt = setInterval(typing, 100); // 반복동작 
  }

  function typing() {
    if (typingIdx < typingTxt.length) { // 타이핑될 텍스트 길이만큼 반복 
      $(".typing").append(typingTxt[typingIdx]); // 한글자씩 이어준다. 
      typingIdx++;
    } else { //한문장이끝나면
      //다음문장으로.. 마지막문장이면 다시 첫번째 문장으로 
      if (liIndex >= liLength - 1) {
        liIndex = 0;
      } else {
        liIndex++;
      }

      //다음문장을 타이핑하기위한 셋팅
      typingIdx = 0;
      typingBool = false;
      typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();

      //다음문장 타이핑전 1초 쉰다
      clearInterval(tyInt);
      setTimeout(function () {
        $(".typing").html('');
        tyInt = setInterval(typing, 100);
      }, 1000);
    }
  }
  // }
  // typingEffect();


  //header stick to top and change style when scrolling down
  // const headerStick = () => {
  const hdTop = $("header").offset().top;

  $(window).scroll(function () {
    const scroll = $(window).scrollTop();
    if (scroll >= hdTop) {
      $("header").addClass("stick");
    } else {
      $("header").removeClass("stick");
    }
  });
  // }
  // headerStick();

  // //index page items load more
  // const loadMore_button = () => {
  $(".contant").hide();
  $(".contant").slice(0, 6).show();

  $(".load_more button").click(function () {
    $(".contant:hidden").slice(0, 4).show();
    if ($(".contant:hidden").length == 0) {
      $(".load_more").hide();;
    }
  });
  // }
  // loadMore_button();


});
