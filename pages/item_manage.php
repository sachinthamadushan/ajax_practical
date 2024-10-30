<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage Category</h5>
                <form id="cat" method="POST">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" id="category">
                    <button id="btn_create" onclick="saveCategory();" type="submit" class="btn btn-primary mt-3">Create</button>
                    <button id="btn_update" style="display: none;" onclick="updateCategory();" type="submit" class="btn btn-warning mt-3">Update</button>
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
            <tbody id="catList">

            </tbody>
        </table>
    </div>
    <div class="col mt-3">
        <div class="card col-10">
            <div class="card-body">
                <h5 class="card-title">Manage Item</h5>
                <div class="col p-2">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name">
                </div>
                <div class="col p-2">
                    <label class="form-label">Unit Price</label>
                    <input type="number" class="form-control" id="price">
                </div>
                <div class="col p-2">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" id="img_url">
                </div>
                <div class="col p-2">
                    <label class="form-label">Select Category</label>
                    <select class="form-select" id="setCat">
                        
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>