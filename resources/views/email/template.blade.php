<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Veolia Polska</title>
    <style>
        a {text-decoration: none}
        table img {
            display: block;
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        table tr {
            border-collapse: collapse;
        }
        table p {
            margin: 0;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
            line-height: 190%
        }
    </style>
</head>
<body style="margin:0;padding:0">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="background:#ffffff;width:100%" width="100%">
    <tbody>
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                    <tr><td width="598" height="26" align="center">&nbsp;</td></tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                    <tr>
                        <td width="598" height="52" align="center" bgcolor="black"><img src="{{ asset('uploads/header.jpg') }}" alt="Pobierz obrazek" style="width:199px;height:40px;margin:0;padding:0;border:none;display:block" border="0" width="199" height="40"></td>
                    </tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                    <tr><td width="598" height="26" align="center">&nbsp;</td></tr>
                </table>
            @foreach($list as $row)
                @include('template.'.$row->name, $row)
            @endforeach
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                    <tr>
                        <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 120%;font-size: 22px;color:#000000;font-weight: bold"><?=polishMonth();?> <?=date('Y');?></td>
                    </tr>
                    <tr>
                        <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 110%;font-size: 17px;color:#000000">Materiały do użytku wewnętrznego</td>
                    </tr>
                    <tr>
                        <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 110%;font-size: 17px;color:#000000">
                            <a href="ttps://www.veolia.pl/" target="_blank" style="font-family: Arial, sans-serif;color:#000000">Veolia Polska</a></td>
                    </tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                    <tr>
                        <td width="200" height="76"><img src="{{ asset('uploads/stopka_1.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:76px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="76"></td>
                        <td width="200" height="76"><img src="{{ asset('uploads/stopka_2.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:76px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="76"></td>
                        <td width="200" height="76"><img src="{{ asset('uploads/stopka_3.jpg') }}" alt="Pobierz obrazek" style="width:200px;height:76px;margin:0;padding:0;border:none;display:block" border="0" width="200" height="76"></td>
                    </tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                    <tr><td width="598" height="26" align="center">&nbsp;</td></tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
