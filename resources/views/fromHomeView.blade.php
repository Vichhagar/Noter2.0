<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="stylesheet" href="./main.css">
    <title>Noter | Create</title>
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
    <main class="main">
        <div class="header" style="margin-bottom: 2rem;">
            <a href="./home.html"><img src="./Logo.png" alt="noter logo"></a>
        </div>
            <h1>Title of the note.</h1>
            <p style="overflow-y:scroll; height: 38vh; margin-top: 1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque enim sint culpa nam corrupti quas laboriosam, consequatur at accusamus! Dolorem, non. Illum laudantium adipisci neque earum blanditiis architecto cupiditate nesciunt illo perspiciatis aliquam tempore, quidem dicta quibusdam quaerat accusamus dolorem, ipsum mollitia facilis sint? Consectetur repellat aliquid perferendis ea odio expedita neque quam quasi magnam, optio suscipit, labore sequi quas illum reprehenderit enim? Architecto ratione quos tempora tempore, reiciendis illo quisquam vitae blanditiis sapiente sed assumenda officiis impedit est sunt excepturi odio aliquam tenetur aut deserunt neque at iure. Magnam cumque libero odio ducimus consequuntur rerum veritatis nemo vero sequi.</p>
            <p style="margin: 1rem 0;">Public</p>
            <div class="formButton">
                <a class="viewPage" href="./dashboard.html"><i class="fa fa-check" aria-hidden="true"></i></a>
            </div>
    </main>

</body>
</html>