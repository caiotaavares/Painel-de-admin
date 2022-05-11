<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Perfil</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url()?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Foto</th>
					<th>Email</th>
					<th>País</th>
				</tr>
			</thead>
			<tbody>
            <!-- ELEMENTOS DA TABELA -->
            <tr>
                <td>nome do usuário</td>
                <td>foto do usuario</td>
                <td>email do usuario</td>
                <td>pais do usuario</td>
                <td>
                    <!-- colcoar botão de editar -->
					<a href="" class="btn btn-warning" >
						<i class="fas fa-pencil-alt"></i>
					</a>
				</td>
            </tr>
            <!-- ELEMENTOS DA TABELA -->	
			</tbody>
		</table>
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