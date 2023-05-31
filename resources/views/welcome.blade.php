<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">
                    <h1 class="bg-warning p-3">Add User Data</h1>
                </div>
                <div class="card-body">
                    <form class="shadow" action="/register"  method="POST">
                        @csrf
                        <input name="name" class="form-control mb-3" type="text" placeholder="Enter Name">

                        <input name="Email" class="form-control mb-3" type="email" placeholder="Enter Email">

                        <input name="password" class="form-control mb-3" type="password" placeholder="Enter Password">

                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>




                    <form class="shadow" action="/login"  method="POST">
                        @csrf
                        <input name="name" class="form-control mb-3" type="text" placeholder="Enter Name">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>