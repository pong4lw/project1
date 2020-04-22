<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <ol class="breadcrumb">
      <li class="active">顧客情報</li>
    </ol>

    <div class="panel">
        <div class="panel-heading">
            <br>
            
            <div class="row">
                <div class="col-sm-2">
                        <a href="<?php echo e(route('client.create')); ?>" class="btn"> <i class="fa fa-plus"></i> 新規登録</a>
                </div>
                <div class="col-sm-10">
                    <form action="">
                        <div class="input-group">
                      <!--
                          <input type="text" id="search" name="search" class="form-control" placeholder="Search..." value="<?php echo e($search ?? ''); ?>">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">検索</button>
                          </span>
                      -->
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripped table-hover">
                    <thead>
                        <tr>
                            <th>作業日</th>
                            <th>到着時刻</th>
                            <th>識別番号</th>
<th>受付日</th>
<th>前回作業日</th>
                            <th>名前</th>
                            <th>市街地</th>
                            <th>電話</th>
                            <th>携帯</th>
                            <th>担当者</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->type); ?></td>
                            <td class="text-right">
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kokyakukanri\resources\views/client/list.blade.php ENDPATH**/ ?>