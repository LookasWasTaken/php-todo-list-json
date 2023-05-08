<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONTAWESOME CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- EXTERNAL PERSONAL CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>To-Do-List</title>
</head>

<body>

    <div id="app">
        <div class="container py-4 text-center">
            <h1>TO DO LIST</h1>
            <ul class="list-unstyled w-50 mx-auto">
                <li v-for="task in tasks" class="mb-2 bg-white text-black p-2 rounded">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="task">
                            {{task.task}}
                        </div>
                        <button class="trash btn"><i class="fas fa-trash"></i></button>
                    </div>
                </li>
            </ul>
            <div class="input-group mb-3 w-50 mx-auto">
                <input type="text" class="form-control" placeholder="Add Element..." aria-label="Add Element..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary btn_yellow" type="button" id="button-addon2">Add</button>
            </div>
        </div>
    </div>
    <!-- /#app -->

    <!-- AXIOS CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js" integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <!-- EXTERNAL VUE JS CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- EXTERNAL PERSONAL JS -->
    <script src="./assets/js/app.js"></script>

</body>

</html>