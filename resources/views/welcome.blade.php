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
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('single_sorting') }}" method="post">
                        @csrf

                        <div class="input-group mb-3">
                            <select name="sortBy" id="" class="form-select">
                                <option value="price">PRICE</option>
                                <option value="ratio">RATIO</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-success px-4">Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Single sorting
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Multiple sorting
                        </label>
                    </div>
                </div>
            </div>

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
                                    @foreach ($tb_head as $data)                    
                                        <td scope="col">{{ $data2->$data }}</td>
                                    @endforeach
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