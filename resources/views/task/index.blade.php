<!doctype html>
<html lang="en">

<head>
    <title>Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1>i am from task index page</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-align-right">
                        <a href="{{ route('task.create') }}" class="btn btn-primary btn-sm">add task</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive-sm">
                        <table class="table table-primary table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Start date</th>
                                    <th scope="col">Finish date</th>
                                    {{-- <th scope="col">City</th> --}}
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                @foreach ($tasks as $key => $value)
                                    <tr class="">
                                        <td scope="row">{{ $key + 1 }}</td>

                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->body }}</td>
                                        <td>{{ $value->start_date }}</td>
                                        <td>{{ $value->finish_date }}</td>

                                        <td class="d-flex">
                                            <a href="" class="btn btn-success btn-sm">show</a>
                                            <a href="" class="btn btn-info btn-sm">edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
