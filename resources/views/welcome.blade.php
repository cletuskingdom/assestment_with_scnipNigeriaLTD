<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Catalog Sorting Solution for Scnip</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <section class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            @foreach ($tb_head as $data)                    
                                <th scope="col">{{ $data }}</th>
                            @endforeach
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            @foreach ($sortedProducts as $data2)
                                <tr>
                                    <td scope="col">{{ $data2->id }}</td>
                                    <td scope="col">{{ $data2->name }}</td>
                                    <td scope="col">{{ $data2->price }}</td>
                                    <td scope="col">{{ $data2->sales_count }}</td>
                                    <td scope="col">{{ $data2->views_count }}</td>
                                    <td scope="col">{{ $data2->created }}</td>
                                </tr>                 
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>