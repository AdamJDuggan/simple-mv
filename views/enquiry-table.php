<?php require 'partials/header.php'; ?>
<link rel="stylesheet" href="../index.css" type="text/css">

<h1><?php echo $vars["title"]; ?></h1>
<br/>
<table class="table table-bordered table-striped">
   <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Enquiry</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($vars['enquiries'] as $enquiry): ?>  
      <tr >
        <td> <?php echo $enquiry["first_name"]; ?></td>
        <td> <?php echo $enquiry["last_name"]; ?></td>
        <td> <?php echo $enquiry["email_address"]; ?></td>
        <td class="truncate"> <?php echo $enquiry["enquiry"]; ?></td>
      <td><form method="post" action="/render-edit-enquiry-form">
      <input type="hidden" value="<?php echo $enquiry["id"]; ?>" name="id"/>
      <button class="btn btn-info">Edit</button></form></td>
      <td><form method="post" action="/process-delete-enquiry">
      <input type="hidden" value="<?php echo $enquiry["id"]; ?>" name="id"/>
      <button class="btn btn-danger">Delete</button></form></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>


<?php require 'partials/footer.php'; ?>