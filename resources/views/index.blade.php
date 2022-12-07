@extends('layouts.app')


@section('content')
<img src="{{ asset('img/otaku_main.png') }}" class="main_img">
<div class="bg_bw">
    <div class="top_white1">株式会社おたくは</div>
    <div class="top_black1">各専門分野が集まった</div>
    <div class="top_black1">プロフェッショナルチームです</div>
    <img src="{{ asset('img/otaku_text.png') }}" class="otaku_text_img">
    <div class="otaku_text">
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
<div class="member">
    <h2 class="member-title">Member</h2>
    <div class="member-subtitle">/OTAKU CORE MEMBER</div>
    <div class="member-content">
        <div class="member_item">
            <dl class="member_item-row">
                <dt><span class="member_item-name">Tatsuo Umetani</span>
                <span class="member_item-position">CEO</span></dt>
                <dd class="member_item-desc">
                ARCHETYP Inc, LIG inc Phillipine での開発経て、I-ne IncでWeb Producerを担当。主にコーポレートブランディング やブランドサイト制作を担当。2019年ARUTEGA設立。CIの策定からデザイン・開発までを牽引。
            </dd>
        </div>
    </div>
</div>
    
<div class="profile">
    <h2 class="profile-title">Company Profile</h2>
    <div class="profile-subtitle">/ CURRENT BASE IN OSAKA.</div>
    <div class="profile-logo">OTAKU</div>
    <table class="profile-info"><tr class="profile-row">
        <th >Company</th><td ><span >株式会社おたく(OTAKU inc.)</span><span >(ARUTEGA Inc.)</span></td></tr>
        <tr class="profile-row"><th >Founder</th> <td >代表取締役 梅谷 達男</td></tr>
        <tr class="profile-row"><th >OFFICE</th> <td ><span >京都府京都市下京区富小路通六条下る栄町515番 NeOs 101</span></td></tr>
        <tr class="profile-row"><th >MAIL</th> <td ><span >info@arutega.jp</span></td></tr>
        <tr class="profile-row"><th >Capital</th> <td >9,000,000 円</td></tr>
        <tr class="profile-row"><th >Business</th> <td >WEBサイト制作<br>店舗運営</td>
        </tr>
    </table>

    <div class="strategy">
        <div class="strategy-paragraph">A RABBIT THAT </div>
        <div class="strategy-paragraph">NEVER SLEEPS <div class="strategy-paragraph-image"></div></div>
        <div class="strategy-paragraph"><div class="strategy-paragraph-image"></div> WON'T LOSE</div>
        <div class="strategy-paragraph">NO MATTER WHAT</div>
        <div class="strategy-paragraph">/ <span class="strategy-paragraph-text">眠らない兎は負けない</span></div>
        <p class="strategy-description">裏技、必殺技、抜け道。<br >
            魔法のようにあざやかに事業課題を解決できる手段は存在しません。<br >

            まずはしっかりヒアリングをします。いつも解決策は、すでに潜在しているからです。
            企業やブランドに存在しているけれど言語化されていないものを掘り起こし、従業員も理解・納得し、今の時代に合うように明文化していくことが大切だと考えます。
        </p>
    </div>
    <div class="profile-service_title">Service</div>
    <div class="profile-service_content">
        <ul class="service"><li class="service-item"><div class="service-item_num">01</div>
        <h3 class="service-item_subtitle">Creative Work</h3> <dl ><dt class="service-item_title">デザイン・開発</dt>
        <dd class="service-item_desc">web制作やデザインを起点に企業ステートメントやカルチャーを再定義し、売り上げと企業認知に貢献します。</dd></dl></li>
        <li class="service-item"><div class="service-item_num">02</div> <h3 class="service-item_subtitle">Eduction</h3> <dl ><dt class="service-item_title">教育支援</dt>
        <dd class="service-item_desc">事業会社のWeb部門の教育とマネジメントシステムの構築を行います。</dd></dl></li>
        <li class="service-item"><div class="service-item_num">03</div> <h3 class="service-item_subtitle">Social Good</h3>
        <dl ><dt class="service-item_title">心地よいもの</dt> <dd class="service-item_desc">人間にとっても、地球にとっても、動物にとっても心地いいものを作ります。</dd></dl></li>
        <li class="service-item"><div class="service-item_num">04</div> <h3 class="service-item_subtitle">Owned Media</h3>
        <dl ><dt class="service-item_title">メディア制作</dt> <dd class="service-item_desc">オウンドメディアで積み上げた知識をもとに、認知拡大を目的にした企画・改善・執筆を行います。</dd></dl></li></ul>
    </div>

</div>
@endsection


@section('content_sp')



@endsection