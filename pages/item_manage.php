<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage Category</h5>
                <form id="cat" method="POST">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" id="category">
                    <button onclick="saveCategory();" type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Category</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Vegetable</td>
                    <td><a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>