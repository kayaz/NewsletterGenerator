@extends('welcome')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-7 pt-5 pb-5">
            <div id="table">
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                    <tr>
                        <td width="200" height="40" bgcolor="black">&nbsp;</td>
                        <td width="200" height="40" bgcolor="black"><img src="{{ asset('uploads/header.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:40px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="40"></td>
                        <td width="200" height="40" bgcolor="black">&nbsp;</td>
                    </tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                    <tr><td width="600" height="30" align="center">&nbsp;</td></tr>
                </table>
                @foreach($list as $row)
                    <div class="table-row" data-row="{{$row->id}}" id="recordsArray_{{ $row->id }}">
                        <span class="bttn bttn-delete" data-id="{{$row->id}}"><i class="lar la-trash-alt"></i></span>
                        @include('template.'.$row->name, array(
                            'cell_1' => $row->cell_1,
                            'cell_2' => $row->cell_2,
                            'cell_3' => $row->cell_3,
                            'cell_1_url' => $row->cell_1_url,
                            'cell_2_url' => $row->cell_2_url,
                            'cell_3_url' => $row->cell_3_url,
                            'cell_1_bgcolor' => $row->cell_1_bgcolor,
                            'cell_2_bgcolor' => $row->cell_2_bgcolor,
                            'cell_3_bgcolor' => $row->cell_3_bgcolor
                            ))
                        <span class="bttn bttn-move"><i class="las la-arrows-alt-v"></i></span>
                    </div>
                @endforeach
            </div>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td width="200" height="126"><img src="{{ asset('uploads/stopka_1.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:126px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="126"></td>
                    <td width="200" height="126"><img src="{{ asset('uploads/stopka_2.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:126px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="126"></td>
                    <td width="200" height="126"><img src="{{ asset('uploads/stopka_3.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:126px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="126"></td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr><td width="600" height="30" align="center">&nbsp;</td></tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td style="width:600px;height:30px" width="600" height="30">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rowModal"><i class="las la-plus-square"></i> Dodaj moduł</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="rowModal" tabindex="-1" role="dialog" aria-labelledby="rowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wybierz moduł</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <button id="grid-x3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:60px;padding:0;border-collapse:collapse">
                                <tr>
                                    <td style="width:18px;height:18px" width="18" height="18" class="block"></td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:18px;height:18px" width="3" height="18" class="block"></td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:18px;height:18px" width="18" height="18" class="block"></td>
                                </tr>
                            </table>
                        </button>
                    </div>
                    <div class="col">
                        <button id="grid-x2x1">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:60px;padding:0;border-collapse:collapse">
                                <tr>
                                    <td style="width:39px;height:18px" width="39" height="18" class="block"></td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:18px;height:18px" width="18" height="18" class="block"></td>
                                </tr>
                            </table>
                        </button>
                    </div>
                    <div class="col">
                        <button id="grid-x1x2">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:60px;padding:0;border-collapse:collapse">
                                <tr>
                                    <td style="width:18px;height:18px" width="18" height="18" class="block"></td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:39px;height:18px" width="39" height="18" class="block"></td>
                                </tr>
                            </table>
                        </button>
                    </div>
                    <div class="col">
                        <button id="grid-x1-1x1">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:60px;padding:0;border-collapse:collapse">
                                <tr>
                                    <td style="width:18px" width="18">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:18px;padding:0;border-collapse:collapse">
                                            <tr>
                                                <td style="width:18px;height:18px" class="block" width="18" height="18"></td>
                                            </tr>
                                            <tr><td style="width:18px;height:3px" width="18" height="3"></td></tr>
                                            <tr>
                                                <td style="width:18px;height:18px" class="block" class="block" width="18" height="18"></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:39px;height:18px" class="block" class="block" width="39" height="18"></td>
                                </tr>
                            </table>
                        </button>
                    </div>
                    <div class="col">
                        <button id="grid-x1x1-1">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:60px;padding:0;border-collapse:collapse">
                                <tr>
                                    <td style="width:39px;height:18px" class="block" class="block" width="39" height="18"></td>
                                    <td style="width:3px;height:18px" width="3" height="18"></td>
                                    <td style="width:18px" width="18">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:18px;padding:0;border-collapse:collapse">
                                            <tr>
                                                <td style="width:18px;height:18px" class="block" width="18" height="18"></td>
                                            </tr>
                                            <tr><td style="width:18px;height:3px" width="18" height="3"></td></tr>
                                            <tr>
                                                <td style="width:18px;height:18px" class="block" class="block" width="18" height="18"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var fixHelper=function(b,a){a.children().each(function(){var c=$(this).clone();$(this).width($(this).width())});return a};

    // Sortowanie listy
    jQuery.fn.sortuj = function(a) {
        this.sortable({
            cursor: "move",
            handle: ".bttn-move",
            start: function(d, c) {
                var b = $(this).sortable("instance");
                c.placeholder.height(c.helper.height());
                b.containment[3] += c.helper.height() * 1.5 - b.offset.click.top;
                b.containment[1] -= b.offset.click.top
            },
            helper: function(b, c) {
                c.children().each(function() {
                    $(this).width($(this).width())
                });
                return c
            },
            zIndex: 9999,
            containment: "#table",
            axis: "y",
            update: function() {
                var b = $(this).sortable("serialize");
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.ajax({
                    data: b,
                    type: "POST",
                    url: '{{route('ajax.sort')}}',
                    success: function(c) {

                    },
                    error: function() {

                    }
                })
            }
        }).disableSelection()
    };

    $(document).ready(function(){
        $("#table").sortuj();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".cell").click(function() {
            const width = $(this).attr('width');
            const height = $(this).attr('height');
            const cell = $(this).attr('class').match(/\d+/)[0];
            const id = $(this).closest('.table-row').attr('data-row');

                console.log(width);
                console.log(height);
                console.log(cell);
                console.log(id);

            $.ajax({
                type: "POST",
                url: '{{route('ajax.update')}}',
                data: { width: width, height: height, cell: "cell_"+cell, id: id },
                success: function(response) {
                    if(response) {
                        $('body').append(response);
                    } else {
                        alert('Error');
                    }
                },
                error: function () {
                    alert('Wystąpił błąd');
                }
            })
        });

        $(".bttn-delete").click(function() {
            const row_id = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: '{{route('ajax.destroy')}}',
                data: { _method: 'delete', id: row_id },
                success: function(response) {
                    if(response) {
                        $('[data-row^="' + row_id + '"]').remove();
                    } else {
                        alert('Error');
                    }
                },
                error: function () {
                    alert('Wystąpił błąd');
                }
            })
        });
        $(".modal-body button").click(function(){
            const id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: '{{route('ajax.load')}}',
                data: { template: id },
                success: function(response) {
                    if(response) {
                        location.reload();
                    } else {
                        alert('Error');
                    }
                },
                error: function () {
                    alert('Wystąpił błąd');
                }
            })
        });
    });
</script>
@endpush
