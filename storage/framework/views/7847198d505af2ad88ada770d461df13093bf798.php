<!-- Sidebar -->
<div id="sidebar" class="inactive">
  <div class="inner">
   <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    <?php if(auth()->guard()->guest()): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
    </li>

    <?php if(Route::has('register')): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
    </li>
    <?php endif; ?>
    <?php else: ?>
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

      </a>

      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
      </form>
    </div>
  </li>
  <?php endif; ?>
</ul>

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
    <li><a href="<?php echo e(url('user/index')); ?>" style="color:#666;">　　</a></li>
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
<?php /**PATH C:\xampp\htdocs\fxsupo\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>