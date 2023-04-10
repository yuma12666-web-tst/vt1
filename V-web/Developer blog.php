<!DOCTYPE html>

    <html lang="ja">
        <meta http-equiv="refresh" content="300">
        <head>
                <metahttp-equiv="content-type" content="text/html; charset=UTF-8">
                <META http-equiv="Content-Style-Type" content="text/css">   <!--スタイルシートを定義-->
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="viewport" content="width=device-width">
                <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- アクセス時に使用した機器について、画面サイズなどの情報を入手する -->
                <!-- アクセス時に使用した機器について、画面サイズなどの情報を入手する -->

                <link href="./css/style.css" media="all" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
                <!-- <link rel="shortcut icon" href="/img/favicon.ico"> -->

                <link rel="icon" href="/img/DelftStack/favicon.png"> 
                <title>TOPページ</title>
        </head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
                            <h3 class="TOP_txtH3">現在の開発状況</h3>
                                <p class="Character_history"><?php echo date("Y/m/d H:i:s") ?></p>
                                <p class="Character_history">開発状況を<a href="./Develope.txt">「Develope.txt」に記載。</a></p>
                                <p class="Character_history">以下、「Develope.txt」内容</p>

                                <br>
                                <br>
                                <OBJECT DATA="./Develope.txt"TYPE="text/plain" WIDTH="1100px" HEIGHT="900px"></OBJECT>

                        </div>
                </div>
        <?php
            include "footer.html"
         ?>


    </div>

        </body>
    </html>

<!DOCTYPE html>
