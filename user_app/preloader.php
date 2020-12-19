<?php
require_once 'header1.php';
?>
<div class="page-content pb-0 bg-theme">
    <div class="cover-slider owl-carousel owl-dots-no-footer mb-0 text-center">
        <div data-card-height="cover" class="card">
            <div class="card-top">
                <div class="content mt-5 pt-5 mb-0">
                    <img class="mx-auto" height="400" src="images\preloader.jpg">
                    <h1 class="mt-5 mb-0 font-30"> </h1>
                    <p class="color-highlight font-12"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'js-links.php';
?>
<script>
    setTimeout(function() {
        window.location.href = 'login.php';
    }, 3000);
</script>a