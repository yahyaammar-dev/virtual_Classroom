<form action="submitpayment" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" />
    <input type="submit" />
</form>