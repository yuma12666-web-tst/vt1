<!DOCTYPE html>

    <html lang="ja">
        <meta http-equiv="refresh" content="120">
        <head>
                <metahttp-equiv="content-type" content="text/html; charset=UTF-8">
                <META http-equiv="Content-Style-Type" content="text/css">   <!--スタイルシートを定義-->
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="viewport" content="width=device-width">
                <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- アクセス時に使用した機器について、画面サイズなどの情報を入手する -->
                <!-- アクセス時に使用した機器について、画面サイズなどの情報を入手する -->

                <link href="./css/style.css" media="all" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
                <!-- <link rel="shortcut icon" href="/img/favicon.ico"> -->

                <link rel="icon" href="/img/DelftStack/favicon.png"> 
                <title>TOPページ</title>
        </head>



        <!-- ページロード処理 -->
            <div id="splash">
                <div id="splash_text"></div>
                <div class="loader_cover loader_cover-up"></div>
                <div class="loader_cover loader_cover-down"></div>
              </div>
        <body id="body_size">

            <div class="bac"></div>

            <?php include "header.html" ?>
            
            <div class="wrapper">
                        <div class="main">
                            <h2 class="TOP_txtH3">お問い合わせ</h2>
                    
                            <div class="center-area3">
                            <p>ご利用の環境によっては、お問い合わせフォームをご利用いただけない場合があります。<br>
                                その際は、恐れ入りますが、（<a href="mailto:#">めーる</a>）まで直接お問い合わせください。
                            </p>
                            <br>
                            </div>
                            </section>
                    
                            
                            <form method="post" id="form" action="contact_check.php" onsubmit="return address_check()">

                                
                                <div class="contact-list">
                                    <h4 class="contact-title">お名前</h4>
                                        
                                        <p class="contact-form">
                                            <input type="text" class="contac_tlist-text" name="name" maxlength="20" placeholder="名前"> required
                                            <span class ="alertarea"></span>
                        
                                        </p>

                                </div>


                                <div class="contact-list">
                                    <h4 class="contact-select">フリガナ</h4>
                                        
                                        <p class="contact-form">
                                            <input type="text" class="contac_tlist-text" name="name_k" maxlength="20" placeholder="セイ" >required>
                                            <span class ="alertarea"></span>
                        
                                        </p>

                                </div>

                            
                                <div class="contact-list">
                                    <h4 class="contact-select">メールアドレス</h4>
                                        
                                        <p class="contact-form">
                                            <input type="email" class="contac_tlist-text" name="email"> >required>
                                            <span class ="alertarea"></span>
                                        </p>

                                </div>


                                <div class="contact-list">
            
                                    <h4 class="contact-select">お問い合わせ種別</h4>
                                        
                                        <p class="contact-form">
                                            <select name="Course_selection" >required class="select-box">
                                                <option value="">項目を選択してください。</option>
                                                <option value="ファンアート寄贈">ファンアート寄贈</option>
                                                <option value="活動について">活動について</option>
                                                <option value="その他お問い合わせ">その他お問い合わせ</option>
                                            </select>
                                        </p>

                                </div>
                        
                                <div class="contact-list">
                                    <h4 class="contact-select">お問い合わせ内容</h4>
                                        <textarea name="Comment_txt" class="txt_area"></textarea>
                    
                                <div class="contact-sub">
                                        <p class="contact-form">
                                            <a class="modal-open" href="#" style="text-decoration: underline;">個人情報に関して</a>
                                            ご同意の上、「内容を送信」を押してください。
                                        </p>

                                </div>
                                    <input type="submit" name="button" value="COMMIT">

                            </form>
                        </div>


    <?php
            include "footer.html"
         ?>


            <div class="#" id="">
        </body>
    </html>

<!DOCTYPE html>
