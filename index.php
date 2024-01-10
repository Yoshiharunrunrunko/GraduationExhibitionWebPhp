<?php
    require_once('php/function.php');
    require_once('php/assocLib.php');
    
    function imgCarousel(){
        $rsrcRoot = 'resources/';
        //read data from ID
        $conn = connectDatabase('g23_exhi', null, null, 'g23_exhi', null);
    
        $tableStudents = readDataAssoc_All($conn, 'g23_data', 'img_data', 'id');
        $shuffleStudents = shuffle($tableStudents);
        $count = 0;
        foreach($tableStudents as $keyrow => $id){
            if($count < 10 && $id['imgthumb'] != null){
                echo '<img style="object-fit: cover; border-radius: 2rem;" src="'.$rsrcRoot.'img/work_thumb/'.$id['imgthumb'].'">';
                $count += 1;
            }
        }
        //close connect
        pg_close($conn);
    }
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>武蔵野美術大学デザイン情報学科 卒業・修了制作展2023</title>

    <!-- AdobeFont -->
    <link rel="stylesheet" href="https://use.typekit.net/ixs5nmq.css">
    <!-- reset.css modern-css-reset・リセットcss記述 -->
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
    <!-- slick.css -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/font.css">
    <link rel="stylesheet" href="styles/gradient.css">

    <!-- GoogleMapApi -->
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdBYWAB7LNjCFCoVrVz65kP_5t9RyRFBs&callback=console.debug&libraries=maps,marker&v=beta">
        </script>


</head>

<header class="header">
    <div class="nav">
        <input id="drawer-input" class="drawer-hidden" type="checkbox">
        <label for="drawer-input" class="drawer-open"><span></span></label>

        <nav class="nav-content">
            <ul class="nav-list mb101pr5db-font">
                <li class="nav-item"><a href="index.php">トップ</a></li>
                <li class="nav-item"><a href="#_CONCEPT">「ほどける」とは</a></li>
                <li class="nav-item"><a href="pages/all_works.php">作品一覧</a></li>
                <li class="nav-item"><a href="pages/map.html">フロアマップ</a></li>
                <li class="nav-item"><a href="#_ABOUT">開催概要</a></li>
                <li class="nav-item"><a href="#_ABOUT">アクセス</a></li>
                <li class="nav-item icon">
                    <a href="" class="icon-instagram">
                        <img src="assets/images/icon_instagram.png" alt="">
                    </a>
                    <a href="" class="icon-x">
                        <img src="assets/images/icon_x.png" alt="">
                    </a>
                </li>

                <div class="title-container menu-title">
                    <img src="assets/svg/title.svg" alt="Design Informatics Degree Show">
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
                <img src="assets/images/main_visual_menu.png" alt="">
            </div>
        </nav>

    </div>
</header>

<body>
    <div class="container touch-action">

        <nav class="menu-bar dazzle-font" id="menu_bar">
            <ul>
                <li><a href="index.php">TOP</a></li>
                <li><a href="#_CONCEPT">CONCEPT</a></li>
                <li><a href="#_WORKS">WORKS</a></li>
                <li><a href="#_MAP">MAP</a></li>
                <li><a href="#_ABOUT">ABOUT・ACCESS</a></li>
            </ul>
        </nav>

        <div class="section section-01">
            <div class="fade-in"></div>
            <div class="main-container container-margin">
                <div class="title-container">
                    <img src="assets/svg/title.svg" alt="Design Informatics Degree Show">
                </div>
                <div class="visual-container">
                    <img src="assets/images/main_visual.png" alt="Main Visual">
                </div>
            </div>
            <div class="date futura-font">2024.1.12
                <span class="week">(Fri.)</span>-1.15
                <span class="week">(Mon.)</span>
            </div>
        </div>

        <div class="section section-02" id="_CONCEPT">
            <div class="main-container container-margin">
                <div class="text-container">
                    <h1>「ほどける」とは</h1>
                    <p class="content">
                        私たちは、ほどく必要がありました。<br>
                        流行病による制限を、人との隔たりを、固く絡まっていた繭を。<br>
                        元通りの日常と、それ以上の未来を創るために。<br>
                        <br>
                        ほどけることでかたちづくられた、デザイン情報学科22期生の卒業・修了制作展をどうぞご覧ください。
                    </p>
                </div>
                <div class="visual-container">
                    <img src="assets/images/main_visual.png" alt="Main Visual">
                </div>
            </div>
        </div>

        <div class="section section-03">
            <img src="assets/images/rings/ring_desktop_01.png" alt="" class="ring ring-desktop ring-01">
            <img src="assets/images/rings/ring_desktop_02.png" alt="" class="ring ring-desktop ring-02">
            <img src="assets/images/rings/ring_mobile_01.png" alt="" class="ring ring-mobile ring-01">
            <img src="assets/images/rings/ring_mobile_02.png" alt="" class="ring ring-mobile ring-02">

            <h1 class="section-title">教授紹介</h1>

            <div class="professors-container">
                <div class="professor professor-01">
                    <picture>
                        <source srcset="assets/images/photos/sato_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/sato_desktop.png" alt="SATO Junichi" class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>佐藤&#12288;淳一</h2>
                            <p class="alphabet">SATO Junichi</p>
                        </div>
                        <p class="text-desktop">マルチメディア<br>
                            フォトグラフィ</p>
                        <p class="text-mobile">マルチメディア・フォトグラフィ</p>
                    </div>
                </div>
                <div class="professor professor-02">
                    <picture>
                        <source srcset="assets/images/photos/shiraishi_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/shiraishi_desktop.png" alt="SHIRAISHI Manabu"
                            class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>白石&#12288;学</h2>
                            <p class="alphabet">SHIRAISHI Manabu</p>
                        </div>
                        <p class="text-desktop">マルチメディアデザイン<br>
                            デザイン情報学</p>
                        <p class="text-mobile">マルチメディアデザイン・デザイン情報学</p>
                    </div>
                </div>
                <div class="professor professor-03">
                    <picture>
                        <source srcset="assets/images/photos/inoue_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/inoue_desktop.png" alt="INOUE Shoji" class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>井上&#12288;尚司</h2>
                            <p class="alphabet">INOUE Shoji</p>
                        </div>
                        <p class="text-desktop">情報科学<br>
                            情報ネットワーク<br>
                            マルチメディア</p>
                        <p class="text-mobile">情報科学・情報ネットワーク・マルチメディア</p>
                    </div>
                </div>
                <div class="professor professor-04">
                    <picture>
                        <source srcset="assets/images/photos/takayama_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/takayama_desktop.png" alt="TAKAYAMA Joe" class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>高山&#12288;譲</h2>
                            <p class="alphabet">TAKAYAMA Joe</p>
                        </div>
                        <p class="text-desktop">コンピュータグラフィックス</p>
                        <p class="text-mobile">コンピュータグラフィックス</p>
                    </div>
                </div>
                <div class="professor professor-05">
                    <picture>
                        <source srcset="assets/images/photos/oishi_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/oishi_desktop.png" alt="OISHI Hiroaki" class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>大石&#12288;啓明</h2>
                            <p class="alphabet">OISHI Hiroaki</p>
                        </div>
                        <p class="text-desktop">デジタルアート<br>
                            コンピュータグラフィックス</p>
                        <p class="text-mobile">デジタルアート・コンピュータグラフィックス</p>
                    </div>
                </div>
                <div class="professor professor-06">
                    <picture>
                        <source srcset="assets/images/photos/shimbo_mobile.png" media="(max-width: 1024px)">
                        <img src="assets/images/photos/shimbo_desktop.png" alt="SHIMBO Inka" class="professor-img">
                    </picture>
                    <div class="professor-info">
                        <div class="professor-name">
                            <h2>新保&#12288;韻香</h2>
                            <p class="alphabet">SHIMBO Inka</p>
                        </div>
                        <p class="text-desktop">グラフィックデザイン<br>
                            タイポグラフィ</p>
                        <p class="text-mobile">グラフィックデザイン・タイポグラフィ</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-04" id="_WORKS">
            <img src="assets/images/rings/ring_desktop_03.png" alt="" class="ring ring-desktop ring-03">
            <img src="assets/images/rings/ring_desktop_04.png" alt="" class="ring ring-desktop ring-04">
            <img src="assets/images/rings/ring_mobile_03.png" alt="" class="ring ring-mobile ring-03">
            <img src="assets/images/rings/ring_mobile_04.png" alt="" class="ring ring-mobile ring-04">

            <div class="main-container container-desktop">
                <div class="text-container-04">
                    <h1>作品一覧</h1>
                    <p class="content">
                        武蔵野美術大学デザイン情報学科卒業・修了研究制作展2023で展示されている作品一覧です。<br>
                        ジャンルや担当教員、タグから絞り込んで作品を見ることができます。
                    </p>
                    <div class="link">
                        <p class="btn"><a href="pages/all_works.php">作品一覧へ</a></p>
                        <img src="assets/images/external_link.png" alt="">
                    </div>
                </div>
                <div id="carousel" class="carousel">
                    <?php imgCarousel(); ?>
                </div>
            </div>

            <div class="main-container container-mobile">
                <div class="text-container-04">
                    <h1>作品一覧</h1>
                </div>
                <div id="carousel" class="carousel">
                    <?php imgCarousel(); ?>
                </div>
                <div class="text-container-04">
                    <p class="content">
                        武蔵野美術大学デザイン情報学科卒業・修了研究制作展2023で展示されている作品一覧です。<br>
                        ジャンルや担当教員、タグから絞り込んで作品を見ることができます。
                    </p>
                    <div class="link">
                        <div class="link-container">
                            <p class="btn"><a href="pages/all_works.php">作品一覧へ</a></p>
                            <img src="assets/images/external_link.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-05" id="_MAP">
            <img src="assets/images/rings/ring_desktop_05.png" alt="" class="ring ring-desktop ring-05">
            <img src="assets/images/rings/ring_desktop_06.png" alt="" class="ring ring-desktop ring-06">
            <img src="assets/images/rings/ring_mobile_05.png" alt="" class="ring ring-mobile ring-05">
            <img src="assets/images/rings/ring_mobile_06.png" alt="" class="ring ring-mobile ring-06">

            <div class="main-container map-desktop">
                <div class="map-container">
                    <img src="assets/images/map/map.svg" alt="Map">
                </div>
                <div class="link map-link">
                    <p class="btn"><a href="pages/map.html">フロアマップはこちら</a></p>
                    <img src="assets/images/external_link.png" alt="">
                </div>
            </div>

            <div class="main-container map-mobile">
                <div class="text-container-05">
                    <h1>キャンパスマップ</h1>
                </div>
                <div class="map-container">
                    <img src="assets/images/map/map.svg" alt="Map">
                </div>
                <div class="link map-link">
                    <div class="link-container-05">
                        <p class="btn"><a href="pages/map.html">フロアマップはこちら</a></p>
                        <img src="assets/images/external_link.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-06" id="_ABOUT">
            <img src="assets/images/rings/ring_desktop_07.png" alt="" class="ring ring-desktop ring-07">
            <img src="assets/images/rings/ring_desktop_08.png" alt="" class="ring ring-desktop ring-08">
            <img src="assets/images/rings/ring_mobile_07.png" alt="" class="ring ring-mobile ring-07">
            <img src="assets/images/rings/ring_mobile_08.png" alt="" class="ring ring-mobile ring-08">

            <div class="main-container container-desktop-06">
                <div class="text-container-04">
                    <h1>開催概要</h1>
                    <p class="content">
                    <h2>開催日時</h2>
                    <p>2024.1.12(金)~1.15(月)<br>
                        9:00〜17:00<br></p>
                    <h2 class="place">会場場所</h2>
                    <p>武蔵野美術大学 鷹の台キャンパス<br>
                        〒187-8505 東京都小平市小川町1-736<br>
                    </p>
                    </p>
                    <div class="link">
                        <p class="btn">Google Mapで確認する</p>
                        <img src="assets/images/external_link.png" alt="">
                    </div>
                </div>

                <gmp-map center="35.726356506347656,139.44696044921875" zoom="16" map-id="1d3c518a0162f306" id="map"
                    class="google-map">
                    <gmp-advanced-marker position="35.726356506347656,139.44696044921875" title="My location">
                    </gmp-advanced-marker>
                </gmp-map>
            </div>

            <div class="main-container container-mobile">
                <div class="text-container-04">
                    <h1>開催概要</h1>
                </div>
                <gmp-map center="35.726356506347656,139.44696044921875" zoom="16" map-id="1d3c518a0162f306" id="map"
                    class="google-map">
                    <gmp-advanced-marker position="35.726356506347656,139.44696044921875" title="My location">
                    </gmp-advanced-marker>
                </gmp-map>

                <div class="text-container-04">
                    <p class="content">
                    <h2>開催日時</h2>
                    <p>2024.1.12(金)~1.15(月)<br>
                        9:00〜17:00<br></p>
                    <h2 class="place">会場場所</h2>
                    <p>武蔵野美術大学 鷹の台キャンパス<br>
                        〒187-8505 東京都小平市小川町1-736<br>
                    </p>
                    </p>
                    <div class="link googlemap-link">
                        <div class="link-container">
                            <p class="btn">Google Mapで確認する</p>
                            <img src="assets/images/external_link.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section section-07">
            <img src="assets/images/rings/ring_desktop_09.png" alt="" class="ring ring-desktop ring-09">
            <img src="assets/images/rings/ring_mobile_09.png" alt="" class="ring ring-mobile ring-09">

            <div class="main-container container-desktop-07">
                <div class="text-container-04">
                    <h1>アクセス</h1>
                    <p class="subtitle text-margin-07">
                        <img src="assets/images/icon_bus.png" alt="">
                    <h2 class="text-margin-07">駅からバスでお越しの方</h2>
                    </p>
                    <p class="text-margin-07">JR中央線 国分寺駅<br>
                        国分寺駅北口4番停留所より<br>
                        西武バス「武蔵野美術大学」行に乗車<br>
                        バス所要時間約25分<br><br>
                        JR中央線 立川駅<br>
                        立川駅北口5番停留所より<br>
                        立川バス「武蔵野美術大学」行に乗車<br>
                        バス所要時間約25分<br>
                    </p>
                    <p class="subtitle text-margin-07">
                        <img src="assets/images/icon_walk.png" alt="">
                    <h2 class="text-margin-07">駅から徒歩でお越しの方</h2>
                    </p>
                    <p class="text-margin-07">西武国分寺線「鷹の台駅」下車、玉川上水<br>
                        沿いに徒歩約20分
                    </p>

                    <div class="link">
                        <p class="btn">来場時の注意事項</p>
                        <img src="assets/images/external_link.png" alt="">
                    </div>

                </div>
                <div class="fake-div"></div>
            </div>

            <div class="main-container container-mobile-07">
                <div class="text-container-04">
                    <h1 class="main-title">アクセス</h1>
                    <p class="subtitle">
                        <img src="assets/images/icon_bus.png" alt="">
                        <h2 class="text-margin-07">駅からバスでお越しの方</h2>
                    </p>
                    <p class="text-margin-07">JR中央線 国分寺駅<br>
                        国分寺駅北口4番停留所より<br>
                        西武バス「武蔵野美術大学」行に乗車<br>
                        バス所要時間約25分<br><br>
                        JR中央線 立川駅<br>
                        立川駅北口5番停留所より<br>
                        立川バス「武蔵野美術大学」行に乗車<br>
                        バス所要時間約25分<br>
                    </p>
                    <p class="subtitle place">
                        <img src="assets/images/icon_walk.png" alt="">
                        <h2 class="text-margin-07">駅から徒歩でお越しの方</h2>
                    </p>
                    <p class="text-margin-07">西武国分寺線「鷹の台駅」下車、玉川上水<br>
                        沿いに徒歩約20分
                    </p>

                    <div class="link access-link">
                        <div class="link-container">
                            <p class="btn">来場時の注意事項</p>
                            <img src="assets/images/external_link.png" alt="">
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="section section-08">
            <div class="mask"></div>
            <div class="footer-icon">
                <a href="" class="icon-instagram">
                    <img src="assets/images/icon_instagram.png" alt="">
                </a>
                <a href="" class="icon-x">
                    <img src="assets/images/icon_x.png" alt="">
                </a>
            </div>

            <div class="footer-link footer-link-01">
                <p class="btn">武蔵野美術大学HP</p>
                <img src="assets/images/external_link.png" alt="">
            </div>
            <div class="footer-link">
                <p class="btn">デザイン情報学科HP</p>
                <img src="assets/images/external_link.png" alt="">
            </div>

            <div class="main-container footer-container">
                <div class="title-container title-container-08">
                    <img src="assets/svg/title-footer.svg" alt="Design Informatics Degree Show">
                </div>
                <div class="visual-container"></div>
            </div>
            <p class="footer-copyright mb101pr6n-font">©デザイン情報学科 卒業・修了制作展2024</p>
        </div>
        
        <!-- slick.js -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <!-- JavaScript -->
        <script type="text/javascript" src="scripts/script.js"></script>
        <script type="text/javascript" src="scripts/common.js"></script>
        <script type="text/javascript" src="scripts/carousel.js"></script>
</body>

</html>
