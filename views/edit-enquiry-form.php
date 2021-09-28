<?php require 'partials/header.php'; ?>

<h1><?php echo $vars["title"]; ?></h1>

<div class="container">

    <form method="post" action="/process-edit-enquiry">
        <div class="form-group">
            <label for="firstName"  >First name</label>
            <input value="<?php echo $vars["firstName"]; ?>" type="text" name="firstName" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastName" >Last name</label>
            <input value="<?php echo $vars["lastName"]; ?>" type="text" name="lastName" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" >Email</label>
            <input value="<?php echo $vars["email"]; ?>" type="email" name="email"  class="form-control">
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