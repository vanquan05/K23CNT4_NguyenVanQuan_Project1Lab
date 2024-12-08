<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Nguyen Van Quan</h1>
                    </div>
                <div class="card-body">
                        <form method="POST" action="{{route('nvhlogin.nvhsubmit')}}">
                            @csrf
                            <div class="form-group">
                                <label for="fullName">FullName:</label>
                                <input type="text" name="fullName" id="fullName" class="form-control">
                            </div>
            <div class="form-group">
    <           label for="email">Email:</label>
                <input type="email" name="email" id="email"

                 class="form-control">

            </div>
        <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control"

   
    name="password" id="password" value="12346a@">
    </div>

    <button type="submit" class="btn btn-primary mt-
    3">Submit</button>

</form>
</div>
</div>
</div>
</div>
</section>


    </section>
</body>
</html>