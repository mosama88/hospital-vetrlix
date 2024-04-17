<div class="modal fade" id="delete{{ $doctor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        {{ trans('Dashboard/sections_trans.warning') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dashboard.doctors.destroy', 'test') }}" method="post">

                        @method('DELETE')
                        @csrf
                        <div class="form-group">
                            <div class="modal-body">
                                {{ trans('Dashboard/sections_trans.warning_message') }} <strong
                                    class="text-danger">{{ $doctors->name }}</strong> ?
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $doctors->id }}" class="form-control"
                                id="recipient-name">
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-danger">{{ trans('Dashboard/sections_trans.delete') }}</button>
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ trans('Dashboard/sections_trans.close') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
