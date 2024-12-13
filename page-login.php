<?php
if(!defined('ABSPATH')){
    wp_die();
}

$stylePlaceHolder = TD . '/asset/css/home.css';
include 'header.php';
if(!is_user_logged_in()){
    ?>
    <main class="container">
        <form action="" method="post" id="form">
            <p>
                <label for="username">حساب کاربری</label>
                <input type="text" class="" name="username" id="username" autocomplete="username" value="" required aria-required="true">
            </p>
            <p>
                <label for="password"> رمز عبور </label>
                <input type="password" class="" name="password" id="password" autocomplete="password" value="" required aria-required="true">
            </p>
            <p>
                <input type="submit" class="" name="submit" id="submit" autocomplete="username" value="ورود" required aria-required="true">
                
            </p>
        </form>
        <div id="errors"></div>
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
                                                console.log(e)
                                            },
                                            success : function(data){
                                                if(data.is_sent){

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