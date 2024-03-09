<!-- Modal -->
<div class="modal fade" id="addModel" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="POST" id="addProductFrom">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer mb-4"></div>
                    <label for="">Name</label>
                    <input class="form-control" type="text" id="name" placeholder="Enter Name"
                        aria-label="default input example" name="NameProduct">
                    <label for="">Price</label>
                    <input class="form-control" type="text" id="price" placeholder="Enter Price"
                        aria-label="default input example"name="Price">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_Product">Save Product</button>
                </div>
            </div>
        </div>
    </form>
</div>
