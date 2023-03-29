$(function(){

  // ボタンを押したら続きのテキスト部分を表示する
  var $jsBtn = $('.js-text-btn');
  $jsBtn.on('click',function(){
    $(this).next('.js-show-text').slideToggle('.on');
  });

  //ヒーロー部分スライドショー
  var $slideImage = $('.p-slide__img');
  var num = 0;

  function slideShow(){
    if(num === 3){
      num = 0;
      $slideImage[num].classList.add('active');
      $slideImage[3].classList.remove('active');
    }else{
      num++;
      $slideImage[num].classList.add('active');
      $slideImage[num - 1].classList.remove('active');
    }
  }
  setInterval(slideShow,4000);

  //710pxくらいスクロールしたらヘッダーのクラスをつけ外し
  $(window).on('scroll', function(){
    $('.js-scroll-target').toggleClass('active', $(this).scrollTop() > 710);
  });

  //SPハンバーガーメニュー
  $('.js-sp-menu-trigger').on('click', function(){
    $('.js-sp-menu-target').toggleClass('active');
  });

});
