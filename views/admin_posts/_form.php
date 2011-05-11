<?php if(isset($_POST['submit']) && $error) { ?><p id="error"><?php echo $error; ?></p><?php } ?>
	
	<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label for="posttitle">Post title:</label>
			<input id="posttitle" name="post[title]" value="<?php echo isset($post->title) ? $post->title : ''; ?>" />
		</p>
		<p>
			<label for="postslug">Post slug:</label>
			<input id="postslug" class="monospace" name="post[slug]" value="<?php echo isset($post->slug) ? $post->slug : ''; ?>" />
		</p>
		<p>
			<label for="postexcerpt">Post excerpt:</label>
			<textarea id="postexcerpt" name="post[excerpt]"><?php echo isset($post->excerpt) ? $post->excerpt : ''; ?></textarea>
		</p>
		<p>
			<label for="posthtml">Post HTML:</label>
			<textarea id="posthtml" class="monospace" name="post[content]"><?php echo isset($post->content) ? $post->content : ''; ?></textarea>
		</p>
		<p>
			<label for="postcss">Post CSS:</label>
			<input type="file" id="postcss" name="post[css]" />
		</p>
		<p>
			<label for="postjs">Post Javascript:</label>
			<input type="file" id="postjs" name="post[js]" />
		</p>
		<p>
			<input name="submit" type="submit" value="Save changes" />
		</p>
	</form>