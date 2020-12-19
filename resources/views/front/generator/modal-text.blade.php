<div class="modal fade" id="cellclickmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dodaj tekst</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ajax.store')}}" method="post" class="row" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="form_bgcolor">Kolor tła:</label>
                            <input type="text" id="showPaletteOnly" name="bgcolor" value="{{$modalbgcolor}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea id="" cols="30" rows="10" class="tinymce" id="tinyeditor" name="text">{!! $modaltext !!}</textarea>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="cell" value="{{$modalcell}}">
                        <input type="hidden" name="id" value="{{$modalid}}">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/spectrum.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/editor/tinymce.min.js') }}"></script>

<script>
    $('#cellclickmodal').modal('show');
    $(document).on('hidden.bs.modal', function () {
        $('#cellclickmodal').remove();
    });

    $("#showPaletteOnly").spectrum({
        showPaletteOnly: true,
        preferredFormat: "hex",
        showPalette:true,
        color: '{{$modalbgcolor}}',
        hideAfterPaletteSelect:true,
        palette: [
            ['#AEA935', '#54BBBA', '#E09F25', '#804180', '#00AEC7', '#7197CA', '#EE8694', '#FFD616', '#A8438D', '#199C69', '#E95F47', '#0062A9', '#9C9E9F', '#97BF0D', '#55555A', '#ADBCC9', '#B6D9B7', '#B29FB0', '#D9D1C8', '#F08F75', '#FDD384', '#7ABCCE', '#DDBBA3', '#7FB8AC', '#DBB4B7', '#C8DCDC', '#D9C594', '#CAC7C4', '#C0D272']
        ],
        change: function(color) {
            tinymce.activeEditor.getBody().style.backgroundColor = color;
        }
    });
    tinymce.init({
        selector: ".tinymce",
        language: "pl",
        branding: false,
        height: 180,
        menubar: false,
        convert_urls: false,
        remove_script_host: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        forced_root_block : "p",
        toolbar1: "bold italic | forecolor | fontselect fontsizeselect | link",
        relative_urls: false,
        font_formats: "Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde",
        setup: function (ed) {
            ed.on('init', function() {
                this.getDoc().body.style.fontFamily = 'Arial';
                tinymce.activeEditor.getBody().style.backgroundColor = '{{$modalbgcolor}}';
            });
        }
    });
    $(document).on('focusin', function(e) {
        if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
            e.stopImmediatePropagation();
        }
    });
</script>
