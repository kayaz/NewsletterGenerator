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
            @foreach($list as $row)
                @include('template.'.$row->name, $row)
            @endforeach
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 130%;font-size: 18px;color:#595959"><?=polishMonth();?> <?=date('Y');?></td>
                </tr>
                <tr>
                    <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 130%;font-size: 18px;color:#595959">Materiały do użytku wewnętrznego</td>
                </tr>
                <tr>
                    <td width="600px" width="600" align="center" style="font-family: Arial, sans-serif;line-height: 130%;font-size: 18px;color:#595959">Veolia Polska</td>
                </tr>
            </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
