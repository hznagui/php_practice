<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1> Upload one file </h1>
            <form action="uploadmulti.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="avatars[]" id="">
                <input type="file" name="avatars[]" id="">
                <input type="file" name="avatars[]" id="">
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    </div>
</div>