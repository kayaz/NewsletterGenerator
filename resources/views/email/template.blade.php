<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Veolia Polska</title>
    <style>
        a{text-decoration: none}table img{display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;}table tr{border-collapse: collapse;}table p{margin: 0;-webkit-text-size-adjust: none;-ms-text-size-adjust: none;mso-line-height-rule: exactly;line-height: 190%}
    </style>
</head>
<body style="margin:0;padding:0">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="background:#ffffff;width:100%" width="100%">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center" height="26" width="598">&nbsp;</td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center" bgcolor="black" height="52" width="598"><img alt="Pobierz obrazek" border="0" height="40" src="https://www.inon-news.pl/public/uploads/header.jpg" style="width:199px;height:40px;margin:0;padding:0;border:none;display:block" width="199"></td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center" height="26" width="598">&nbsp;</td>
                </tr>
            </table>
            @foreach($list as $row) @include('template.'.$row->name, $row) @endforeach
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td height="76" width="120"><img alt="Pobierz obrazek" border="0" height="76" src="https://www.inon-news.pl/public/uploads/stopka_1.jpg" style="width:120px;height:76px;margin:0;padding:0;border:none;display:block" width="120"></td>
                    <td height="76" width="120"><a href="https://oneintranet.veolia.com/pol-rin-innowacje/home" target="_blank"><img alt="Pobierz obrazek" border="0" height="76" src="https://www.inon-news.pl/public/uploads/stopka_2.jpg" style="width:120px;height:76px;margin:0;padding:0;border:none;display:block" width="120"></a></td>
                    <td height="76" width="120"><a href="https://oneintranet.veolia.com/pol-rin-innowacje/mapa-ekspertow" target="_blank"><img alt="Pobierz obrazek" border="0" height="76" src="https://www.inon-news.pl/public/uploads/stopka_3.jpg" style="width:120px;height:76px;margin:0;padding:0;border:none;display:block" width="120"></a></td>
                    <td height="76" width="120"><a href="https://oneintranet.veolia.com/pol-rin-innowacje/repozytorium" target="_blank"><img alt="Pobierz obrazek" border="0" height="76" src="https://www.inon-news.pl/public/uploads/stopka_4.jpg" style="width:120px;height:76px;margin:0;padding:0;border:none;display:block" width="120"></a></td>
                    <td height="76" width="120"><img alt="Pobierz obrazek" border="0" height="76" src="https://www.inon-news.pl/public/uploads/stopka_5.jpg" style="width:120px;height:76px;margin:0;padding:0;border:none;display:block" width="120"></td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center" style="font-family: Arial, sans-serif;line-height: 120%;font-size: 22px;color:#000000;font-weight: bold" width="600"><?=polishMonth();?> <?=date('Y');?>
                    </td>
                </tr>
                <tr><td width="600" height="24" align="center">&nbsp;</td></tr>
                <tr>
                    <td width="600" align="center" style="font-family: Arial, sans-serif;line-height: 110%;font-size: 17px;color:#000000">
                        <a href="ttps://www.veolia.pl/" target="_blank" style="font-family: Arial, sans-serif;color:#000000">© Departament Innowacji</a></td>
                </tr>
                <tr>
                    <td width="600" align="center" style="font-family: Arial, sans-serif;line-height: 110%;font-size: 17px;color:#000000">Materiał do użytku wewnętrznego Grupy Veolia Polska</td>
                </tr>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:598px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center" height="26" width="598">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
