
<a href="<?php echo site_url('admin/tambah_dataset');?>" class="btn btn-xs btn-info" style="margin-bottom: 15px"> <i class="fas fa-info-circle"> Tambah Data</i></a>
<table>

	<?php
	foreach ($data as $key) {
	?>
	<tr>
		<td><?php echo $key->id_dataset; ?></td>
		<td><?php echo $key->nama; ?></td>
		<?php foreach ($datadetail as $keys) {
			if ($key->id_dataset==$keys->id_dataset) { ?>
					<td><?php echo $keys->nilai; ?></td>
			<?php }
		} ?>
		<td><a href="<?php echo site_url('admin/hapusDataset/'.$key->id_dataset);?>">HAPUS</a> </td>
	</tr>
	<?php } ?>
</table>