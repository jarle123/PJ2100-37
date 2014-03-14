<dl>
	<dt>Navn</dt>
		<dd><?=$user->firstname.' '.$user->surname?></dd>
	<dt>Epost</dt>
		<dd><?=$user->email?></dd>
	<dt>Antall utvalg</dt>
		<dd><?=count($userClass->getUsersSelections($_SESSION['userId']))?></dd>
	<dt>Kommende aktiviteter</dt>
		<dd><?=count($userClass->getUsersActivities($_SESSION['userId']))?></dd>
</dl>
<form id="logout" method="post">
	<input name="logout" type="submit" value="Logg ut">
</form>