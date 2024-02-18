@extends('layout.main')
@section('style')
<style>
.style_formControl__aLMXT {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.style_invalidFeedback__Ue_21 {
    width: 100%;
    margin-top: .25rem;
    font-size: .875em
}

.style_orBlock__WpLN4:after {
    content: "";
    position: absolute;
    display: block
}

.style_login__iMnn8 {
    font-size: 12px;
    line-height: 18px
}

.style_login__iMnn8 .style_innerCol__8lF2V {
    padding: 0 25px
}

.style_login__iMnn8 .style_innerSmall__eYtpE {
    padding: 0 30px
}

.style_login__iMnn8 .style_infoText__d3ZUb {
    font-size: 14px;
    line-height: 19px;
    color: #50555d
}

.style_login__iMnn8 .style_shareBtn__2XxMw {
    padding: 6px 12px;
    width: 100%;
    font-size: inherit;
    line-height: inherit;
    text-align: center;
    border: 1px solid #d2d5d9;
    font-weight: 700;
    border-radius: 2em
}

.style_login__iMnn8 .style_shareBtn__2XxMw.style_facebook__ivgu1 {
    border-color: #4267b2;
    background: #4267b2;
    color: #fff
}

.style_login__iMnn8 .style_shareBtn__2XxMw.style_google__16c2h {
    color: var(--font-color)
}

.style_login__iMnn8 .style_shareBtn__2XxMw span {
    margin-left: 6px
}

.style_login__iMnn8 h3 {
    margin: 8px 0 4px
}

.style_lineTitle__bqU8A {
    width: 344px
}

.style_infoBlock__xFZOF {
    min-height: 285px;
    position: relative
}

.style_joinText__HBFbj {
    margin-bottom: 11px
}

.style_orBlock__WpLN4 {
    position: absolute;
    height: 100%;
    left: 0;
    top: 0;
    transform: translateX(-50%)
}

.style_orBlock__WpLN4:after {
    height: 100%;
    width: 1px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(180deg,#a7acb4 0,hsla(217,8%,68%,0) 36%,hsla(217,8%,68%,0) 64%,#a7acb4);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a7acb4",endColorstr="#a7acb4",GradientType=0)
}

.style_orBlock__WpLN4.style_orHLine__MzSD6 {
    margin: 22px 0 16px;
    position: relative;
    transform: translateY(0)
}

.style_orBlock__WpLN4.style_orHLine__MzSD6:after {
    transform: translateY(-50%);
    width: 100%;
    height: 1px;
    left: 0;
    top: 50%;
    background: linear-gradient(270deg,#a7acb4 0,hsla(217,8%,68%,0) 36%,hsla(217,8%,68%,0) 64%,#a7acb4);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a7acb4",endColorstr="#a7acb4",GradientType=0)
}

.style_otpContainer__C_TKd {
    margin: 0 auto;
    padding-left: 11px;
    position: relative;
    width: 134px;
    overflow: hidden;
    border-bottom: 1px solid #dedfe3
}

.style_otpContainer__C_TKd input {
    width: 100%;
    overflow: hidden;
    color: var(--font-color)
}

.style_otpContainer__C_TKd .style_hideCursor__jbsK_ {
    caret-color: transparent
}

.style_otpInput__YmV42 {
    padding: 8px 0;
    border: none;
    letter-spacing: 22px
}

.style_pointerBtn__JXSn7 {
    cursor: pointer
}

@media(min-width: 768px)and (max-width:991px) {
    .style_login__iMnn8 .style_innerCol__8lF2V {
        padding:0 20px
    }
}

@media(max-width: 767px) {
    .style_login__iMnn8 .style_innerCol__8lF2V {
        padding:0
    }

    .style_lineTitle__bqU8A {
        width: 280px
    }

    .style_infoBlock__xFZOF {
        min-height: 0;
        min-height: auto
    }

    .style_lineTitle__bqU8A {
        margin: 8px 0 12px;
        width: 100%;
        order: 3
    }

    .style_lineTitle__bqU8A h4 {
        border: none
    }

    .style_lineTitle__bqU8A h4:after,.style_lineTitle__bqU8A h4:before {
        display: none
    }

    .style_orBlock__WpLN4 {
        margin: 12px 0 16px;
        position: relative;
        transform: translateY(0)
    }

    .style_orBlock__WpLN4:after {
        transform: translateY(-50%);
        width: 100%;
        height: 1px;
        left: 0;
        top: 50%;
        background: linear-gradient(270deg,#a7acb4 0,hsla(217,8%,68%,0) 36%,hsla(217,8%,68%,0) 64%,#a7acb4);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a7acb4",endColorstr="#a7acb4",GradientType=0)
    }

    .style_joinText__HBFbj {
        margin-bottom: 16px;
        order: 1
    }

    .style_shareList__OeMtC {
        margin: 0 -8px;
        order: 2
    }

    .style_shareList__OeMtC button {
        margin: 0 8px
    }
}

.form_formGroup__0jaCW {
    margin-bottom: 22px;
    position: relative
}

.form_label__RCAaw {
    margin-bottom: 8px;
    font-size: 12px;
    line-height: 20px;
    letter-spacing: .2px;
    text-transform: uppercase
}

.form_formControl__Duy1U {
    font-size: 16px;
    line-height: 22px;
    color: var(--font-color);
    border: 1px solid var(--border-input);
    border-radius: 8px;
    background-color: var(--light-mode-bg)
}

.form_formControl__Duy1U~.form_icon__qAnK7 {
    position: absolute;
    width: 24px;
    height: 24px;
    right: 8px;
    top: 35px;
    background: url(/_next/static/media/eye-icon.24f35d53.svg) no-repeat 50%/20px auto
}

.form_formControl__Duy1U~.form_icon__qAnK7.form_active__UwdGr {
    background-image: url(/_next/static/media/eye-close-icon.24c53a1e.svg)
}

.form_formControl__Duy1U.form_password__Wd_WF {
    padding-right: 36px
}

.form_formControl__Duy1U:focus {
    box-shadow: none;
    border-color: var(--font-color)
}

.form_formControl__Duy1U.form_formSelect__UuaRJ {
    padding-right: 40px;
    background-image: url(/_next/static/media/down-arrow.84bd6c00.svg);
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: auto 70%
}

.form_formControl__Duy1U.form_hasError__KnUMT {
    border-color: #f14f4f
}

.form_formControl__Duy1U.form_formTextarea__gi6eX {
    resize: none
}

.form_formControl__Duy1U:disabled {
    opacity: .8;
    cursor: not-allowed
}

.form_invalidFeedback__iZu7d {
    display: block;
    color: #f14f4f
}

.form_formRadioCheck__rfj6V input {
    vertical-align: top;
    border: 2px solid #979797;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact
}

.form_formRadioCheck__rfj6V input[type=radio] {
    border-radius: 50%
}

.form_formRadioCheck__rfj6V input[type=checkbox] {
    border-radius: .25em
}

.form_formRadioCheck__rfj6V input:checked[type=checkbox] {
    background: #045de9;
    background-image: url(/_next/static/media/check-icon.97557fb0.svg)
}

.form_formRadioCheck__rfj6V input:checked[type=radio] {
    background-image: url(/_next/static/media/switch-light.7be2c738.svg);
    background-position: 64% 50%;
    background-size: 74% auto
}

.form_formRadioCheck__rfj6V input:checked {
    border-color: #045de9
}

.form_formCheck__1gTQX label {
    font-size: 12px;
    line-height: 16px
}

.form_formCheck__1gTQX input {
    margin-top: 2px;
    margin-right: 8px;
    width: 16px;
    height: 16px;
    border-width: 1px
}

.form_formRadio__M1zvi {
    min-height: inherit;
    margin-right: 1rem
}

.form_formRadio__M1zvi input {
    margin-top: 0;
    margin-right: 8px;
    width: 20px;
    height: 20px
}

.form_formRadio__M1zvi input:checked[type=radio] {
    background: transparent url(/_next/static/media/checkbox.4ea97de6.svg) no-repeat 50%/18px auto
}

.form_formRadio__M1zvi.form_bigcheck__cyO07 input {
    margin-top: 0;
    width: 22px;
    height: 22px
}

.form_formSwitch__8A_aR {
    padding-left: 0
}

.form_formSwitch__8A_aR input {
    margin: 0;
    width: 28px;
    height: 20px;
    display: block;
    background: #174a9c url(/_next/static/media/switch-light.7be2c738.svg) no-repeat left 3px center/14px auto;
    border-color: #50555d;
    border-radius: 2em;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.form_formSwitch__8A_aR input:checked {
    background-color: #174a9c;
    border: none;
    background-position: right 3px center
}

.form_formSwitch__8A_aR input:focus:not(:checked) {
    background-image: url(/_next/static/media/switch-light.7be2c738.svg)
}

.form_formSwitch__8A_aR label {
    margin-left: 4px
}

.form_formSwitch__8A_aR.form_switch-small__puhr7 .form_form-check-input__iia1W {
    margin: 0;
    width: 23px;
    height: 16px;
    background-size: 12px auto;
    background-position: left 2px center
}

.form_formSwitch__8A_aR.form_switch-small__puhr7 .form_form-check-input__iia1W:checked {
    background-position: right 2px center
}

.form_formSwitch__8A_aR.form_theme-switch__9Vfa0 .form_form-check-input__iia1W:checked {
    background-color: #045de9
}
</style>
@endsection
@section('content')
<section class="common-section">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10">
                <div
                    class="style_lineTitle__bqU8A line-title mb-2 mb-md-4 mx-auto text-uppercase text-center overflow-hidden">
                    <h4 class="rounded-pill position-relative d-inline-block">Sign In</h4>
                </div>
                <div class="common-box style_login__iMnn8 row">
                    <div class="col-md-6">
                        <div class="style_innerCol__8lF2V">
                            <form action="{{ route('signin.submit') }}" method="post">
                                @csrf
                                <div class="form_formGroup__0jaCW"><label class="form_label__RCAaw form-label"
                                        for="emailPhone">Email*</label><input name="email" type="text" id="emailPhone"
                                        class="form_formControl__Duy1U undefined style_formControl__aLMXT form-control">
                                </div>
                                <div class="form_formGroup__0jaCW"><label class="form_label__RCAaw form-label"
                                        for="password">Password *</label><input name="password" type="password"
                                        id="password"
                                        class="form_formControl__Duy1U form_password__Wd_WF undefined style_formControl__aLMXT form-control"><button
                                        type="button" class="form_icon__qAnK7 btn btn-link"></button></div>
                                <div class="d-flex justify-content-end align-items-center mb-3">
                                    <p class="theme-text mb-0"><a href="/forgot-password/">Forgot Password?</a></p>
                                </div><button type="submit" class="theme-btn w-100 btn btn-primary">Sign In</button>
                            </form>
                            <p class="mt-3 mb-1 text-center">Don’t have an account? <a class="theme-text"
                                    href="/sign-up/">Sign
                                    Up</a></p>
                        </div>
                    </div>
                    <div
                        class="style_innerCol__8lF2V style_infoBlock__xFZOF font-semi text-center d-flex flex-column justify-content-center col-md-6">
                        <p class="style_joinText__HBFbj text-uppercase">Sign In With</p>
                        <div class="style_shareList__OeMtC d-flex d-md-block justify-content-center">
                            <div id="google-sign-btn" class="d-flex justify-content-center">
                                <div class="S9gUrf-YoZ4jf" style="position: relative;">
                                    <div>Sign in with Google</div>
                                </div>
                            </div>
                        </div>
                        <div class="style_orBlock__WpLN4 d-flex align-items-center justify-content-center">
                            <p class="mb-0">OR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
       

@endsection
