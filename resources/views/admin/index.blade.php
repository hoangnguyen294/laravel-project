<!DOCTYPE html>
<html>
<head>
@include('admin.partials.head')
</head>
<body>
	@include('admin.partials.navbar')

	@include('admin.partials.category')

	@yield('main')

	@include('admin.partials.js')
</body>

</html>
