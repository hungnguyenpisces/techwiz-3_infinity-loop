<link rel="stylesheet" href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/bootstrap/css/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! url('assets/css/user-styles.css') !!}">
<link rel="stylesheet" href="{!! url('assets/fontawesome/css/all.min.css') !!}">
<style>
    .login .form-head {
        padding: 50px;
        border-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 30px 0 rgba(124, 124, 124, 0.11);
        box-shadow: 0 1px 30px 0 rgba(124, 124, 124, 0.11);
        border-top: 5px solid #006838;
    }
    .login .form-head .title {
        font-size: 24px;
        line-height: 1.42;
        font-weight: 500;
        margin-bottom: 30px;
        text-align: center;
    }
    .login .form-head form .form-group {
        margin-bottom: 15px;
    }
    .login .form-head form .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #888;
        font-size: 15px;
        font-weight: 400;
    }
    .login .form-head form .form-group input {
        width: 100%;
        min-height: 50px;
        padding: 3px 20px;
        color: #081828;
        border: 1px solid #eee;
        border-radius: 0;
        outline: 0;
        background-color: #fff;
        font-size: 15px;
    }
    .login .form-head form .check-and-pass .form-check {
        float: left;
    }
    .login .form-head form .check-and-pass .form-check a {
        color: #88c250;
    }
    .login .form-head form .check-and-pass .form-check .form-check-input:checked {
        background-color: #88c250;
        border-color: #88c250;
    }
    .login .form-head form .check-and-pass .form-check-label a:hover {
        text-decoration: underline;
    }
    .login .form-head form .check-and-pass .lost-pass {
        float: right;
        color: #777;
        position: relative;
        top: -2px;
    }
    .login .form-head form .check-and-pass .lost-pass:hover {
        color: #88c250;
        text-decoration: underline;
    }
    .login .form-head form .button {
        margin-top: 25px;
    }
    .login .form-head form .button .btn {
        width: 100%;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
    .login .form-head form .button .btn:hover {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
    .login .form-head form .outer-link {
        display: block;
        font-size: 14px;
        font-weight: 400;
        color: #888;
        margin-top: 30px;
        text-align: center;
    }
    .login .form-head form .outer-link a {
        color: #006838;
    }
    .login .form-head form .outer-link a:hover {
        text-decoration: underline;
    }
    .login .form-head .alt-option {
        margin: 30px 0;
        text-align: center;
        display: inline-block;
        position: relative;
        width: 100%;
        z-index: 1;
    }
    .login .form-head .alt-option span {
        font-size: 15px;
        background: #fff;
        color: #888;
        padding: 5px 15px;
    }
    .login .form-head .alt-option::before {
        position: absolute;
        left: 0;
        top: 50%;
        height: 1px;
        width: 100%;
        background: #eee;
        content: '';
        z-index: -1;
    }
    .login .form-head .socila-login ul {
        margin-bottom: 20px;
    }
    .login .form-head .socila-login ul li {
        display: block;
    }
    .login .form-head .socila-login ul li:last-child {
        margin: 0;
    }
    .login .form-head .socila-login ul li a {
        padding: 15px 14px;
        text-align: center;
        border: 1px solid #eee;
        border-radius: 0;
        display: block;
        color: #555;
        font-weight: 500;
        font-size: 12px;
    }
    .login .form-head .socila-login ul li a.facebook:hover {
        color: #fff;
        background: #3b5999;
        border-color: transparent;
    }
    .login .form-head .socila-login ul li a.facebook:hover i {
        color: #fff;
    }
    .login .form-head .socila-login ul li a.facebook i {
        color: #3b5999;
    }
    .login .form-head .socila-login ul li a.google:hover {
        color: #fff;
        background: #dd4b39;
        border-color: transparent;
    }
    .login .form-head .socila-login ul li a.google:hover i {
        color: #fff;
    }
    .login .form-head .socila-login ul li a.google i {
        color: #dd4b39;
    }
    .login .form-head .socila-login ul li a.instagram:hover {
        color: #fff;
        background: #e4405f;
        border-color: transparent;
    }
    .login .form-head .socila-login ul li a.instagram:hover i {
        color: #fff;
    }
    .login .form-head .socila-login ul li a.instagram i {
        color: #e4405f;
    }
    .login .form-head .socila-login ul li a.linkedin:hover {
        color: #fff;
        background: #0077b5;
        border-color: transparent;
    }
    .login .form-head .socila-login ul li a.linkedin:hover i {
        color: #fff;
    }
    .login .form-head .socila-login ul li a.linkedin i {
        color: #0077b5;
    }
    .login .form-head .socila-login ul li a i {
        display: inline-block;
        margin-right: 10px;
        font-size: 15px;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }
</style>
