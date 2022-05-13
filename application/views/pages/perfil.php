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
			<img src="<?= base_url()?>assets/images/user-avatar.png" width="350" height="350""/>
			<button href="#janela1" rel="modal">Janela modal</button>
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

<div class="window" id="janela1">
    <a href="#" class="fechar">X Fechar</a>
    <h4>Primeira janela moda</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis auctor tempus. Lorem ipsum dolor sit amet,</p>
    <p>Morbi dui lacus, placerat eget pretium vehicula, mollis id ligula. Nulla facilisi. </p>
</div>
<!-- mascara para cobrir o site --> 
<div id="mascara"></div>