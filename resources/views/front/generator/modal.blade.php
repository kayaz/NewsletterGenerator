<div class="modal" id="cellclickmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$modaltitle}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ajax.store')}}" method="post" class="row" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="form_url">Adres URL</label>
                            <input type="text" class="form-control" id="form_url" name="url" value="{{$modalurl}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="form_bgcolor">Kolor tła</label>
                            <input type="text" class="form-control" id="form_bgcolor" name="bgcolor" value="{{$modalbgcolor}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="form_file">Obrazek o wymiarach szerokość: {{$modalfilewidth}}px / {{$modalfileheight}}px</label>
                            <input type="file" class="form-control-file" name="file" aria-describedby="fileHelp" id="form_file">
                            <small id="fileHelp" class="form-text text-muted">Obrazek zostanie docięty do podanych wymiarów</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="cell" value="{{$modalfilecell}}">
                        <input type="hidden" name="id" value="{{$modalid}}">
                        <input type="hidden" name="width" value="{{$modalfilewidth}}">
                        <input type="hidden" name="height" value="{{$modalfileheight}}">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/fineuploader.js') }}"></script>
<script>
    $('#cellclickmodal').modal('show');
    $(document).on('hidden.bs.modal', function () {
        $('#cellclickmodal').remove();
    });
</script>
