
        <?php if(Auth::check()): ?>
        <ul class="actions">
<!--          <li><a href="#" class="button primary">お知らせ</a></li>-->
          <li><a href="<?php echo e(url('/user/index')); ?>" class="button primary">ユーザー</a></li>
          <li><a href="<?php echo e(url('/user/ea/')); ?>" class="button primary">EAポートフォリオ</a></li>
<!--          <li><a href="<?php echo e(url('/setting/index')); ?>" class="button primary">設定</a></li>-->	
        </ul>

<!--
        <ul class="icons">
          <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        </ul>
      -->
        <ul class="icons">
          <li><a href="<?php echo e(url('/logout')); ?>"><span class="label">ログアウト</span></a></li>
        </ul>
        <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\fxsupo\resources\views/user/menu.blade.php ENDPATH**/ ?>