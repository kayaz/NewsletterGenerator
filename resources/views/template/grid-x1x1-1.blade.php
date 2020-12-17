<table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
    <tr>
        <td style="width:390px;height:180px" class="cell cell_1" width="390" height="390"@if(isset($cell_1_bgcolor)) bgcolor="{{$cell_1_bgcolor}}" @endif>@if(isset($cell_1_url))<a href="{{$cell_1_url}}" target="_blank">@endif @if(isset($cell_1)){!! checkType($cell_1) !!} @else @if(isset($cell_1_text)) {!! $cell_1_text !!} @endif @endif @if(isset($cell_1_url))</a>@endif <span class="modalBttn modal-img" data-modal="image"><i class="las la-image"></i></span> <span class="modalBttn modal-text" data-modal="text"><i class="las la-keyboard"></i></span></td>
        <td style="width:30px;height:180px" width="30" height="180"></td>
        <td style="width:180px" width="180">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:180px;padding:0;border-collapse:collapse">
                <tr>
                    <td style="width:180px;height:180px" class="cell cell_2" width="180" height="180"@if(isset($cell_2_bgcolor)) bgcolor="{{$cell_2_bgcolor}}" @endif>@if(isset($cell_2_url))<a href="{{$cell_2_url}}" target="_blank">@endif @if(isset($cell_2)){!! checkType($cell_2) !!} @else @if(isset($cell_2_text)) {!! $cell_2_text !!} @endif @endif @if(isset($cell_2_url))</a>@endif <span class="modalBttn modal-img" data-modal="image"><i class="las la-image"></i></span> <span class="modalBttn modal-text" data-modal="text"><i class="las la-keyboard"></i></span></td>
                </tr>
                <tr><td style="width:180px;height:30px" width="180" height="30"></td></tr>
                <tr>
                    <td style="width:180px;height:180px" class="cell cell_3" width="180" height="180"@if(isset($cell_3_bgcolor)) bgcolor="{{$cell_3_bgcolor}}" @endif>@if(isset($cell_3_url))<a href="{{$cell_3_url}}" target="_blank">@endif @if(isset($cell_3)){!! checkType($cell_3) !!} @else @if(isset($cell_3_text)) {!! $cell_3_text !!} @endif @endif @if(isset($cell_3_url))</a>@endif <span class="modalBttn modal-img" data-modal="image"><i class="las la-image"></i></span> <span class="modalBttn modal-text" data-modal="text"><i class="las la-keyboard"></i></span></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
    <tr>
        <td style="width:600px;height:30px" width="600" height="30"></td>
    </tr>
</table>
