@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name"  placeholder="山田">
                    <input type="text" name="name" placeholder="太郎">
                </div>
                <div class="form__error"></div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="radio" name="sex" value="男性" id="sexChoice1" />
                    <label for="sexChoice1">男性</label>
                    <input type="radio" name="sex" value="女性" id="sexChoice2" />
                    <label for="sexChoice2">女性</label>
                    <input type="radio" name="sex" value="その他" id="sexChoice3" />
                    <label for="sexChoice3">その他</label> 
                </div>
                <div class="form__error"></div>
            </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email"  placeholder="例:test@example.com">
                </div>
                <div class="form__error"></div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel"  placeholder=08012345678>
                </div>
                <div class="form__error"></div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address"  placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__error"></div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address"  placeholder="例:千駄ヶ谷マンション101">
                </div>
                <div class="form__error"></div>
        </div>     
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <form action="" method="get">
                        <select name="contact__type">
                            <option value=""></option>
                        </select>
                    </form>
                </div>
                <div class="form__error"></div>
        </div>   
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>                
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="contact-content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection