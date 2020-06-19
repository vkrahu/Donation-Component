asdf<form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' id="imagefile">
  <input type='submit' value='Upload' name='upload'> 
</form>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	 $(document).off('change', '#imagefile').on('change', '#imagefile', function(event) {
		var fd = new FormData();
		fd.append('img_file',this.files[0]);
		fd.append('upload','1');
		$.ajax({
                url: 'test2.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                dataType:"json",
                success: function(response) {
                    alert("done")
                },
                complete: function()
                {
                    alert('File uploaded')
                   
                }
            });
	 })
</script>
