<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo SEO::generate(); ?>

    
    <!-- BEGIN: CSS -->
    <?php
    $headerSnippets = App\Models\Headersnippets::where('status','Active')->whereNull('deleted_at')->get();
    ?>
    <?php $__empty_1 = true; $__currentLoopData = $headerSnippets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snippet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php echo $snippet->description; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>

    <!-- SITE TITLE -->
    <!--<title>Shiva International Residential School</title>-->
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/responsive.css" />
    <style>
        /* floating btn */
        .floating_btn a i {
            padding-right: 0px;
        }

        .banner_floating_sec {
            position: fixed;
            right: 0;
            top: 200px;
            z-index: 99;
        }

        .banner_floating_sec_mobile {
            position: fixed;
            padding: 18px 8px 8px;
            bottom: 0px;
            left: 0;
            right: 0;
            z-index: 99;
            margin: 0 auto;
            /* background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 50%); */
        }

        .floating_btn {
            text-align: left;
            margin-bottom: 0px;
            width: 110px;
            background: #e31e24;
            position: absolute;
            right: 0px;
            cursor: pointer;
            -webkit-transition: all ease .5s;
            -moz-transition: all ease .5s;
            -ms-transition: all ease .5s;
            -o-transition: all ease .5s;
            transition: all ease .5s;
            text-transform: uppercase;
        }

        .floating_btn.active {
            left: 0;
        }

        /*.floating_btn_1 {
    top: 0px;
}*/
        .floating_btn_1 {
            top: 0px;
            transform: rotate(-90deg);
            right: -20px;
            width: 110px;
            text-align: center;
            background: #00bbf9 !important;
            padding: 5px 0px;
        }

        .floating_btn_1:hover {
            background: #333045 !important;
            right: -20px;
        }

        .floating_btn_2 {
            top: 120px;
            transform: rotate(-90deg);
            right: -20px;
            width: 110px;
            text-align: center;
            padding: 5px 0px;
        }

        .floating_btn_2:hover {
            background: #333045;
            right: -20px;
        }

        .floating_btn a {
            color: #fff;
        }

        .floating_btn:hover a {
            color: #fff;
            text-decoration: none;
        }
    </style>

    <!-- LIVEWIRE STYLES -->
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <?php echo $__env->make('livewire.frontend.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end header -->

    <!-- Main Content -->

    <?php echo e($slot); ?>


    <!-- Main Content Ends-->

    <!-- start footer -->
    <?php echo $__env->make('livewire.frontend.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end footer -->

    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->

    <?php echo \Livewire\Livewire::scripts(); ?>



    <!-- javascript -->
    <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/main.js"></script>
    <!--footer snippets start -->
<?php 
    $footerSnippets = App\Models\Footersnippets::where('status','Active')->whereNull('deleted_at')->get();
?>
    
    <?php $__empty_1 = true; $__currentLoopData = $footerSnippets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snippet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <?php echo $snippet->description; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    
    <?php endif; ?>
<!--footer snippets start -->
    <!-- sticy sidebar js -->
    <script type="text/javascript">
        $(function() {
            var top = $('#sidebar').offset().top - parseFloat($('#sidebar').css('marginTop').replace(/auto/, 0));
            var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

            var maxY = footTop - $('#sidebar').outerHeight();

            $(window).scroll(function(evt) {
                var y = $(this).scrollTop();
                if (y > top) {
                    if (y < maxY) {
                        $('#sidebar').addClass('fixed').removeAttr('style');
                    } else {
                        $('#sidebar').removeClass('fixed').css({
                            position: 'absolute',
                            top: (maxY - top) + 'px'
                        });
                    }
                } else {
                    $('#sidebar').removeClass('fixed');
                }
            });
        });
    </script>
    
</body>

</html><?php /**PATH C:\xampp\htdocs\shiva-live\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>