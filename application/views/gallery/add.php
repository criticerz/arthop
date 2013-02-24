<form action="<?= base_url('/gallery/add'); ?>" method="post" class="form-horizontal">
  


  <div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
      <input type="text" id="address" placeholder="Address">
    </div>
  </div>


  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>