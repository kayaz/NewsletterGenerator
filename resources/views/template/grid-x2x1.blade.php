<table width="598" align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
    <tr>
        <td style="width:390px;height:182px" align="center" valign="center" class="cell cell_1" width="390" height="182"@if(isset($cell_1_bgcolor)) bgcolor="{{$cell_1_bgcolor}}" @endif>@if(isset($cell_1_url))<a href="{{$cell_1_url}}" target="_blank">@endif @if(isset($cell_1)){!! checkType($cell_1) !!} @else @if(isset($cell_1_text)) {!! $cell_1_text !!} @endif @endif @if(isset($cell_1_url))</a>@endif <span class="modalBttn modal-img" data-modal="image"><i class="las la-image"></i></span> <span class="modalBttn modal-text" data-modal="text"><i class="las la-keyboard"></i></span></td>
        <td style="width:26px;height:182px" width="26" height="182"></td>
        <td style="width:182px;height:182px" align="center" valign="center" class="cell cell_2" width="182" height="182"@if(isset($cell_2_bgcolor)) bgcolor="{{$cell_2_bgcolor}}" @endif>@if(isset($cell_2_url))<a href="{{$cell_2_url}}" target="_blank">@endif @if(isset($cell_2)){!! checkType($cell_2) !!} @else @if(isset($cell_2_text)) {!! $cell_2_text !!} @endif @endif @if(isset($cell_2_url))</a>@endif <span class="modalBttn modal-img" data-modal="image"><i class="las la-image"></i></span> <span class="modalBttn modal-text" data-modal="text"><i class="las la-keyboard"></i></span></td>
    </tr>
</table>
<table width="598" align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
    <tr>
        <td style="width:598px;height:26px" width="598" height="26"></td>
    </tr>
</table>
