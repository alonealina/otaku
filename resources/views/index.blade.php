@extends('layouts.app')


@section('content')
<img src="{{ asset('img/otaku_main.png') }}" class="main_img" id="main_img">
<div class="bg_bw">
    <div class="top_white1" id="top_white1" style="color:#fff;top: calc(2.5vw + 40px);">株式会社おたくは</div>
    <div class="top_white1" id="top_white2">株式会社おたくは</div>
    <div class="top_black1" id="top_black1">各専門分野が集まった</div>
    <div class="top_black1" id="top_black2">プロフェッショナルチームです</div>
    <div class="otaku_big_text" id="big_text1">OTAKU WA SAIKYOU NANO DESU</div>

    <div class="otaku_text" id="otaku_text1">
        株式会社おたくとは。<br><br>
        2020年2月、世界最悪のパンデミックが起きました。<br>
        将来の日本をどのようにするべきか、各専門分野の有志が集まり、世界と戦えるチームが私達です。<br><br>
        未来の子供に日本をバトンタッチできるように、私たちは世界と戦い続けます。<br><br>
        創り、繋げて、伝えて、育てる。<br><br>
        その一連を私たちの使命と考えています。<br><br>
        What is Otaku,<br><br>
        Inc. In February 2020, the world's worst pandemic occurred.<br>
        We are a team of volunteers from various fields of expertise who are ready to fight the world to determine what Japan should be like in the future.<br><br>
        We will continue to fight the world so that we can pass the baton of Japan to the children of the future.
    </div>
</div>
<div id="member_border"></div>
<div class="member" id="member">
    <h2 class="member-title" id="member1">Member</h2>
    <div class="member-subtitle" id="member2">/OTAKU CORE MEMBER</div>
    <div class="member-content">
        <div class="member_item">
            <dl class="member_item-row">
                <dt><span class="member_item-name" id="member3">Tatsuo Umetani</span>
                <span class="member_item-position" id="member4">CEO</span></dt>
                <dd class="member_item-desc" id="member5">
                ARCHETYP Inc, LIG inc Phillipine での開発経て、I-ne IncでWeb Producerを担当。主にコーポレートブランディング やブランドサイト制作を担当。2019年ARUTEGA設立。CIの策定からデザイン・開発までを牽引。
            </dd>
        </div>
    </div>
</div>
    
<div id="profile_border"></div>
<div class="profile" id="company">
    <h2 class="profile-title" id="profile1">Company Profile</h2>
    <div class="profile-subtitle" id="profile2">/ CURRENT BASE IN OSAKA.</div>
    <div class="profile-logo" id="profile3">OTAKU</div>
    <table class="profile-info">
        <tr id="row1" class="profile-row"><th>Company</th><td ><span >株式会社おたく(OTAKU inc.)</span><span >(ARUTEGA Inc.)</span></td></tr>
        <tr id="row2" class="profile-row"><th >Founder</th> <td >代表取締役 梅谷 達男</td></tr>
        <tr id="row3" class="profile-row"><th >OFFICE</th> <td ><span >京都府京都市下京区富小路通六条下る栄町515番 NeOs 101</span></td></tr>
        <tr id="row4" class="profile-row"><th >MAIL</th> <td ><span >info@arutega.jp</span></td></tr>
        <tr id="row5" class="profile-row"><th >Capital</th> <td >9,000,000 円</td></tr>
        <tr id="row6" class="profile-row"><th >Business</th> <td >WEBサイト制作<br>店舗運営</td>
        </tr>
    </table>

    <div class="strategy">
        <div class="strategy-paragraph"><span class="st_text" id="st_text1">A RABBIT THAT </span></div>
        <div class="strategy-paragraph"><span class="st_text" id="st_text2">NEVER SLEEPS </span><div class="strategy-paragraph-image" id="st_img1" style="float: right; top: 10px; position: relative;"></div></div>
        <div class="strategy-paragraph"><div class="strategy-paragraph-image" id="st_img2"></div><span class="st_text" id="st_text3"> WON'T LOSE</span></div>
        <div class="strategy-paragraph"><span class="st_text" id="st_text4">NO MATTER WHAT</span></div>
        <div class="strategy-paragraph st_text" id="st_text5">/ <span class="strategy-paragraph-text" id="st_text6">眠らない兎は負けない</span></div>
        <p class="strategy-description" id="st_text7">裏技、必殺技、抜け道。<br>
        魔法のようにあざやかに課題を解決できる方法は一切存在しません。<br>
        まずはしっか分解、分析をします。いつも解決策は、課題の中にあるからです。<br>
        事業を 分解し、すべてを分析し、言語化されていないものを掘り起こし、従業員も理解・納得し、<br>
        今の時代に合うように明文化していくことが大切だと考えます。
        </p>
    </div>
    <div class="profile-service_title" id="sv_title">Service</div>
    <div class="profile-service_content">
        <ul class="service">
            <li class="service-item"><div class="sv_border" id="sv_border1"></div><div class="service-item_num" id="sv_num1">01</div>
            <div class="sv_text" id="sv_text1"><h3 class="service-item_subtitle">Product Work</h3> <dl ><dt class="service-item_title">プロダクトデザイン・開発</dt>
            <dd class="service-item_desc">オリジナルアイテムをデザインから納品まで一気通貫で制作いたします。</dd></dl></div></li>
            <li class="service-item"><div class="sv_border" id="sv_border2"></div><div class="service-item_num" id="sv_num2">02</div> 
            <div class="sv_text" id="sv_text2"><h3 class="service-item_subtitle">Creative Work</h3> <dl ><dt class="service-item_title">デザイン・開発</dt>
            <dd class="service-item_desc">webデザイン、制作を企業のスタイル</dd></dl></div></li>
            <li class="service-item"><div class="sv_border" id="sv_border3"></div><div class="service-item_num" id="sv_num3">03</div>
            <div class="sv_text" id="sv_text3"><h3 class="service-item_subtitle">Owned Media</h3>
            <dl ><dt class="service-item_title">建築・内装</dt> <dd class="service-item_desc">人間にとっても、地球にとっても、動物にとっても心地いいものを作ります。</dd></dl></div></li>
            <li class="service-item"><div class="sv_border" id="sv_border4"></div><div class="service-item_num" id="sv_num4">04</div>
            <div class="sv_text" id="sv_text4"><h3 class="service-item_subtitle">Store Operation</h3>
            <dl ><dt class="service-item_title">店舗運営</dt> <dd class="service-item_desc">店舗の仕入、運営、卸まで一気通貫で行っています。</dd></dl></div></li>
        </ul>
    </div>
</div>

<div id="work_border1"></div>
<section class="latestwork" id="work">
    <h2 class="profile-title ">Creative Work</h2> 
    <div class="member-subtitle">/ PICK UP CASE STUDY</div> 
    <ul class="latestwork-lists latestwork_content">
        <li class="latestwork-list" id="work_content"><a href="{{ route('work') }}" class="coffee_a"><p class="latestwork-list-project">兎珈琲</p></a>
        <a href="{{ route('work') }}" class="circle_a"><div class="latestwork-list-link"><div class="circle-link circle-link-domestic"><div class="circle-link-circle"></div>
        <span class="circle-link-text">View More</span></div></div></a></li>
        <div id="work_border2"></div>
    </ul>
</section>

@endsection


@section('content_sp')



@endsection