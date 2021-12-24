<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href={{ url("img/favicon.png") }}>
    <link rel="stylesheet" href={{ url("css/main.css") }}>
    <title>Noter</title>
    <script src="https://kit.fontawesome.com/6c2c868cfb.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6c2c868cfb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ 
        selector:'textarea',
        menubar: false,
        plugins: 'code lists',
        toolbar: 'align underline bold italic code' 
        });</script>
</head>
<body>
    
    {{ $content }}
    @if (session()->has('success'))
    <div>
        <p style="position: fix;background-color: #3a87be; color: #fff; padding: 1rem; text-align: center;">{{ session('success') }}</p>
    </div>
    @endif
    {{ $content }}
</body>
</html>