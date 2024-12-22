<style>
    label {
    display: block;
    margin: 10px 0;
}

h2 {
    margin-top: 70px;
}

input[type="submit"] {
    display: block;
    margin: 30px 0px;
    cursor: pointer;
<<<<<<< HEAD
    background: white;
    border: none;
    padding: 10px;
    border-radius: 10px;
}
main {
    width: 80%;
    margin: 10px  auto;
    background: #17cd6d;
    color: white;
    padding: 25px;
    border-radius: 15px;
    font-family: system-ui;
}

h1 , h2 {font-family: system-ui!important;!im;!i;!i;!;color: white;}

input {
    border-radius: 10px !important;!i;!;
    padding: 10px !important;!i;!;
    width: 520px;
    di
}
input:not([type="file"]) {
    direction: ltr;
}

</style>
<main>

    <form action="" method="post" enctype="multipart/form-data">
        <h1>تنظیمات قالب</h1>

        <h2>  تصویر لوگو  </h2>

        <label for="fileToUpload"> 
        <?php 
            $attachment_id = get_option('personal_theme_logo'); 
            $image_attributes = wp_get_attachment_image_src($attachment_id, 'full'); 
            if ($image_attributes) { echo '<img src="' . $image_attributes[0] . '" width="300px">'; }
        ?>
        </label>
        <input type="file" name="fileToUpload" id="fileToUpload">


=======
}
</style>
<main>
    <form action="" method="post">
        <h1>تنظیمات قالب</h1>
        <h2>  رنگ بندی های سایت </h2>
        <label for="">رنگ اصلی</label>
        <input type="color" name="" id="">
>>>>>>> f281d9f8888a521930497b677350870181d698dd
        <h2>  لینک صفحات مهم  </h2>
        <label for="portfolioPageLink">   لینک صفحه نمونه کار ها :</label>
        <input type="text" id="portfolioPageLink" name="portfolioPageLink" value="<?php echo get_option( "portfolioPageLink" , "" )?>">
        <label for="blogPageLink">   لینک صفحه مقالات:</label>
        <input type="text" id="blogPageLink" name="blogPageLink" value="<?php echo get_option( "blogPageLink" , "" )?>">
<<<<<<< HEAD


=======
>>>>>>> f281d9f8888a521930497b677350870181d698dd
        <h2>  لینک های شبکه های اجتماعی  </h2>
        <label for="githublink"> لینک گیت هاب :</label>
        <input type="text" id="githublink" name="githublink" value="<?php echo get_option( "githublink" , "" )?>">
        <label for="instalink">   لینک اینستاگرام:</label>
        <input type="text" id="instalink" name="instalink" value="<?php echo get_option( "instalink" , "" )?>">
        <label for="linkinLink">   لینک لیندکدین:</label>
        <input type="text" id="linkinLink" name="linkinLink" value="<?php echo get_option( "linkinLink" , "" )?>">
<<<<<<< HEAD
        <input type="submit" value="ذخیره تغییرات" name="submit_admin">
=======
        <input type="submit" value="ذخیره تغییرات">
>>>>>>> f281d9f8888a521930497b677350870181d698dd
        
    </form>
</main>
<?php