<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ trans('dashboard/sections_trans.add_section') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.sections.store') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name"
                            class="col-form-label">{{ trans('dashboard/sections_trans.section_name') }}</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">{{ trans('dashboard/sections_trans.add') }}</button>
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">{{ trans('dashboard/sections_trans.close') }}</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
