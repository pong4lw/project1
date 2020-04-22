<?php $__env->startSection('content'); ?>

<!-- Wrapper -->
<div id="wrapper">

  <!-- Main -->
  <div id="main">
    <div class="inner">

      <!-- Header -->
      <header id="header">
        <?php echo $__env->make('user.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>

      <!-- Content -->
      <section>
        <header class = "main">
          <form action = "<?php echo e(url('/user/update/1')); ?><?php echo e($users->id); ?>" method = "POST">

            <?php echo csrf_field(); ?>

            <table class="alt">
              <tr>
                <td colspan="4">Name<h2><?php echo e($users->name); ?></h2>
                  最終ログイン日 <?php echo e($users->last_login); ?></td>
                </tr>

                <tr>
                  <td colspan="2">ID<h3><?php echo e($users->email); ?></h3>

                    PassWord<br><input type="text" name="password" value="<?php echo e($users->password_str); ?>">
                    <input type="submit" class="button primary" value="変更">

                  </td>

                  <td colspan="2">
                    <hr>
                    送信用EA <a href="<?php echo e(url('/ea/FXSupporter.ex4')); ?>">Download</a><br>
                    <hr>
                    送信用スクリプト <a href="<?php echo e(url('/ea/FXSupporterScript.ex4')); ?>">Download</a>
                    <hr>
                  </td>

                </tr>

                <tr>
                  <td colspan="2"></td>
                  <td colspan="2">登録日<br><?php echo e($users->created_at); ?></td>
                </tr>

              </table>

            </form>

          </header>

          <!-- Content -->
          <div class="row">
            <p>
              <div id="left" class="col-12 col-12-small">
                <div class="table_row">

                  <h3 class="table">登録 EA一覧</h3>

                  <!--                <table class="alt">-->
                    <table id="datatable" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <td>名前</td>
                          <td>EA code</td>

                          <td>勝率</td>
                          <td>＋PIPS</td>
                          <td>公開/非公開</td>
                          <td></td>
                        </tr>
                      </thead>

                      <?php $__currentLoopData = $eaList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $ea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <?php if($n < 5): ?>

                      <tr>
                        <td><a href="<?php echo e(url('/ea/detail')); ?>/<?php echo e($ea->id); ?>"><?php echo e($ea->name); ?></a></td>
                        <td> <?php echo e($ea->post_code); ?> </td>
                        <td> <?php echo e($ea->win); ?> %</td>
                        <td> <?php echo e($ea->value); ?> pips</td>

                        <td>
                          <?php if($ea->is_display): ?>
                          <input type="radio" value="1"><a class="button primary" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>">公開</a>
                          <?php else: ?>
                          <input type="radio" value="1"><a class="button" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>">非公開</a>  
                          <?php endif; ?>
                        </td>

                <td><a href="<?php echo e(url('ea/delete')); ?>/<?php echo e($ea->id); ?>" class="btn btn-primary">削除</a> </td>
                          <!--<input type="radio" value="1"><div class="button">稼働中</div>-->
                          <!--<input type="radio" value="0"><div class="button">停止中</div>-->

                      </tr>
                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                    <form method="POST" action="<?php echo e(url('/ea/create')); ?>">
                      <?php echo csrf_field(); ?>
                      名前
                      <input type="text" class="" name="ea_name" value="">

                      <!--<input type="file" class="" value="">-->

                      <input type="submit" class="button primary" value="追加する">
                    </form>

                  </div>

                </div><!--left-->

                <div id="center" class="col-6 col-12-small ">
<!--
                <h4></h4>
                <ul class="pagination">
                  <li><span class="button disabled">Prev</span></li>
                  <li><a href="#" class="page active">1</a></li>
                  <li><a href="#" class="page">2</a></li>
                  <li><a href="#" class="page">3</a></li>
                  <li><span>&hellip;</span></li>
                  <li><a href="#" class="page">8</a></li>
                  <li><a href="#" class="page">9</a></li>
                  <li><a href="#" class="page">10</a></li>
                  <li><a href="#" class="button">Next</a></li>
                </ul>
              -->

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

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Footer -->
    <footer id="footer">
      <p class="copyright">&copy; Untitled. All rights reserved.  </p>
    </footer>

  </div>
</div>

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
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fxsupo\resources\views/user/home.blade.php ENDPATH**/ ?>