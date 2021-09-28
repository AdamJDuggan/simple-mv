<?php require 'partials/header.php'; ?>

<h1><?php echo $vars["title"]; ?></h1>

<div class="container">
    <form method="post" action="/process-enquiry-form">
        <div class="form-group">
            <label for="firstName"  >First name</label>
            <input type="text" name="firstName" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastName" >Last name</label>
            <input type="text" name="lastName" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" name="email"  class="form-control">
        </div>
        <div class="form-group">
            <label for="enquiry" >Enquiry</label>
            <textarea type="text" name="enquiry"  class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>