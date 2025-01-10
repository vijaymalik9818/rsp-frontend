<head>
    <base href="{{ url('') }}/frontend/">
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental" />
    <meta name="description" content="Real Estate " />
    <meta name="CreativeLayers" content="ATFN" />

   
    @if (request()->is('property-detail/*') && isset($propertyDetails))
    <meta property="og:title" content="{{ $propertyDetails['StreetNumber'] }} {{ $propertyDetails['StreetName'] }} {{ $propertyDetails['City'] }} {{ $propertyDetails['StateOrProvince'] }} {{ $propertyDetails['StreetSuffix'] }} {{ isset($otherColumnsData['PostalCode']) ? $otherColumnsData['PostalCode'] : '' }} {{ $propertyDetails['ListingId'] }} | Repinc" />
    <meta property="og:description" content="{{ $propertyDetails['PublicRemarks'] ?? 'Default Description' }}" />
    <meta property="og:image:width" content="400"/>
    <meta property="og:image:height" content="300"/>
    <meta property="og:image" content="{{ $propertyDetails['image_url'] ?? 'https://example.com/default-image.jpg' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @else
        <meta property="og:title" content="Default Title" />
        <meta property="og:description" content="Default Description" />

        <meta property="og:image" content="https://example.com/default-image.jpg" />
        <meta property="og:url" content="{{ url()->current() }}" />
    @endif
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-58SPTMWT');</script>
    <!-- css file -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <!-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    /> -->
    <!-- <link rel="stylesheet" href="css/jquery-ui.min.css" /> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/ace-responsive-menu.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="css/ud-custom-spacing.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <style>
        .bgc-thm-light {
            background: #1856a1;
        }

        .no-image {
            height: 333px;
            background: #CCC;
        }

        .realtor-img-overlay {
            height: 343px;
            width: 300px;
            background: #0a53be;
            position: absolute;
            z-index: 9;
            opacity: 0.3;
        }
    </style>
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Title -->
    <title class="titles"></title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon" />
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon" />
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon" />
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Chart Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<script>
    if (!window.location.href.includes('property-detail')) {
        $('.titles').text(('REP Home page'));

    }
  
</script>