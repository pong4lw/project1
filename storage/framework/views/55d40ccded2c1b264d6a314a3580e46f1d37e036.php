<?php $__env->startSection('content'); ?>

<!-- Wrapper -->
<div id="wrapper">

  <!-- Main -->
  <div id="main">
    <div class="inner">

      <!-- Header -->
      <header id="header">
     </header>

      <!-- Content -->
      <section>


        <header class = "main">

          </header>

          <!-- Content -->
          <div class="row">
            <p>
              <div id="left" class="col-12 col-12-small">
                <div class="table_row">

                  <h3 class="table">EAでの送信を使う前に</h3>
■EAをダウンロード後に以下の設定を行い下さい<br>
設定を行わないとデータの送信が行えません<br>
</div>

                <div class="table_row">

①　ツール　⇒　オプションの設定画面<br>
                  <img src="<?php echo e(url('post_ea1.jpg')); ?>">
                </div>
                <div class="table_row">

②　自動売買にチェック
<br>
③　WebRequestを許可するURLリストをチェック
<br>
④　https://fx-supporter.comを追加
<br>
⑤　OKボタンで設定
                  <img src="<?php echo e(url('post_ea2.jpg')); ?>">

                  <!--                <table class="alt">-->

                  </div>

                </div><!--left-->

                <div id="center" class="col-6 col-12-small ">

              <br />


            </div><!-- center-->

            <div id="right" class="col-3 col-12-small">
              <div class="table-wrapper col-6 col-12-small">



              </div>

            </div><!--right-->

          </div>


          <hr />
        </section>
      </div>
    </div>



</div>

</div>
    <!-- Footer -->
    <footer id="footer">
      <p class="copyright">&copy; Untitled. All rights reserved.  </p>
    </footer>

  </div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script>
  $(document).ready(function(){
    $('#sidebar').addClass('inactive');
  });
</script>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fxsp/www/server/resources/views/ea/post_ea_help.blade.php ENDPATH**/ ?>