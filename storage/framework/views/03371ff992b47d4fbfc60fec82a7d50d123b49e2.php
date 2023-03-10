<?php $__env->startSection('content'); ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Create Blog</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <form id="product-form" action="<?php echo e(route('save-blog')); ?>" method="POST" enctype="multipart/form-data">
                        	<?php echo csrf_field(); ?>
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blog Title *</strong> </label>
                                        <input type="text" name="blog_title" class="form-control" id="blog_title" aria-describedby="blog_title" required>
                                        <span class="validation-msg" id="blog_title-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blog Image *</strong> </label>
                                        <input type="file" name="blog_image" class="form-control" id="blog_image" aria-describedby="blog_image" required>
                                        <span class="validation-msg" id="blog_image-error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blog</strong> </label>
                                        
                                        <textarea name="blog" class="form-control"></textarea>
                                        <span class="validation-msg" id="blog-error"></span>
                                    </div>
                                </div>
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\salepropos\salepropos\resources\views/blog/add_blog.blade.php ENDPATH**/ ?>