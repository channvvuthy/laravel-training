<html>
<body>
<form method="post" actoin="{{route('updateProfile')}}"
 enctype="multipart/form-data">
@csrf
<input type="file" name="photo"/>
<br/>
<br/>
<button type="submit">Update profile</button>
</form>
</body>
</html>