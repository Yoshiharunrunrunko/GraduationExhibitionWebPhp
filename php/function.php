<?php

    #######################################################################################################################################################
    # フォーム作成用関数
    # $D_...
    # ・・・と続いている関数は引数にデフォルト値が設定されたものです。
    # デフォルト値の引数は呼び出し時に省略可能ですが、省略しない場合は「省略しない部分と省略する部分」の引数の順番を
    # 間違えないようにNULLなどを渡さなければ、予期せぬ引数に値を渡されてしまうため、十分に注意してください。
    
    # ＃以下の文は学科サーバーのPHPのバージョンが8.0以上となった場合に消去、もしくは無視してください。＃
    # なお公式リファレンスなどでは名前付き引数を活用すれば順番を無視できることが紹介されておりますが、これはPHP 8.0以降で活用可能な技術です。
    # 2023/11/5 現在、学科のPHPは5.4.16と古いため活用できません。その他技術においても「どのPHPのバージョンから活用可能か」を注意してください。
    #######################################################################################################################################################
    
    #短文テキストボックス
    function createForm_text($header, $name, $assigned, $D_notice=NULL, $D_length=NULL){
        $notice = $D_notice==NULL ? '' : '<p class="form-notice">'.$D_notice.'</p>';
        $length = $D_length==NULL ? '' : 'maxlength="'.$D_length.'"';
        echo '<div class="form-parts"><h3>'.$header.'</h3>'.$notice.'<input class="input-textform" name="'.$name.'" value="'.$assigned.'" type="text" '.$length.'/></div>';
    }

    //長文テキストボックス
    function createForm_textArea($header, $name, $assigned, $D_notice=NULL, $D_length=NULL){
        $notice = $D_notice==NULL ? '' : '<p class="form-notice">'.$D_notice.'</p>';
        $length = $D_length==NULL ? '' : 'maxlength="'.$D_length.'"';
        echo '<div class="form-parts"><h3>'.$header.'</h3>'.$notice.'<textarea class="input-textform long-textform" name="'.$name.'" '.$length.'>'.$assigned.'</textarea></div>';
    }

    //画像ファイル送信用
    function createForm_file_img($header, $name, $pass, $assigned, $type, $D_notice=NULL){
        $notice = $D_notice==NULL ? '' : '<p class="form-notice">'.$D_notice.'</p>';
        if($type == 'square') $assigned = $assigned ? $assigned : 'blank_sq.jpg';
        if($type == 'rect') $assigned = $assigned ? $assigned : 'blank_rect.jpg';

        echo '<div class="form-parts"><form action="updateDataImage.php" enctype="multipart/form-data" method="POST">';
        echo '<h3>'.$header.'</h3>'.$notice.'<p class="img-parag">現在設定されている画像</p><div class="img-'.$type.'-out"><img class="img-'.$type.'-in" src="'.$pass.$assigned.'"></div><p class="img-parag">新しく設定する場合はこちらから</p><div class="img-form-input"><input type="file" name="'.$name.'" accept="image/*"/></div>';
        echo '<div class="form-submit-img"><input type="submit" value="画像を設定" /></div></form></div>';
    }

    //２つの画像（決められた画像・自由画像）からどちらかを送信できる
    function createForm_file_img_switch($header, $name, $pass, $assigned, $assigned_toggle, $toggle_array, $type, $D_notice=NULL){
        $switch = '<div style="text-align:center">';
        if($assigned_toggle=="album"){
            $switch .=   '<input name="imgicontoggle" type="radio" id="imgIconAlbum" value="album" checked><label class="input-radiolabel" for="imgIconAlbum">アルバム用に撮影した画像を使う</label>'.
                        '<input name="imgicontoggle" type="radio" id="imgIconFree" value="free"><label class="input-radiolabel" for="imgIconFree">自身で用意した画像を使う</label>';
        }else if($assigned_toggle=="free"){
            $switch .=   '<input name="imgicontoggle" type="radio" id="imgIconAlbum" value="album"><label class="input-radiolabel" for="imgIconAlbum">アルバム用に撮影した画像を使う</label>'.
                        '<input name="imgicontoggle" type="radio" id="imgIconFree" value="free" checked><label class="input-radiolabel" for="imgIconFree">自身で用意した画像を使う</label>';
        }else{
            $switch .=   '<input name="imgicontoggle" type="radio" id="imgIconAlbum" value="album"><label class="input-radiolabel" for="imgIconAlbum">アルバム用に撮影した画像を使う</label>'.
                        '<input name="imgicontoggle" type="radio" id="imgIconFree" value="free"><label class="input-radiolabel" for="imgIconFree">自身で用意した画像を使う</label>';
        }
        $switch .= '</div>';
        $notice = $D_notice==NULL ? '' : '<p class="form-notice">'.$D_notice.'</p>';
        echo '<div class="form-parts"><form action="updateDataImage.php" method="POST">';
        echo '<h3>'.$header.'</h3><p class="form-notice">'.$notice.'</p><p class="img-parag">表示する画像</p>'.$switch.'<p class="img-parag">現在設定されている画像</p><div class="img-'.$type.'-out">';
        foreach($toggle_array as $key => $value){
            echo '<div class="img-switch-column"><img class="img-'.$type.'-in" src="'.$pass.$assigned.$key.'"><p>'.$value.'</p></div>';
        }
        echo '</div><p class="img-parag">新しく設定する場合は参照...から選択</p><div class="img-form-input"><input type="file" name="'.$name.'"></div>';
        echo '<div class="form-submit-img"><input type="submit" value="画像を設定" /></div></form></div>';
    }

    //ラジオボタン（単一項目選択ボックス）
    function createForm_radio($header, $name, $genre_assoc, $assigned, $num, $D_notice=NULL){
        $notice = $D_notice==NULL ? '' : '<p class="form-notice">'.$D_notice.'</p>';
        echo '<ul class="form-parts"><h3>' . $header . '</h3>'. $notice;
        foreach($genre_assoc as $key => $value){
            if($num.$key == $assigned){
                echo'<li><input name="' . $name . '" type="radio" id="'.$num.$key.'" value="'.$num.$key.'" checked/><label class="input-radiolabel" for="'.$num.$key.'">'.$value.'</label></li>';
            }else{
                echo'<li><input name="' . $name . '" type="radio" id="'.$num.$key.'" value="'.$num.$key.'"/><label class="input-radiolabel" for="'.$num.$key.'">'.$value.'</label></li>';
            }
        }
        echo '</ul>';
    }

    // psql

    // Connection

    //データベースに接続し、接続インスタンスを返す関数
    function connectDatabase($database, $port, $host=NULL, $user, $pass=NULL){
        $cmmnd  = $host ? 'host='.$host : '';
        $cmmnd .= $port ? ' port='.$port : '';
        $cmmnd .= $database ? ' dbname='.$database : '';
        $cmmnd .= $user ? ' user='.$user : '';
        $cmmnd .= $pass ? ' password='.$pass : '';
        if($cmmnd == '') return false;
        return pg_connect($cmmnd);
    }

    // Reading

    //接続インスタンスからスキーマとテーブルを選び、IDを参照してデータを連想配列で返す関数
    //特定の１人だけのデータが欲しい場合に使う
    function readDataAssoc_fromID($connection, $dataSchema, $dataTable, $objectiveID){
        $result = pg_query_params($connection, 'SELECT * FROM '.$dataSchema.'.'.$dataTable.' WHERE id=$1', array($objectiveID));
        return pg_fetch_assoc($result);
    }

    function readDataAssoc_fromIDHash($connection, $dataSchema, $dataTable, $objectiveIDHash){
        $result = pg_query_params($connection, 'SELECT * FROM '.$dataSchema.'.'.$dataTable.' WHERE idhash=$1', array($objectiveIDHash));
        return pg_fetch_assoc($result);
    }

    //接続インスタンスからスキーマとテーブルを選び、そこに含まれる全てのデータを連想配列で返す関数
    //全員のデータが一斉に欲しい場合はこちら。
    function readDataAssoc_All($connection, $dataSchema, $dataTable, $orderBy){
        $result = pg_query($connection, 'SELECT * FROM '.$dataSchema.'.'.$dataTable.' ORDER BY '.$orderBy);
        return pg_fetch_all($result);
    }

    //接続インスタンスからスキーマとテーブルを選び、そこに含まれる全てのデータを数値の配列で返す関数
    //csvでアウトプットしたい場合はこちらがおすすめ。
    function readDataNum_All($connection, $dataSchema, $dataTable){
        $result = pg_query($connection, 'SELECT * FROM '.$dataSchema.'.'.$dataTable);
        return pg_fetch_all($result, PGSQL_NUM);
    }

    // Writing
    function writeData($connection, $dataSchema, $dataTable, $objectiveID, $columnName, $updateValue){
        $condi = ['id' => $objectiveID];
        $val = [$columnName => $updateValue];
        return pg_update($connection, $dataSchema.'.'.$dataTable, $val, $condi);
    }

    function writeImg($connection, $dataSchema, $dataTable, $objectiveID, $type, $tmp, $dir_mv, $_fname){
        if(is_uploaded_file($tmp['tmp_name'])){
            $ext = pathinfo($tmp['name'], PATHINFO_EXTENSION);
            $fname = $_fname.'_'.$type.'.'.$ext;
            $fileurl_mv = $dir_mv.$fname;
            move_uploaded_file($tmp['tmp_name'], $fileurl_mv);
            return writeData($connection, $dataSchema, $dataTable, $objectiveID, $type, $fname);
        }
    }

    ############################################
    # データ閲覧用関数
    ############################################

    #短文テキストボックス
    function confirmData_text($header, $assigned){
        echo '<div class="form-parts"><h3>'.$header.'</h3>'.$assigned.'</div>';
    }

    //長文テキストボックス
    function confirmData_textArea($header, $assigned){
        echo '<div class="form-parts"><h3>'.$header.'</h3>'.$assigned.'</div>';
    }

    //画像ファイル送信用
    function confirmData_file_img($header, $pass, $assigned, $type){
        echo '<div class="form-parts">';
        echo '<h3>'.$header.'</h3><div class="img-'.$type.'-out"><img class="img-'.$type.'-in" src="'.$pass.$assigned.'"></div>';
        echo '</div>';
    }

    //２つの画像（決められた画像・自由画像）からどちらかを送信できる
    function confirmData_file_img_switch($header, $pass, $assigned, $assigned_toggle, $toggle_array, $type){
        $isExecuted = false;
        $imglist = '';
        foreach($toggle_array as $key => $value){
            if($assigned_toggle == $value){
                $isExecuted = true;
                $imglist .= '<div class="img-switch-column"><img class="img-'.$type.'-in" src="'.$pass.$assigned.$key.'"><p>'.$value.'</p></div>';
            }
        }
        if(!$isExecuted){
            $imglist .= '<div class="img-switch-column"><p>いずれの画像も未登録です。</p></div>';
        }
        
        echo '<div class="form-parts">';
        echo '<h3>'.$header.'</h3><div class="img-'.$type.'-out">'.$imglist.'</div>';
        echo '</div>';
    }

    //ラジオボタン（単一項目選択ボックス）
    function confirmData_radio($header, $assoc, $assigned, $substr_num=0){
        $assigned = substr($assigned, $substr_num);
        echo '<ul class="form-parts"><h3>' . $header . '</h3>' . $assoc[$assigned] . '</ul>';
    }
?>
