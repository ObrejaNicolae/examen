<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <h3>Update Event</h3>
        <form action="<?php echo e(route('events.update', $event->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                value="<?php echo e($event->title); ?>" required>
            </div>
            <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" required><?php echo e($event->description); ?></textarea>
            </div>
            <div class="form-group">
            <label for="date">DATE</label>
            <textarea class="form-control" name="date" rows="3" required><?php echo e($event->date); ?></textarea>
            </div>
            <div class="form-group">
            <label for="location">Location</label>
            <textarea class="form-control"  name="location" rows="3" required><?php echo e($event->location); ?></textarea>
            </div>
            <button type="submit" class="btn mt-3 btn-primary">Update Event</button>
        </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\Users\Lab215-St16\Desktop\Examen\resources\views/events/edit.blade.php ENDPATH**/ ?>