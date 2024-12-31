<?php
if(!defined('ABSPATH')){
    wp_die();
}
/* Template Name: صفحه ورود */


$stylePlaceHolder = TD . '/asset/css/home.css';
include 'header.php';

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
                <div id="form-loader">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="100" height="100" style="shape-rendering:auto;display:block;" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g transform="rotate(0 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.9166666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(30 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.8333333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(60 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.75s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(90 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.6666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(120 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.5833333333333334s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(150 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.5s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(180 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.4166666666666667s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(210 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.3333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(240 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.25s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(270 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.16666666666666666s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(300 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="-0.08333333333333333s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g transform="rotate(330 50 50)"><rect fill="#000000" height="12" width="6" ry="6" rx="3" y="24" x="47"><animate repeatCount="indefinite" begin="0s" dur="1s" keyTimes="0;1" values="1;0" attributeName="opacity"></animate></rect></g><g></g></g></svg>
                </div>
                <div id="login-main-content-right-title">
                    <h3>ورود</h3>
                </div>
                <div id="login-main-content-right-form">
                    <form action="" method="post" id="form-login">
                        <p>
                            <label for="username">ایمیل یا شماره</label>
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
                    <script>
                        $(document).ready(function(){
                            $(' div#form-loader').hide()
                            $('#submit').click(function(e){
                                        let username = $("#username").val();
                                        let password = $("#password").val();
                                        e.preventDefault();
                                        let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 
                                        			//here can make loader start
                                        $('div#login-main-content-right div#form-loader').show()
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
                                                $(' div#form-loader').hide()

                                            },
                                            success : function(data){
                                                $(' div#form-loader').hide()

                                                if(data.is_sent){
                                                    console.log("redirect");
                                                    window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";
                                                }else{
                                                    $("#errors").show()
                                                    $("#errors").empty()

                                                    data.ErrorMessage.forEach(error=>{
                                                        $("#errors").append(`
                                                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                                        <div id="errors-content">
                                                                            ${error}
                                                                        </div>
                                                                    </div>
                                                        `)
                                                        setTimeout(function() {
                                                            $("#errors").hide()
                                                        }, 3000);
                                                    })
                                                }
                                                
                                            }
                                        })
                                    }) ;    
                            $('#submit-reg').click(function(e){
                                        e.preventDefault();
                                        let usernameReg = $("#username-reg").val();
                                        let passwordReg = $("#password-reg").val();
                                        let emailReg = $("#email-reg").val();
                                        let nameReg = $("#name-reg").val();
                                        let ajaxURL = '<?php echo admin_url('admin-ajax.php');?>'; 

                                        			//here can make loader start
                                        $('div#login-main-content-left div#form-loader').show()


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
                                                $(' div#form-loader').hide()

                                                console.log(e)
                                            },
                                            success : function(data){
                                                $(' div#form-loader').hide()

                                                if(data.is_sent){
                                                    window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";

                                                }else{
                                                    $("#errors").show()
                                                    $("#errors").empty()

                                                    data.ErrorMessage.forEach(error=>{
                                                        $("#errors").append(`
                                                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                                        <div id="errors-content">
                                                                            ${error}
                                                                        </div>
                                                                    </div>
                                                        `)
                                                        setTimeout(function() {
                                                            $("#errors").hide()
                                                        }, 3000);
                                                    })
                                        
                                                }
                                                
                                            }
                                        })
                                    })        
                        })
                    
                    </script>

            </div>
        </div>
        <div id="errors" >
        </div>

                
    </main>

    <?php
}else{
    ?>
    <script>
        window.location.href = "<?php if ( $myaccount_page ) {echo get_permalink( $myaccount_page );} ?>";
    </script>
    <?php
}

include 'footer.php'
?>