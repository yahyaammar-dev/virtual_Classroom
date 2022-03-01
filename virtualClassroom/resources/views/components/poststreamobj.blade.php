<h4 class="mt-5">Post a lecture</h4>

<div class="border border-secondary p-5 mb-5">
    <form method="POST" action="poststream" enctype="multipart/form-data">
        @csrf
        <input type="text" name="classid" value="<?php echo $id; ?>"/><br /><br />
        <input type="text" name="title" placeholder="title"/><br /><br />
        <input type="file" name="file" /><br /><br />
        <input type="submit" name="submit" />
    </form>
</div>