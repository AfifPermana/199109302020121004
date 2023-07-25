<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap 5 Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		.div-tbl {
			border: 1px solid gray;
			padding: 15px;
			overflow-y: auto;
			height: 600px;
		}
	</style>
</head>

<body>

	<div class="container-fluid p-5 bg-primary text-white text-center">
		<h1>List Pendaftaran Tim Development <br> Mahkamah Agung RI</h1>
	</div>

	<div class="containers mt-5 mx-5">
		<div class="div-tbl">
			<table class="table table-striped">
				<thead>
					<tr class="align-middle">
						<th>Nama</th>
						<th>NIP</th>
						<th>Satuan Kerja</th>
						<th>Posisi</th>
						<th>Bahasa Pemrograman</th>
						<th>Framework</th>
						<th>Database</th>
						<th>Tools</th>
						<th>Proyek Mobile Apps</th>
						<th>Nilai 1</th>
						<th>Nilai 2</th>
						<th>Nilai 3</th>
						<th>Nilai File</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($pendaftar as $p) {
					?>
						<tr class="align-middle">
							<td><?= $p['nama'] ?></td>
							<td><?= $p['nip'] ?></td>
							<td><?= $p['satuan_kerja'] ?></td>
							<td><?= $p['posisi_yang_dipilih'] ?></td>
							<td><?= $p['bahasa_pemrograman_yang_dikuasai'] ?></td>
							<td><?= isset($p['framework_bahasa_pemrograman_yang_dikuasai']) ? $p['framework_bahasa_pemrograman_yang_dikuasai'] : '-' ?></td>
							<td><?= $p['database_yang_dikuasai'] ?></td>
							<td><?= $p['tools_yang_dikuasai'] ?></td>
							<td><?= $p['pernah_membuat_mobile_apps'] ?></td>
							<td><?php
								for ($x = 0; $x < count($nilai); $x++) {
									if ($p['id'] == strval($nilai[$x]['id_pendaftar']) && $nilai[$x]['jenis_attr'] == 'nilai_t1') {
										echo $nilai[$x]['value'];
									}
								}
								?>
							</td>
							<td><?php
								for ($x = 0; $x < count($nilai); $x++) {
									if ($p['id'] == strval($nilai[$x]['id_pendaftar']) && $nilai[$x]['jenis_attr'] == 'nilai_t2') {
										echo $nilai[$x]['value'];
									}
								}
								?>
							</td>
							<td><?php
								for ($x = 0; $x < count($nilai); $x++) {
									if ($p['id'] == strval($nilai[$x]['id_pendaftar']) && $nilai[$x]['jenis_attr'] == 'nilai_t3') {
										echo $nilai[$x]['value'];
									}
								}
								?>
							</td>
							<td><?php
								for ($x = 0; $x < count($nilai); $x++) {
									if ($p['id'] == strval($nilai[$x]['id_pendaftar']) && $nilai[$x]['jenis_attr'] == 'url_file') {
										echo '<a href="' . $nilai[$x]['value'] . '" target="_blank" > Lampiran </a>';
									}
								}
								?>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>

	</div>
</body>

</html>