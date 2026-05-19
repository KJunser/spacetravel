<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Travel</title>
    <link rel="stylesheet" href="flexSlider/flexslider.css">
    <link rel="stylesheet" href="css/flex-slider.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="flexSlider/jquery.flexslider.js"></script>
    <script src="js/common.js"></script>
    <script>
        $(function(){
            $('.flexslider').flexslider({
                animation: 'slide'
            });
        });
    </script>
</head>
<body>
    <header>
        <nav>
            <a href="index.html"><img src="imgs/logo.png" alt="로고"></a>
            <a href="" id="trigger">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <ul id="main-menu">
                <li><a href="">소 개</a></li>
                <li>
                    <a href="">우주여행안내</a>
                    <ul class="sub-menu">
                        <li><a href="">금성 여행</a></li>
                        <li><a href="">화성 여행</a></li>
                        <li><a href="">토성 여행</a></li>
                        <li><a href="">목성 여행</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">별자리</a>
                    <ul class="sub-menu">
                        <li><a href="">별자리 이야기</a></li>
                        <li><a href="">계절별 별자리</a></li>
                    </ul>
                </li>
                <li><a href="">별마루 천문대</a></li>
            </ul>

            <ul class="top-menu">
                <li><a href=""><span>로그인</span><i class="bi bi-person-check-fill"></i></a></li>
                <li><a href=""><span>회원가입</span><i class="bi bi-person-plus-fill"></i></a></li>
            </ul>
        </nav>
    </header>