<?php require 'partials/header.php'; ?>

<h1><?php echo $vars["title"]; ?></h1>

<div class="container">

    <form method="post" action="/process-edit-enquiry">
        <div class="form-group">
            <label for="first_name"  >First name</label>
            <input value="<?php echo $vars["first_name"]; ?>" type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name" >Last name</label>
            <input value="<?php echo $vars["last_name"]; ?>" type="text" name="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" >Email</label>
            <input value="<?php echo $vars["email_address"]; ?>" type="email" name="email_address"  class="form-control">
        </div>
        <div class="form-group">
            <label for="enquiry" >Enquiry</label>
            <textarea type="text" name="enquiry"  class="form-control"><?php echo $vars["enquiry"]; ?></textarea>
        </div>
        <input type="hidden" value="<?php echo $vars["id"]; ?>" name="id" />
        <button class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>