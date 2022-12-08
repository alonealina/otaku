@extends('layouts.app')

@section('content')
<div class="page_title_div">
    <div class="page_title">CONTACT</div>
</div>

<div class="mail_comp_div">
    お問い合わせありがとうございます。<br>
    返信が届くまでしばらくお待ちください。
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/contact.js') }}"></script>


@endsection


@section('content_sp')
<img src="{{ asset('img/company.png') }}" style="width: 100%;" alt="">
<div class="contact_div_sp">
    <div class="page_title" style="margin-bottom:30px;">CONTACT</div>

    <div class="contact_name">name</div>
    <input class="form_text_sp" placeholder="" name="name" type="text">

    <div class="contact_name">phone number</div>
    <input class="form_text_sp" placeholder="" name="tel" type="text">

    <div class="contact_name">e-mail</div>
    <input class="form_text_sp" placeholder="" name="mail" type="text">

    <div class="contact_name">messsge</div>
    <textarea class="form_textarea_sp"></textarea>

    <div class="send_button" style="margin-top:20px;">
        <a href="#" onclick="clickMailButton()" style="margin:auto;">SEND</a>
    </div>
</div>


@endsection