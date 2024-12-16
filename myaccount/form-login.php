<?php

if(!defined('ABSPATH')){
    wp_die();
}
$myaccount_page = get_option( 'woocommerce_myaccount_page_id' );


if(!is_user_logged_in()){
    ?>
    <style>
        div#login-main-content {
    display: flex;
    justify-content: space-around;
    }

    label {
        display: block;
        margin: 5px 0;
    }

    div#login-main-content div {
        width: 35%;
        background: white;
        padding: 10px;
        border-radius: 14px;
    }

    div#login-main-content-right-form {
        width: 100% !important;!i;!;
    }

    div#login-main-content-right-form input {
        width: 100%;
    }
    @media only screen and (max-width:800px) {
        div#login-main-content {
        display: block;
        }

        div#login-main-content div {
            width: 100%;
            margin-top: 35px;
        }
    }
    </style>
    <main class="container">
        <div id="login-main-content">
            <div id="login-main-content-right">
                <div id="login-main-content-right-title">
                    <h3>ورود</h3>
                </div>
                <div id="login-main-content-right-form">
                    <form action="" method="post" id="form-login">
                        <p>
                            <label for="username">حساب کاربری</label>
                            <input type="text" class="" name="username" id="username" autocomplete="username" value="" required aria-required="true">
                        </p>
                        <p>
                            <label for="password"> رمز عبور </label>
                            <input type="password" class="" name="password" id="password" autocomplete="password" value="" required aria-required="true">
                        </p>
                        <p>
                            <input type="submit" class="" name="submit" for="form-login" id="submit" autocomplete="username" value="ورود" required aria-required="true">
                            
                        </p>
                    </form>
                    <!-- <script>
                                $(document).ready(function(){
                         
                                })
                            </script> -->
                </div>
            </div>
            <div id="login-main-content-left">
                <div id="login-main-content-right-title">
                    <h3>ثبت نام</h3>
                </div>
                <div id="login-main-content-right-form">
                    <form action="" method="post" id="form-reg">
                        <p>
                            <label for="name-reg"> نام </label>
                            <input type="text" class="" name="name-reg" id="name-reg" autocomplete="name-reg" value="" required aria-required="true">
                        </p>
                        <p>
                            <label for="username-reg">شماره موبایل</label>
                            <input type="text" class="" name="username-reg" id="username-reg" autocomplete="username-reg" value="" required aria-required="true">
                        </p>
                        <p>
                            <label for="email-reg"> ایمیل  </label>
                            <input type="text" class="" name="email-reg" id="email-reg" autocomplete="email-reg" value="" required aria-required="true">
                        </p>
                        <p>
                            <label for="password-reg"> رمز عبور </label>
                            <input type="password" class="" name="password-reg" id="password-reg" autocomplete="password-reg" value="" required aria-required="true">
                        </p>
                        <p>
                            <input type="submit" class="" name="submit-reg" for="form-reg" id="submit-reg" autocomplete="username" value="ثبت نام" required aria-required="true">                            
                        </p>
                    </form>
                    <script>
                        $(document).ready(function(){
                            $('#submit').click(function(e){
                                        let username = $("#username").val();
                                        let password = $("#password").val();
                                        e.preventDefault();
                                        let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 
                                        			//here can make loader start

                                        $.ajax({
                                            
                                            type : 'POST',
                                            dataType : 'json',
                                            url : ajaxURL,
                                            data :{
                                                username : username,
                                                password : password,
                                                action : 'personal-login',

                                            },
                                            error : function(e){
                                            },
                                            success : function(data){
                                                if(data.is_sent){
                                                    console.log("redirect");
                                                    window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";
                                                }else{
                                                    data.ErrorMessage.forEach(error=>{
                                                        $("#errors").html(error)
                                                    })
                                        
                                                }
                                                
                                            }
                                        })
                                    }) ;    
                            $('#submit-reg').click(function(e){
                                        e.preventDefault();
                                        console.log("salm")
                                        let usernameReg = $("#username-reg").val();
                                        let passwordReg = $("#password-reg").val();
                                        let emailReg = $("#email-reg").val();
                                        let nameReg = $("#name-reg").val();
                                        let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 

                                        			//here can make loader start

                                        $.ajax({
                                            
                                            type : 'POST',
                                            dataType : 'json',
                                            url : ajaxURL,
                                            data :{
                                                usernameReg : usernameReg,
                                                passwordReg : passwordReg,
                                                emailReg : emailReg , 
                                                nameReg : nameReg,
                                                action : 'personal-reg',

                                            },
                                            error : function(e){
                                                console.log(e)
                                            },
                                            success : function(data){
                                                if(data.is_sent){
                                                    window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";

                                                }else{
                                                    data.ErrorMessage.forEach(error=>{
                                                        $("#errors").html(error)
                                                    })
                                        
                                                }
                                                
                                            }
                                        })
                                    })        
                        })
                    
                    </script>
                </div>

            </div>
        </div>
        <div id="errors"></div>

                
    </main>

    <?php
}else{
    ?>
    <script>
        window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";
    </script>
    <?php
}
?>