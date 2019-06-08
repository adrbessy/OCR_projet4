<div class="container">
	<h2>Modification d'un épisode</h2>
	<form method="post" enctype="multipart/form-data">
		<div>
			<label>Selectionnez une image à charger:</label></br>
			<input type="hidden" name="size" value="1000000">
		    <input type="file" name="image" id="image" accept="image/*">
	    </div>
	    <div>
	        <label for="title">Titre</label><br />
	        <input type="text" id="title" name="title" value="<?= $post->title?>" />
	    </div>
	    <div>
	        <label for="content">Contenu</label><br />
	        <textarea id="content" name="content"><?=$post->content?></textarea>
	    </div>
	    </br>
	    <div>
	        <button class="btn btn-primary mb-2"/>Sauvegarder</div>
	    </div>
	</form>
</div>