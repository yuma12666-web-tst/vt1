
jQuery(function() {
  var pagetop = $('#page_top');   
  pagetop.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      $('main,php').animate({
          scrollTop: 0
      }, 500); //0.5秒かけてトップへ移動
      return false;
  });
});

//アラート文
function error001 () {
  alert('このページへはアクセスできません');
  location.href = 'KouzaList.php';

}

function address_check() {
  f = document.contact_form;
  if(f.Email1.value != f.Email2.value){ //比較して違ってたら
      alert("メールアドレスが間違っています"); //警告して
      return false; //送信処理をキャンセル
  }
}


// POPアップ画面

    $(function(){
        // 変数に要素を入れる
        var open = $('.modal-open'),
          close = $('.modal-close'),
          container = $('.modal-container');
      
        //開くボタンをクリックしたらモーダルを表示する
        open.on('click',function(){ 
          container.addClass('active');
          return false;
        });
      
        //閉じるボタンをクリックしたらモーダルを閉じる
        close.on('click',function(){  
          container.removeClass('active');
        });
      
        //モーダルの外側をクリックしたらモーダルを閉じる
        $(document).on('click',function(e) {
          if(!$(e.target).closest('.modal-body').length) {
            container.removeClass('active');
          }
        });
      });


// ファンアート用 画像横並びアニメ

