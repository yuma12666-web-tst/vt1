<?php 
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = $_POST["name"];
        $name_k = $_POST["name_k"];
        $email = $_POST["email"];
        $Course_selection = $_POST["Course_selection"];
        $Comment_txt = $_POST["Comment_txt"];

    } 

    // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        // 送信ボタンが押された時に動作する処理をここに記述する
            
        // 日本語をメールで送る場合のおまじない
            mb_language("ja");
            mb_internal_encoding("UTF-8");
        
        //mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

            // 件名を変数subjectに格納
            $subject = "［自動送信］お問い合わせ内容の確認";

            // メール本文を変数bodyに格納
        $body = <<< EOM
        else{
            echo "ここ";
        }

{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}

【 ふりがな 】 
{$name_k}

【 メール 】 
{$email}

【 電話番号 】 
{$email}

【 性別 】 
{$Course_selection}

【 項目 】 
{$item}

【 内容 】 
{$Comment_txt}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;
        
        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "ishida1019yuma@gmail.com";

        // 送信元の名前を変数fromNameに格納
        $fromName = "お問い合わせテスト";

        // ヘッダ情報を変数headerに格納する      
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        if(!mb_send_mail($to, $subject, $message, $headers)) {  //メール送信
            $sendcheck = "failed";
            // サンクスページに画面遷移させる
            
        }else{
            $sendcheck = "send";
            header("Location: contact_success.php");
        }
    }
    
        if($sendcheck == 'failed'){
            // 送信失敗
            $alertMessege = 
            "<script type='text/javascript'>
                alert('お問合せの送信に失敗しました。\\n時間をおいて、もう一度お試しください。\\n※フォームを複数タブで開いた場合、エラーが発生する可能性があります。');
                location.href='contact.php';
            </script>";
        
            echo $alertMessege;
        
        }
    

       

        ?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="contact_check.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="furigana" value="<?php echo $name_k; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="Course_selection" value="<?php echo $Course_selection; ?>">
            <input type="hidden" name="Comment_txt" value="<?php echo $Comment_txt; ?>">

            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $name_k; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>

                <div>
                    <label>お問い合わせ種別</label>
                    <p><?php echo $Course_selection ?></p>
                </div>

                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo nl2br($Comment_txt); ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>