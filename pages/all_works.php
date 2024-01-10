<?php
    require_once('../php/function.php');
    require_once('../php/assocLib.php');
    require_once('../php/funcGenWeb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>all_works</title>

   <!-- AdobeFont -->
   <link rel="stylesheet" href="https://use.typekit.net/ixs5nmq.css">
   <!-- reset.css modern-css-reset・リセットcss記述 -->
   <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
   <link rel="stylesheet" href="../styles/font.css">
   <link rel="stylesheet" href="../styles/all_works.css">
   <link rel="stylesheet" href="../styles/menu.css">
   <link rel="stylesheet" href="../styles/style.css">
   <link rel="stylesheet" href="../styles/map-gradient.css">
   <link rel = "stylesheet" href="../styles/list_allworks.css"/>
   <link rel = "icon" href="../favicon.ico"/>
</head>

<header class="header">
   <div class="nav">
      <input id="drawer-input" class="drawer-hidden" type="checkbox">
      <label for="drawer-input" class="drawer-open"><span></span></label>

      <nav class="nav-content">
         <ul class="nav-list mb101pr5db-font">
            <li class="nav-item"><a href="../index.php">トップ</a></li>
            <li class="nav-item"><a href="../index.php#_CONCEPT">「ほどける」とは</a></li>
            <li class="nav-item"><a href="all_works.php">作品一覧</a></li>
            <li class="nav-item"><a href="map.html">フロアマップ</a></li>
            <li class="nav-item"><a href="../index.php#_ABOUT">開催概要</a></li>
            <li class="nav-item"><a href="../index.php#_ABOUT">アクセス</a></li>
            <li class="nav-item icon">
               <a href="" class="icon-instagram">
                  <img src="../assets/images/icon_instagram.png" alt="">
               </a>
               <a href="" class="icon-x">
                  <img src="../assets/images/icon_x.png" alt="">
               </a>
            </li>

            <div class="title-container menu-title">
               <img src="../assets/svg/title.svg" alt="Design Informatics Degree Show">
            </div>

            <p class="date menu-date futura-font">2024.1.12
               <span class="week">(Fri.)</span>-1.15
               <span class="week">(Mon.)</span>
            </p>
            <p class="time futura-font">9:00-17:00</p>
            <p class="free-entrance futura-font">入場無料</p>
            <p class="copyright mb101pr6n-font">©デザイン情報学科 卒業・修了制作展2024</p>
         </ul>

         <div class="main-visual-menu">
            <img src="../assets/images/main_visual_menu.png" alt="">
         </div>
      </nav>

   </div>
</header>

</div>
</div>


<!--ここからbody-->

<body>
   <!---デスクトップ-menu-->
   <div class="container">
      
      <nav class="menu-bar dazzle-font">
         <ul>
            <li><a href="../index.php">TOP</a></li>
            <li><a href="../index.php#_CONCEPT">CONCEPT</a></li>
            <li><a href="all_works.php">WORKS</a></li>
            <li><a href="map.html">MAP</a></li>
            <li><a href="../index.php#_ABOUT">ABOUT・ACCESS</a></li>
         </ul>
      </nav>


      <!--グラデーション背景部分 section-01---------------------------------------------------------->
      <div class="section-01">
         <div class="fade-in"></div>
         <div class="title_all_works">
            <h1>作品一覧</h1>
         </div>

         <!--検索・白い枠内-->
         <div class="sort-container">
            <img class="sort_buttom" src="../assets/images/all_works/sort_buttom.svg" alt="検索ボタン">

            <!--検索・ジャンル1「研究室」-->
            <div class="h2_title_wrapper">
               <h2 class="h2_title"><span class="h2_title_font">研究室</span></h2>
            </div>


            <!-- チェックボックス「研究室」-->
            <div class="checkbox">
               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label1" name="genre" data-value="ALL" class="ckbx_labo" onclick="_SEMI_ = 'ALL'; procedure_input();" checked>
                  <label class="btn" for="checkbox_filter_box_list_label1">ALL</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label2" name="genre" data-value="J佐藤ゼミ" class="ckbx_labo" onclick="_SEMI_ = 'J佐藤'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label2">J佐藤ゼミ</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label3" name="genre" data-value="白石ゼミ" class="ckbx_labo" onclick="_SEMI_ = '白石'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label3">白石ゼミ</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label4" name="genre" data-value="井上ゼミ" class="ckbx_labo" onclick="_SEMI_ = '井上'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label4">井上ゼミ</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label5" name="genre" data-value="高山ゼミ" class="ckbx_labo" onclick="_SEMI_ = '高山'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label5">高山ゼミ</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label6" name="genre" data-value="大石ゼミ" class="ckbx_labo" onclick="_SEMI_ = '大石'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label6">大石ゼミ</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label7" name="genre" data-value="新保ゼミ" class="ckbx_labo" onclick="_SEMI_ = '新保'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label7">新保ゼミ</label>
               </div>

            </div>

            <!--検索・ジャンル2「作品ジャンル」-->
            <div class="h2_title_wrapper">
               <h2 class="h2_title"><span class="h2_title_font">作品ジャンル</span></h2>
            </div>


            <!-- チェックボックス「作品ジャンル」-->
            <div class="checkbox">
               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label11" name="genre" data-value="ALL" class="ckbx_genre" onclick="_GENRE_ = 'ALL'; procedure_input();" checked>
                  <label class="btn" for="checkbox_filter_box_list_label11">ALL</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label12" name="genre" data-value="グラフィック" class="ckbx_genre" onclick="_GENRE_ = 'グラフィック'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label12">グラフィック</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label13" name="genre" data-value="写真" class="ckbx_genre" onclick="_GENRE_ = '写真'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label13">写真</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label14" name="genre" data-value="立体" class="ckbx_genre" onclick="_GENRE_ = '立体'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label14">立体</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label16" name="genre" data-value="映像" class="ckbx_genre" onclick="_GENRE_ = '映像'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label16">映像</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label15" name="genre" data-value="インスタレーション" class="ckbx_genre" onclick="_GENRE_ = 'インスタレーション'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label15">インスタレーション</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label17" name="genre" data-value="書籍" class="ckbx_genre" onclick="_GENRE_ = '書籍'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label17">書籍</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label18" name="genre" data-value="インタラクション" class="ckbx_genre" onclick="_GENRE_ = 'インタラクション'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label18">インタラクション</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label19" name="genre" data-value="WEB" class="ckbx_genre" onclick="_GENRE_ = 'WEB'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label19">WEB</label>
               </div>

               <div class="checkbox filter_box">
                  <input type="checkbox" id="checkbox_filter_box_list_label20" name="genre" data-value="調査・研究" class="ckbx_genre" onclick="_GENRE_ = '調査・研究'; procedure_input();">
                  <label class="btn" for="checkbox_filter_box_list_label20">調査・研究</label>
               </div>

            </div>


         </div>
         <!--検索・白いボックス・終了・「sort-container」-->
      </div>




      <!-- グレー背景部分・section02
      -->

      <div class="background2">

         <div class="h2_genre_title_wrapper">
            <h2 class="h2_genre_title"><span class="h2_genre_title_font">一覧</span></h2>
         </div>
         <?php createList_fromDatabase($GENRE_ASSOC, '../resources/'); ?>

<!--
         <ul class="work_list_wrapper">
            <li class="work_list_item">
               <img class="work_list_item_img" src="../assets/images/all_works/test-image.png">
               <p class="d_p_sub">どんなきもち？こんなきもち。</p>
               <p class="d_p_sub">吉田晴南</p>
            </li>


            <li class="work_list_item">
               <img class="work_list_item_img" src="../assets/images/all_works/test-image.png">
               <p class="d_p_sub">（作品タイトル）</p>
               <p class="d_p_sub">（作者名前）</p>
            </li>


            <li class="work_list_item">
               <img class="work_list_item_img" src="../assets/images/all_works/test-image.png">
               <p class="d_p_sub">（作品タイトル）</p>
               <p class="d_p_sub">（作者名前）</p>
            </li>


            <li class="work_list_item">
               <img class="work_list_item_img" src="../assets/images/all_works/test-image.png">
               <p class="d_p_sub">（作品タイトル）</p>
               <p class="d_p_sub">（作者名前）</p>
            </li>


            <li class="work_list_item">
               <img class="work_list_item_img" src="../assets/images/all_works/test-image.png">
               <p class="d_p_sub">（作品タイトル）</p>
               <p class="d_p_sub">（作者名前）</p>
            </li>
         </ul>
-->


      </div>


      <footer>
      <!--フッター（共通）------------------------------------------------------------------>
      <div class="footer_img"></div>

      <div class="insta">
         <a href="https://twitter.com/maudi_ds">
            <img src="../assets/images/instagram-fill.png"></a>
      </div>

      <div class="twitter">
         <a href="https://twitter.com/maudi_ds">
            <img src="../assets/images/xlogo.png"></a>
      </div>

      <div class="mauhp">
         <a href="https://dinfo.musabi.ac.jp/">
            <img src="../assets/images/mauhp.png"></a>
      </div>

      <div class="dejohp">
         <a href="https://www.musabi.ac.jp/">
            <img src="../assets/images/dejohp.png"></a>
      </div>
      </footer>


      <!-- JavaScript -->
      <script type="text/javascript" src="../scripts/all_works.js"></script>
      <script type="text/javascript" src="../scripts/common.js"></script>
      <script>
      let _SEMI_ = 'ALL';
      let _GENRE_ = 'ALL';
      
      function exclusiveckbx_each_func(elem){
          //console.log(elem, this);
          elem.checked = elem.dataset.value == this ? true : false;
      }
      
      function matching_data_each_func(elem){
          let _AND = 1;
          
          if(elem.dataset.semi != this[1][0] && this[1][0] != 'ALL') _AND *= 0;

          if(this[1][1] == 'グラフィック') this[1][1] = 'グラフィック|絵画';
          let _elem = elem.dataset.genre;
          let matched = _elem.match(this[1][1]);

          if(matched == null && this[1][1] != 'ALL') _AND *= 0;

          elem.style.display = _AND == 1 ? 'block' : 'none';

      }
      function list_hide_all(){
          let list = document.querySelectorAll('.list-thumb-elem');
          list.forEach(elem => {
              elem.style.display = 'none';
          });
      }
      function list_visible_data_matched(dataName, name){
          let list = document.querySelectorAll('.list-thumb-elem');
          let names = [dataName, name];
          list.forEach(matching_data_each_func, names);
      }
      function exclusive_ckbx(className, name){
          let ckbxs = document.querySelectorAll('.' + className);
          //console.log(ckbxs);
          ckbxs.forEach(exclusiveckbx_each_func, name);
      }
      function procedure_input(){
          let name = _SEMI_ == 'J佐藤' ? '佐藤' : _SEMI_;
          if(_SEMI_ != 'ALL'){
              exclusive_ckbx('ckbx_labo', _SEMI_+'ゼミ');
          }else{
              exclusive_ckbx('ckbx_labo', _SEMI_);
          }
          exclusive_ckbx('ckbx_genre', _GENRE_);
          list_hide_all();
          list_visible_data_matched(Array.of('semi', 'genre'), Array.of(name, _GENRE_));
      }
      </script>
</body>

</html>
