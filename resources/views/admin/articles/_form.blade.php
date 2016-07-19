<textarea name="body" id="editor" cols="30" rows="10"></textarea>

<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript" charset="utf-8" ></script>
<script>
	//CKEDITOR EMBED
	if ($('#editor').length) {
		CKEDITOR.replace('editor', {
			filebrowserBrowseUrl 	   : '../../kcfinder/browse.php?opener=ckeditor&type=files',
			filebrowserImageBrowseUrl  : '../../kcfinder/browse.php?opener=ckeditor&type=images',
			filebrowserFlashBrowseUrl  : '../../kcfinder/browse.php?opener=ckeditor&type=flash',
			filebrowserUploadUrl  	   : '../../kcfinder/upload.php?opener=ckeditor&type=files',
			filebrowserImageUploadUrl  : '../../kcfinder/upload.php?opener=ckeditor&type=images',
			filebrowserFlashUploadUrl  : '../../kcfinder/upload.php?opener=ckeditor&type=flash',
		});
	}
</script>
