<div class="row">
		<div class="col-6">
			<!-- Button trigger modal -->
			<h3>Daftar Mahasiswa</h3>
					<ul class="list-group">
						<?php foreach ($data['mhs'] as $mhs) :?>
					  <li class="list-group-item "><?= $mhs['nama']; ?>
					  	<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin');">hapus</a>
					  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					  </li>
					  <?php endforeach; ?>
					</ul>
					
				
		</div>
	</div>	