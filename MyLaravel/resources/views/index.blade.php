@extends('layouts.portfolio')

<!--#################　head　#################-->
@section('head')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../src/portfolio/K_logo.png" type="image/x-icon">
<title>神﨑幸逸 ポートフォリオサイト</title>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/style.css" />
@endsection

@section('javascript')
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
@endsection

<!--#################　header　#################-->
@section('header')
<div class="col-12" id="header-color">
    <div class="col-sm-12 text-center siteTitle">
        <h4>Kanzaki Kouichi<br>Portfolio site</h4>
    </div>
    <div class="row m-3" id="LinkBotton">
        <div class="col-12">
            <div class="dropdown">
                <button class="btn-sm dropdown-toggle"
                    id="dropdown1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    MENU</button>
                <div class="dropdown-menu" aria-labelledby="dropdown1">
                    <button class="dropdown-item" id="puldown_works">Works</button>
                    <button class="dropdown-item" id="puldown_request">Request</button>
                    <button class="dropdown-item" id="puldown_skill">Skill</button>
                    <button class="dropdown-item" id="puldown_contact">Contact</button>
                    <button class="dropdown-item" id="puldown_bulletin">
                        <a id="BulletinLinkButton" href="./bulletin">Bulletin</a>
                    </button>
                    <button class="dropdown-item" id="puldown_other">Other</button>
                </div>
            </div>
        </div>
    </div>
    <div id="navHidden">
        <ul class="nav nav-fill">
            <li class="nav-item text-center">
                <a class="nav-link" href="#works">Works</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#request">Request</a>
            </li>
            <li class="nav-item text-center ">
                <a class="nav-link" href="#skill">Skill</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="./bulletin">Bulletin</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="#">Other</a>
            </li>
        </ul>
    </div>
</div>
@endsection

<!--#################　works　#################-->
@section('works')
<h2 class="text-primary">Works</h2>
<div class="works-left">
    <a href="../../home.html" target="_blank">
    	<img src="../src/portfolio/top_img.png" alt="TOPページ">
    </a>
</div>
<div class="works-right">
    <table>
        <tr>
            <th>制作期間</th>
            <td>6カ月 (企画/設計/実装) </td>
        </tr>
        <tr>
            <th>ブラウザ</th>
            <td>Google Chrome ,Firefox</td>
        </tr>
        <tr>
            <th>画面サイズ</th>
            <td>1920×1080</td>
        </tr>
        <tr>
            <th>レスポンシブ</th>
            <td>全ページ対応</td>
        </tr>
        <tr>
            <th>企画書</th>
            <td>
            	<a href="../src/portfolio/kikakusyo.pdf" target="_blank">企画書はこちら(PDF)</a>
            </td>
        </tr>
        <tr>
            <th>作品URL</th>
            <td>
            	<a href="home.html" target="_blank">http://kouichi-kanzaki.main.jp/home.html</a>
            </td>
        </tr>
        <tr>
            <th>ソースコードURL</th>
            <td>
                <a href="https://github.com/KouichiKanzaki/WORKS" target="_blank">https://github.com/KouichiKanzaki/WORKS</a>
            </td>
        </tr>
    </table>
</div>
@endsection

<!--#################　request　#################-->
@section('request')
<h2 class="text-primary">Request</h2>
<div id="requestContents">
    <h1>依頼内容</h1>
    <p> 訪日外国人観光客が増えている中、宿泊施設の不足が懸念されている。<br>
      そこで、簡易宿泊施設に目を付けゲストハウスを増設する計画を立てる。<br>
      箱根のゲストハウスを紹介しつつ周りの観光スポット、宿坊体験を紹介し<br>
      観光客を増やすサイトの制作。 </p>
</div>
<div id="imageColor">
    <h1>イメージカラー</h1>
    <div class="wrap-img">
        <div id="img-color1"> </div>
        <div class="img-sen">
            <p>木欄色もくらんじき(#c7b370) お寺僧侶の袈裟の色の一つ。</p>
        </div>
    </div>
    <div class="wrap-img">
        <div id="img-color2"> </div>
        <div class="img-sen">
            <p>新緑色しんりょくしょく(#00ff7f) 箱根の自然を表現した色。</p>
        </div>
    </div>
    <div class="wrap-img">
        <div id="img-color3"> </div>
        <div class="img-sen">
            <p>乳白色 (#f3f3f3) 箱根温泉の湯をイメージした色。</p>
        </div>
    </div>
</div>
@endsection

<!--#################　skill　#################-->
@section('skill')
<h2 class="text-primary">Skill</h2>
<div id="skill-tool">
    <img src="../src/portfolio/tool.png" alt="ツール">
</div>
<div id="skill-language">
    <img src="../src/portfolio/language.png" alt="言語">
</div>
@endsection

<!--#################　contact　#################-->
@section('contact')
<h2 class="text-primary">Contact</h2>
<div>
    <p>お問い合わせ・ご用件のある方は、下記までご連絡お願い致します。</p>
    <p>
        <img src="../src/portfolio/mail_icon.jpg" alt="E-mail">
        <a href="mailto:likfsm4@gmail.com">likfsm4@gmail.com</a>
    </p>
</div>
@endsection
