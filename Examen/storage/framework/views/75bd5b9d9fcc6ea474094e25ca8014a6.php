<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
</head>
<body>
    <h1>Create a Event</h1>
    <form action="/events" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Date</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <button type="submit" class="btn btn-primary">Salveaza</button>
    </form>
</form>
</body>
</html><?php /**PATH C:\Users\Lab215-St16\Desktop\Examen\resources\views/welcome.blade.php ENDPATH**/ ?>