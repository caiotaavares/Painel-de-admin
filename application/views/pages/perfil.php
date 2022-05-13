<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Perfil</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url()?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
		</div>
	</div>

	<div class="text-center">
		<div>
			<!-- BUG aprender a pegar imagem do db e por aqui! -->
			<?php if(!empty($_SESSION['logged_user']['user_avatar'])) { ?>
				<img src="<?= $_SESSION['logged_user']['user_avatar'] ?>" width="50" height="50">
			<?php } else { ?>
				<img src="<?= base_url()?>assets/images/user-avatar.jpg" width="350" height="350""/>
			<?php } ?>
		</div>
		<div>
			<h1><?= $_SESSION['logged_user']['name'] ?></h1>
		</div>
		<div>
			<h3><?= $_SESSION['logged_user']['email'] ?></h3>
		</div>
		<div>
			<h4><?= $_SESSION['logged_user']['country'] ?></h4>
		</div>
	</div>
</main>

<script>
	function GoDelete(id) {
		var Myurl = `games/delete/${id}`;
		if (confirm('Deseja realmente apagar este registro?')) {
			window.location.href = Myurl;
		}
	}
</script>