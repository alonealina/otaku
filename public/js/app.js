function clickMailButton() {

    if (mail_form.name.value == ""){
        alert("お名前を入力してください");
        return false;
    } else if (mail_form.tel.value == ""){
        alert("電話番号を入力してください");
        return false;
    } else if (mail_form.mail.value == ""){
        alert("メールアドレスを入力してください");
        return false;
    } else if (mail_form.content.value == ""){
        alert("お問い合わせ内容を入力してください");
        return false;
    } else {
        document.forms.mail_form.submit();
    }
}

