<?php require 'partials/header.php'; ?>
<h1>The view enquiries HTML goes here</h1>
<p>The table listing out all existing enquiries goes here</p>
<br/>
<table class="table">
   <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Enquiry</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($vars['enquiries'] as $enquiry): ?>  
      <tr>
        <td> <?php echo $enquiry["firstName"]; ?></td>
        <td> <?php echo $enquiry["lastName"]; ?></td>
        <td> <?php echo $enquiry["email"]; ?></td>
        <td> <?php echo $enquiry["enquiry"]; ?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>


<?php require 'partials/footer.php'; ?>