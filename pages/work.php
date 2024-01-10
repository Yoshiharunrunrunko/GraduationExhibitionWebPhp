<?php
require_once('../php/function.php');
require_once('../php/assocLib.php');

//read data from ID
$conn = connectDatabase('g23_exhi', null, null, 'g23_exhi', null);
if(!$conn){
    echo "データベースが開けませんでした\n" . pg_last_error();
}
/* read id */
$DB_WORK_SET = readDataAssoc_fromIDHash($conn, 'g23_data', 'workset_data', $_GET['i']);
$ID = $DB_WORK_SET['id'];
//data
$DB_STUDENT = readDataAssoc_fromID($conn, 'g23_data', 'student_data', $ID);
$DB_WORK_ENTERED = readDataAssoc_fromID($conn, 'g23_data', 'workenter_data', $ID);
$DB_WORK_SET = readDataAssoc_fromID($conn, 'g23_data', 'workset_data', $ID);
$DB_IMG = readDataAssoc_fromID($conn, 'g23_data', 'img_data', $ID);
$_w = $_GET['w'] == '1' ? '' : $_GET['w'];


//close connect
pg_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>works</title>

   <!-- AdobeFont -->
   <link rel="stylesheet" href="https://use.typekit.net/ixs5nmq.css">
   <!-- reset.css modern-css-reset・リセットcss記述 -->
   <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
   <link rel="stylesheet" href="../styles/font.css">
   <link rel="stylesheet" href="../styles/works.css">
   <link rel="stylesheet" href="../styles/menu.css">
   <link rel="stylesheet" href="../styles/style.css">
   <link rel="stylesheet" href="../styles/map-gradient.css">
   <!-- slick -->
   <link rel="stylesheet" href="../slick/slick.css">
   <link rel="stylesheet" href="../slick/slick-theme.css">

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


      <!--グラデーション背景部分 section-01
      -->
      <div class="section-01">
         <div class="fade-in"></div>
         <div class="backlink_wrapper">
            <a href="all_works.php" class="arrow_left"></a>
            <p class="btn"><a href="all_works.php">作品一覧へ戻る</a></p>
         </div>

         <!--白色・濃度80%部分
         -->
         <div class="work_wrapper">
            <h1><?php echo $DB_WORK_SET['title'.$_w]; ?></h1>
               <p><?php if($DB_WORK_SET['subtitle'.$_w] != 'false')echo $DB_WORK_SET['subtitle'.$_w]; ?></p>

               <!--スライドショー（slick）
               -->
               <ul class="slide-items">
                  <?php if($DB_IMG['imgwork'.$_w.'1'] != null) echo '<li><img src="../resources/img/work/'.$DB_IMG['imgwork'.$_w.'1'].'" alt=""></li>'; ?>
                  <?php if($DB_IMG['imgwork'.$_w.'2'] != null) echo '<li><img src="../resources/img/work/'.$DB_IMG['imgwork'.$_w.'2'].'" alt=""></li>'; ?>
                  <?php if($DB_IMG['imgwork'.$_w.'3'] != null) echo '<li><img src="../resources/img/work/'.$DB_IMG['imgwork'.$_w.'3'].'" alt=""></li>'; ?>
                  <?php if($DB_IMG['imgwork'.$_w.'4'] != null) echo '<li><img src="../resources/img/work/'.$DB_IMG['imgwork'.$_w.'4'].'" alt=""></li>'; ?>
               </ul>

               <p class="works_introduction_p">
                   <p><?php echo $DB_WORK_ENTERED['description'.$_w]; ?></p>
               </p>

               <div class="tag_section">
                  <div class="h2_genre_title_wrapper">
                     <h2 class="h2_genre_title"><span class="h2_genre_title_font">所属ゼミ</span></h2>
                  </div>
                  <p><?php echo $DB_STUDENT['seminar']; ?>ゼミ</p>
               </div>

               <div class="tag_section">
                  <div class="h2_genre_title_wrapper">
                     <h2 class="h2_genre_title"><span class="h2_genre_title_font">ジャンル</span></h2>
                  </div>
                  <ul>
                  <?php
                  for($i = 1; $i < 5; $i++){
                      if($DB_WORK_ENTERED['genre'.$_w.$i] != ''){
                          $genre = substr($DB_WORK_ENTERED['genre'.$_w.$i], 3);
                          if($i != 1 && $genre != 'n_None') echo ' / ';
                          if($genre != 'n_None') echo $GENRE_ASSOC[$genre];
                      }
                  }
                  ?>
                  </ul>
               </div>

               <div class="tag_section">
                  <div class="h2_genre_title_wrapper">
                     <h2 class="h2_genre_title"><span class="h2_genre_title_font">展示場所</span></h2>
                  </div>
                  <p class=""><?php echo $DB_WORK_SET['exhibplace']; ?></p>
                  <img src="../resources/map/<?php echo $PLACE_ASSOC[$DB_WORK_SET['exhibplace']] ?>.png">
               </div>

               <div class="tag_section">
                  <div class="h2_genre_title_wrapper">
                     <h2 class="h2_genre_title"><span class="h2_genre_title_font">作者</span></h2>
                  </div>
                  <p class=""><?php echo $DB_STUDENT['namefamilyjp'].' '.$DB_STUDENT['namefirstjp']; ?></p>
                  <?php if($DB_IMG['imgicon'] != null) echo '<img style="width:10rem; aspect-ratio: 1; object-fit: cover;" src="../resources/img/icon/'.$DB_IMG['imgicon'].'">'; ?>

                  <p class="tag_section_author_introduction">
                     <?php echo $DB_STUDENT['introduction']; ?></p>
                  <?php if($DB_STUDENT['linkurl'] != null) echo '<p class="tag_section_author_introduction"><a href = "'.$DB_STUDENT['linkurl'].'" style="text-decoration: underline;">作者のブログ・SNS</a></p>'; ?>

               </div>








         </div>
      </div>





      <!--グレー背景部分・section02--------------------------------------------------------------------->
      <div class="background2">


      </div>




      <!--フッター（共通）------------------------------------------------------------------->
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

      <!-- js -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript"  src="../slick/slick.min.js"></script>
      <script type="text/javascript"  src="../scripts/works.js"></script>
      <script type="text/javascript" src="../scripts/common.js"></script>

</body>

</html>
