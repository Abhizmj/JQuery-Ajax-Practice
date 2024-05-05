<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="getData">
        <h1>Welcome to Jquery Ajax</h1>
    </div>
    <br>
    <input type="button" value="Click to get Data" idbtn>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                $("#getData").load("test.txt");
            });
        });
    </script>
</body>
</html>