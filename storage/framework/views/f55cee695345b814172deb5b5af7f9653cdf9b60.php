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
      <section id ="content">

        <header class="main">
          <h2><?php echo e($ea->name); ?></h2>
          <div>Post Code :<?php echo e($ea->post_code); ?></div>

          <?php if($ea->is_display): ?>
          <input type="radio" value="1"><a class="button primary" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>?id=<?php echo e($ea->id); ?>">公開</a>
          <?php else: ?>
          <input type="radio" value="1"><a class="button" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>?id=<?php echo e($ea->id); ?>">非公開</a>  
          <?php endif; ?>

        </header>
        <div class="row">
          <div id="right">
            <div class="" style="border:solid 1px rgba(210, 215, 217, 0.75); min-width:100px; min-height: 240px;">
              <canvas id="chart"></canvas>
            </div><!-- row -->
          </div><!-- center-->

          <div id="left" class="col-6 col-12-small">
            <div>
             <table class="alt">
              <tr>
                <td>収益:<?php echo e(\App\Models\Ea_logs::countProfit($ea->post_code)); ?></td>

                <td>損失:<?php echo e(\App\Models\Ea_logs::countProfit($ea->post_code,'-')); ?></td>

              </tr>
              <tr>
                <td>総取得:<?php echo e(\App\Models\Ea_logs::countProfit($ea->post_code,'+')); ?></td>

                <?php if(\App\Models\Ea_logs::countProfit($ea->post_code,'-') == 0): ?>
                  <td>PF:0</td>
                <?php else: ?>
                  <td>PF:<?php echo e(round(\App\Models\Ea_logs::countProfit($ea->post_code,'+') / \App\Models\Ea_logs::countProfit($ea->post_code,'-') ,2)); ?></td>
                <?php endif; ?>

              </tr>
 
              <tr>
                <td>勝ち数:<?php echo e(\App\Models\Ea_logs::countEaLogs($ea->post_code,'win')); ?></td>
                <td>負け数:<?php echo e(\App\Models\Ea_logs::countEaLogs($ea->post_code,'lose')); ?></td>
              </tr>
             <tr>

                <td>勝率:

                <?php if(\App\Models\Ea_logs::countEaLogs($ea->post_code,'lose') == 0 && \App\Models\Ea_logs::countProfit($ea->post_code,'-') == 0): ?>
                  0
                <?php else: ?>
                  <?php echo e(round(\App\Models\Ea_logs::countEaLogs($ea->post_code,'win')/ (\App\Models\Ea_logs::countEaLogs($ea->post_code,'lose')+ \App\Models\Ea_logs::countEaLogs($ea->post_code,'win'))*100,2)); ?>%
                <?php endif; ?>

                </td>
                <td>平均収益：
                  <?php if(\App\Models\Ea_logs::countEaLogs($ea->post_code,'win') === 0): ?>
                  0
                  <?php else: ?>
                  <?php echo e(\App\Models\Ea_logs::countProfit($ea->post_code,'+') / \App\Models\Ea_logs::countEaLogs($ea->post_code,'win')); ?>

                  <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td>平均損失:
                  <?php if(\App\Models\Ea_logs::countEaLogs($ea->post_code,'lose') === 0): ?>
                  0
                  <?php else: ?>
                  <?php echo e(round(\App\Models\Ea_logs::countProfit($ea->post_code,'-') / \App\Models\Ea_logs::countEaLogs($ea->post_code,'lose'),2)); ?>

                  <?php endif; ?>

                </td>
                <td>損失レシオ:
                  <?php if(\App\Models\Ea_logs::countEaLogs($ea->post_code,'win') === 0 || \App\Models\Ea_logs::countEaLogs($ea->post_code,'lose') || \App\Models\Ea_logs::countProfit($ea->post_code,'-') === 0 || \App\Models\Ea_logs::countProfit($ea->post_code,'+') === 0): ?>
                  0
                  <?php else: ?>
                  <?php echo e(round(\App\Models\Ea_logs::countProfit($ea->post_code,'+') / \App\Models\Ea_logs::countEaLogs($ea->post_code,'win') / \App\Models\Ea_logs::countProfit($ea->post_code,'-') / \App\Models\Ea_logs::countEaLogs($ea->post_code,'lose'),2)); ?>

                  <?php endif; ?>
                </td>

              </tr>
              <tr>
                <td>登録日:<?php echo e($ea->created_at); ?></td>
                <td>更新日:<?php echo e($ea->updated_at); ?></td>
              </tr>
              <tr>
                <td colspan="2"><?php echo e($users->description); ?></td>
              </tr>
            </table>
          </div><!--left-->

          <div id="right" class="col-3 col-12-small">
          </div><!--right-->

        </div>
      </div>
    </div>
  </section>
</div>
</div>

<!-- Sidebar -->
<div id="sidebar" class="inactive">
  <div class="inner">

    <!-- Menu -->
    <nav id="menu">
      <header class="major">
        <h2>Menu</h2>
      </header>
      <ul>
        <li><a href="index.html">サンプル</a></li>
      </ul>
    </nav>

    <!-- Section -->
    <section>
      <header class="major">
      </header>
    </section>

    <!-- Section -->
    <!--
    <section>
      <header class="major">
        <h2>Get in touch</h2>
      </header>
      <ul class="contact">
        <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
        <li class="icon solid fa-phone">(000) 000-0000</li>
        <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
        Nashville, TN 00000-0000</li>
      </ul>
    </section>
  -->
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

    var winValue= <?php echo e(\App\Models\Ea_logs::countEaLogs($ea->post_code,'win')); ?> ;
    var loseValue= <?php echo e(\App\Models\Ea_logs::countEaLogs($ea->post_code,'lose')); ?> ;
    var chart = new Chart(document.getElementById("chart"), {
      type: 'pie',
      data: {
       labels: [ "win","lose"],
       datasets: [{
         backgroundColor: ["#DDDDFF", "#FFdddd",],
         data: [ winValue,loseValue]
       }]
     },
     options: {
       pieceLabel: {
        render: 'percentage',
        fontSize: 16,
        fontColor: "black"
      },
      title: {
        display: true,
        text: ''
      }
    }
  });

  });

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fxsp/www/server/resources/views/ea/detail.blade.php ENDPATH**/ ?>