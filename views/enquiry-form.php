<?php require 'partials/header.php'; ?>

<h1><?php echo $vars["title"]; ?></h1>

<div class="container">
    <form method="post" action="/process-enquiry-form">
        <div class="form-group">
            <label for="first_name"  >First name</label>
            <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name" >Last name</label>
            <input type="text" name="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" name="email_address"  class="form-control">
        </div>
        <div class="form-group">
            <label for="enquiry" >Enquiry</label>
            <textarea type="text" name="enquiry"  class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>