<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4;">
<h1 style="font-family: Arial, sans-serif; color: #333; text-align: center">Nouveau message d'un contact depuis le
    site</h1>
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f4f4f4">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff"
                   style="max-width:600px; margin:0 auto; border-radius: 8px;">
                <!-- HEADER -->
                <tr>
                    <td style="padding: 20px; text-align: center;">

                    </td>
                </tr>
                <!-- CONTENU -->
                <tr>
                    <th><strong>Nom:</strong></th>
                    <td style="padding: 20px; font-family: Arial, sans-serif; color: #555;">
                        <p>{{ $data['name'] }}</p>
                    </td>
                </tr>
                <tr>
                    <th><strong>Email:</strong></th>
                    <td style="padding: 20px; font-family: Arial, sans-serif; color: #555;">
                        <a href="mailto:{{$data['email']}}">{{ $data['email'] }}</a>
                    </td>
                </tr>
                <tr>
                    <th><strong>Message:</strong></th>
                    <td style="padding: 20px; font-family: Arial, sans-serif; color: #555;">
                        <p>{{ $data['content'] }}</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- FOOTER -->
<p style="padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 12px; color: #777;">
    &copy; 2025 JD-Travaux-Services -
    <a href="https://jdtravauxservices.com" style="color: #007bff; text-decoration: none;">jdtravauxservices.com</a>
</p>
</body>
</html>
