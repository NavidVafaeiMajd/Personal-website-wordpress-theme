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
}
</style>
<main>
    <form action="" method="post">
        <h1>تنظیمات قالب</h1>
        <h2>  رنگ بندی های سایت </h2>
        <label for="">رنگ اصلی</label>
        <input type="color" name="" id="">
        <h2>  لینک صفحات مهم  </h2>
        <label for="portfolioPageLink">   لینک صفحه نمونه کار ها :</label>
        <input type="text" id="portfolioPageLink" name="portfolioPageLink" value="<?php echo get_option( "portfolioPageLink" , "" )?>">
        <label for="blogPageLink">   لینک صفحه مقالات:</label>
        <input type="text" id="blogPageLink" name="blogPageLink" value="<?php echo get_option( "blogPageLink" , "" )?>">
        <h2>  لینک های شبکه های اجتماعی  </h2>
        <label for="githublink"> لینک گیت هاب :</label>
        <input type="text" id="githublink" name="githublink" value="<?php echo get_option( "githublink" , "" )?>">
        <label for="instalink">   لینک اینستاگرام:</label>
        <input type="text" id="instalink" name="instalink" value="<?php echo get_option( "instalink" , "" )?>">
        <label for="linkinLink">   لینک لیندکدین:</label>
        <input type="text" id="linkinLink" name="linkinLink" value="<?php echo get_option( "linkinLink" , "" )?>">
        <input type="submit" value="ذخیره تغییرات">
        
    </form>
</main>
<?php