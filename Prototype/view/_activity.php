<tr>
	<td style="background-image: url(<?=ROOT?>public/files/<?=$activity->selection_logo?>);"><?=$activity->selection_name?></td>
	<td><a href="<?=ROOT?>activity/<?=$activity->id?>"><span><?=$activity->name?></span><span><?=$activity->descriptionshort?></span></a></td>
	<td><?=timeFormat($activity->time)?></td>
</tr>