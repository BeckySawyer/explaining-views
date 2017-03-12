<?php
//The header grabs your basic head of your HTML Page.
require 'partials/header.php';
?>
<div>

  <h1>Welcome</h1>

  <form>
  <div class="form-group">
    <label for="email"> Name </label>
    <input type="text" class="form-control" id="email" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="password"> Email </label>
    <input type="email" class="form-control" id="password" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="country"> Option </label>
    <select class="form-control" id="web">
    <?php foreach ($contactOptions as $key => $reason): ?>
      <option value="<?= $reason['value']; ?>"><?=$reason['name'];?></option>
       <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>

<?php
//Footer grabs the closing of HTML page.
require 'partials/footer.php';
?>