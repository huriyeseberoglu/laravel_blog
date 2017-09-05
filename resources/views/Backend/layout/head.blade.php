<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SB Admin </title>
    <!-- Bootstrap Core CSS -->
    <link href="/storage/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/storage/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/storage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Script -->
    <script>
        window.laravel= <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
    </script>
    <link href="/storage/css/pnotify.custom.min.css" rel="stylesheet">
@stack('css')
</head>