@if (session()->has('success'))
    <div class="container">
        <div class="row">
            <div class="alert alert-success alert-dismissible show fade">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif
@if (session()->has('error'))
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            </div>
        </div>
    </div>

@endif


