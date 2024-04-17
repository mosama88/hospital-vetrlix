<div class="modal fade" id="edit{{ $doctor->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ trans('doctors.edit') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.doctors.update', $doctor->id) }}" autocomplete="off">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="hidden" name="id" value="" class="form-control" id="recipient-name">
                        <input type="text" name="name" value="" class="form-control" id="recipient-name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ trans('sections_trans.edit') }}</button>
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ trans('sections_trans.close') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
