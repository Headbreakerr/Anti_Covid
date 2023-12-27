<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>


    <form action="{{route('addhos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table">
        <tr>
            <td>Hospital Name</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Hospital Addrees</td>
            <td><input type="text" name="address" id=""></td>
        </tr>
        <tr>
            <td>Hospital Contact</td>
            <td><input type="text" name="contact" id=""></td>
        </tr>
        <tr>
            <td>Hospital E-Mail</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Hospital Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td>Hospital image</td>
            <td><input type="file" name="image" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" name="" id=""></td>
        </tr>
        
    </table>
 </form>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
