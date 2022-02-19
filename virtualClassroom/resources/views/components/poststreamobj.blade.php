<form method="POST" action="poststream" enctype="multipart/form-data">
    @csrf
    <input type="text" name="classid" value="<?php echo $id; ?>"/><br />
    <input type="text" name="title" placeholder="title"/><br />
    <input type="file" name="file" /><br />
    <input type="submit" name="submit" />
</form>