<div class="container pt-5">
    <div class="row align-items-center">

        @for($i = 0; $i < 4; $i++)
            <div class="col-3">
                <h4 class="mb-3">
                    Product #{{ $i + 1 }}
                    <span class="fw-bold rounded text-success float-end">&pound;0.00</span>
                </h4>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Quantity">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Add</button>
                    </div>
                </div>
            </div>
        @endfor

    </div>
</div>
