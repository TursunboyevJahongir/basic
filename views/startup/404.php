<?php
    use yii\helpers\Url;
?>
<!-- 404 -->
<div class="error pb-5 pt-2 text-center" id="price">
    <div class="container pb-xl-5 pb-lg-3">
        <img src="/images/error.png" alt="" class="img-fluid" />
        <h3 class="title-w3 text-bl my-3 font-weight-bold text-capitalize">Oops! This page can’t be found.</h3>
        <p class="sub-tittle text-center4">Sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <a href=<?=Url::to('/startup')?> class="btn button-style mt-5">Back To Home</a>
    </div>
</div>
<!-- //404 -->
