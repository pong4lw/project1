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
          <h2>ポートフォリオ</h2>
        </header>

        <div class="row">
          <div id="left" class="col-12 col-12-small">

            <table class="alt">
              <tr>
                <td>Ea name</td>
                <td>Ea code</td>
                <td>損益</td>
                <td>公開/非公開</td>
                <td>登録日</td>
                <td>削除</td>

              </tr>

              <?php $__currentLoopData = $ealist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><a href="<?php echo e(url('ea/detail')); ?>/<?php echo e($ea->id); ?>"><?php echo e($ea->name); ?></a></td>
                <td><?php echo e($ea->post_code); ?></td>
                <td><?php echo e($ea->value); ?> pips</td>

                <td>
                  <?php if($ea->is_display): ?>
                  <input type="radio" value="1"><a class="button primary" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>">公開</a>
                  <?php else: ?>
                            <input type="radio" value="1"><a class="button" href="<?php echo e(url('user/ea/display')); ?>/<?php echo e($ea->post_code); ?>">非公開</a>  
                  <?php endif; ?>

                </td>

                <td><?php echo e($ea->created_at); ?></td>
                <td><a href="<?php echo e(url('ea/delete')); ?>/<?php echo e($ea->id); ?>" class="btn btn-primary">削除</a> </td>

              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>


      <form method="post" action="<?php echo e(url('ea/create')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="ea_name" id="query" placeholder="" />
        <input class="button" type="submit" value="登録">
      </form>

          </div><!--left-->
<!--

          <div id="center" class="col-3 col-12-small ">

            <div class="row" >
              <div id="chart" class="table_row col-5 col-12-small ">chart js</div>

              <canvas id="chart" style="position: relative; height:50; width:90"></canvas>

            </div>
            </div>
          -->
            <!-- center-->

            <div id="right" class="col-3 col-12-small">


            </div><!--right-->

          </div>
        </div>
      </div>


      <hr />

    </section>
  </div>
</div>

<!-- Sidebar -->
<div id="sidebar" class="inactive">
  <div class="inner">

    <!-- Search -->
    <section id="search" class="alt">
      <form method="post" action="#">
        <input type="text" name="query" id="query" placeholder="Search" />
      </form>
    </section>

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

    var winValue='1';
    var loseValue='1';
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
      plugins: [dataLabelPlugin],
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
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fxsupo\resources\views/ea/list.blade.php ENDPATH**/ ?>