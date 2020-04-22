<?php $__env->startSection('content'); ?>

<style type="text/css">
  a{
    position: relative;
    margin: 0px;
    padding:0px;
  }
</style>
<!-- Wrapper -->
<div id="wrapper">

  <!-- Main -->
  <div id="main">
    <div class="inner">

      <!-- Header -->
      <header id="header">
        <a href="<?php echo e(url('/register')); ?>">新規登録</a>　<a href="<?php echo e(url('/login')); ?>">ログイン</a>
      </header>

      <!-- Content -->
      <section>
        <header class = "main"></header>

          <!-- Content -->
          <div class="row">
            <div class="item">
            ご登録時にメールアドレス <?php echo e($email); ?>に、確認のメールを送信しております。<br>
            掲載されているURLをクリックの上、メールアドレスの確認を行いください。<br>
            メールが届いてない方は、<a href="<?php echo e(url('register_mail')); ?>/<?php echo e(Hash::make($email)); ?>_<?php echo e($id); ?>">こちらから再送</a>できます。
          </div>

          </div>


          <hr />
        </section>
      </div>
    </div>


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
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fxsupo\resources\views/mail_send.blade.php ENDPATH**/ ?>