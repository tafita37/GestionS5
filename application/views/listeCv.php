<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver1">
<div class="table100-firstcol">
<table>
<thead>
	<tr class="row100 head">
		<th class="cell100 column1">Candidat</th>
	</tr>
</thead>

<tbody>
<?php foreach ($listes as $liste) { ?> 
	<tr class="row100 body">
		<td class="cell100 column1"><?php echo $liste['nom'];echo" ";echo $liste['prenom']; ?></td>
	</tr>
    <?php } ?>

</tbody>
</table>

</div>
	<div class="wrap-table100-nextcols js-pscroll">
	<div class="table100-nextcols">

<table>
	<thead>
		<tr class="row100 head">
			<th class="cell100 column3">Tel</th>
			<th class="cell100 column2"> email</th>
			<th class="cell100 column5"></th>
        </tr>
	</thead>
	<tbody>
    <?php foreach ($listes as $liste) { ?> 
		<tr class="row100 body">
			<td class="cell100 column3"><?php echo $liste['telephone']; ?></td>
			<td class="cell100 column4"><?php echo $liste['email']; ?></td>
			<td class="cell100 column5"><a href="detailCv?id=<?php echo $liste['id_cv']; ?>" class="__cf_email__" >[voir&#160;]</a></td>
		</tr>
        <?php } ?>
	</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>