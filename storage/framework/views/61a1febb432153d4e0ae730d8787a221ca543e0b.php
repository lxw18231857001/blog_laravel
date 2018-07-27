<?php $__env->startSection('content'); ?>

        <div class="col-sm-8">
            <blockquote>
                <p><img src="<?php echo e($user->avatar); ?>"
                        alt="" class="img-rounded" style="border-radius:500px; height: 40px"> <?php echo e($user->name); ?>

                </p>


                <footer>关注：<?php echo e($user->stars_count); ?>｜粉丝：<?php echo e($user->fans_count); ?>｜文章：<?php echo e($user->posts_count); ?></footer>
            </blockquote>
        </div>
        <div class="col-sm-8 blog-main">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">关注</a></li>
                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉丝</a></li>

                </ul>
                <?php echo $__env->make('user.badges.like',['target_user'=>$user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><a href="/user/<?php echo e($post->user->id); ?>"><?php echo e($post->user->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?></p>
                            <p class=""><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></p>


                            <p>
                            <p><?php echo str_limit($post->body,100,'...'); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <?php $__currentLoopData = $susers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-post" style="margin-top: 30px">
                            <p class=""><?php echo e($user->name); ?></p>
                            <p class="">关注：<?php echo e($user->stars_count); ?>| 粉丝：<?php echo e($user->fans_count); ?>｜ 文章：<?php echo e($user->posts_count); ?></p>

                            <?php echo $__env->make('user.badges.like',['target_user'=>$user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <?php $__currentLoopData = $fusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="blog-post" style="margin-top: 30px">
                                <p class=""><?php echo e($user->name); ?></p>
                                <p class="">关注：<?php echo e($user->stars_count); ?>| 粉丝：<?php echo e($user->fans_count); ?>｜ 文章：<?php echo e($user->posts_count); ?></p>

                                <?php echo $__env->make('user.badges.like',['target_user'=>$user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>


        </div><!-- /.blog-main -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>