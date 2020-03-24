<html>
<?php include('views/head.php'); ?>
<body>
<?php include('views/header.php'); ?>

<div class="container">
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success" role="alert">
            Message sent successfully!
        </div>
    <?php endif; ?>

    <h2>Contact</h2>
    <div class="row mt-4">
        <form action="controllers/contact_form.php" method="POST" class="col-lg">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="foo@bar.net">
            </div>
            <div class="form-group">
                <label for="first_name">Full name or company</label>
                <input type="text" class="form-control" name="full_name_or_company" placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment" rows="10"></textarea>
            </div>
            <hr>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
