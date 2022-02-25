<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/result.css">
    <script src="https://kit.fontawesome.com/2088610def.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Demo header-->
    <section class="pb-5 header text-center js-pb-5">
        <div class="result js-result">
            <header class="py-5">
                <h1 class="display-4">Bootstrap add, edit, delete buttons</h1>               
            </header>


            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">

                            <!-- Responsive table -->
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Module</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>                                          
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">                                               
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Download"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>          
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">                   
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>                                           
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">                                                  
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Martin</td>                                           
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">                                                    
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>