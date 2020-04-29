
<ul class="nav justify-content-center" style="border: 1px solid #3b6978; width:1000px; margin:0 auto; background-color: #3b6978;">
  <li class="nav-item">
  <a class="nav-link" href="index.php?P=home">Főoldal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="modal" href="#exampleModal">Bejelentkezés</a>

<?php if(!IsUserLoggedIn()) : ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bejelentkezés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerPassword">Felhasználónév</label>
			<input type="text" class="form-control" id="registerPassword">
		</div>
		<div class="form-group col-md-6">
			<label for="registerPassword1">Jelszó</label>
			<input type="password" class="form-control" id="registerPassword1">
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Vissza</button>
        <button type="submit" class="btn btn-primary" name="login">Bejelentkezés</button>
      </div>
      </form>
    </div>
  </div>
</div>
  </li>
  <li class="nav-item">
    
    <a class="nav-link" href="index.php?P=register">Regisztráció</a>

  </li>
  <?php else : ?>
    <?php endif;?>
  
</ul>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  