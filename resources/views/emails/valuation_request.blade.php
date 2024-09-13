<html>
<head>
    <title>{{$name}} - {{$subject}}</title>
</head>
</html>
<body style='background-color:##f2f2f2;'>
    <h2 style='color:#ec268f;'>Urban Village Valuation Request</h2>
    <div style='margin-top:-15px !important;'>
        <p style='padding-top:-25px;'>Hi... You've got a message from {{$name}}!<br/></p>
    </div>
    <table style='border-collapse: collapse;width: 100%;'>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Full Name </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{ $name }}</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{ $email }}</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone No </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{ $phone }}</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Address </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{ $address }}</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Preferred Date and Time </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{ $date }}</td>
        </tr>
        <tr>
            <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
            <td style='border-bottom: 1px solid #ddd;height: 50px;'>{{$comments}}</td>
        </tr>
    </table>
</body>
</html>
