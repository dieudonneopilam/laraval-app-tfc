<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('img/snel.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
    @if(! Route::is('login'))
        <header class="header">
            <a href="{{ route('home') }}" class="logo"><svg height="50px" viewBox="0 0 681.97973 582.17817" width="50px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><filter id="a" color-interpolation-filters="sRGB"><feFlood flood-opacity=".498039" result="flood"/><feComposite in="flood" in2="SourceGraphic" operator="in" result="composite1"/><feGaussianBlur in="composite1" result="blur" stdDeviation="3"/><feOffset dx="6" dy="6" result="offset"/><feComposite in="SourceGraphic" in2="offset" operator="over" result="composite2"/></filter><filter id="b" color-interpolation-filters="sRGB"><feFlood flood-opacity=".498039" result="flood"/><feComposite in="flood" in2="SourceGraphic" operator="in" result="composite1"/><feGaussianBlur in="composite1" result="blur" stdDeviation="3"/><feOffset dx="6" dy="6" result="offset"/><feComposite in="SourceGraphic" in2="offset" operator="over" result="composite2"/></filter><filter id="c" color-interpolation-filters="sRGB"><feFlood flood-opacity=".498039" result="flood"/><feComposite in="flood" in2="SourceGraphic" operator="in" result="composite1"/><feGaussianBlur in="composite1" result="blur" stdDeviation="3"/><feOffset dx="6" dy="6" result="offset"/><feComposite in="SourceGraphic" in2="offset" operator="over" result="composite2"/></filter><radialGradient id="d" cx="360" cy="492.36221" gradientTransform="matrix(-160.00027 -720.00001 .97618686 -.21693133 57479.46 259799.17)" gradientUnits="userSpaceOnUse" r=".5"><stop offset="0" stop-color="#000080"/><stop offset="1" stop-color="#000080" stop-opacity="0"/></radialGradient><path d="m388.11914 249.39258-192.08008 307.91992h90.80274l25.62695-46.53516h-12.46875l88.11914-144.55468 1.91797 3.70703 32.66016-59.30078zm71.91602 127.36328-37.91407 55.16797 24.41407 47.17187h71.28711zm-92.10547 134.02148-31.98047 46.53516h156.13086l73.26562 118.8125h-369.30664l44.55469-73.26758h-64.35547l-80.199218 131.6836h568.316408l-131.68164-223.76368z" fill="#fc0" fill-rule="evenodd" filter="url(#a)" transform="translate(-39.20742 -200.87774)"/><path d="m506.93069 250.38201h-35.64356l-69.30693 116.83168 8.91089 2.9703-68.31683 105.94059-1.9802 26.73267-36.63366 48.51486 74.25742-74.25743-9.90099-10.89109 98.0198-134.65346-12.87128-2.9703z" fill="#f00" fill-rule="evenodd" filter="url(#b)" transform="translate(-39.20742 -200.87774)"/><path d="m517.00954 667.64133s-52.71631-100.63165-52.71631-100.63165 21.67483.17991 21.67483.17991 65.62919 100.37352 65.62919 100.37352-34.58771.0782-34.58771.0782m-74.47652-32.77312s32.337 4.10621 32.337 4.10621c-.3033 9.40367-4.07157 17.10403-11.53471 22.71215-7.75224 5.79759-19.15114 8.81729-33.958 8.85494-23.53113.06-41.29311-6.61433-52.36951-19.0885-8.03886-9.18702-11.51767-19.87225-10.91155-31.5762.64796-12.51173 5.44224-21.32182 14.02117-27.18977 8.06397-5.55337 18.03807-8.16734 30.2574-8.08889 13.68802.0879 25.33538 2.95367 35.41273 8.85608 10.6959 6.23332 19.06884 16.56468 25.23524 32.29473 0 0-74.43302-.15959-74.43302-.15959.79972 6.79297 3.82996 12.38565 9.18817 16.57001 5.53635 4.26735 12.1607 6.45551 19.7202 6.4536 5.13677-.001 9.18596-1.14692 12.10934-3.40417 2.86822-2.21466 4.5009-5.69815 4.92554-10.3406zm-4.52672-21.96105c-1.7819-5.55019-4.92558-9.57662-9.41292-12.24269-4.38428-2.63957-9.18049-3.94793-14.47635-3.97525-5.67183-.0293-10.18071 1.29448-13.59371 4.02904-3.51262 2.81438-5.05394 6.78481-4.52707 12.04275 0 0 42.01005.14615 42.01005.14615zm-100.4955 55.14006s-36.17516.0818-36.17516.0818 14.20014-49.82124 14.20014-49.82124c2.35072-8.2475 3.18412-13.24785 2.64039-15.42715-.51977-2.17595-1.90724-3.8345-4.15179-5.00041-2.1566-1.1527-5.02035-1.73353-8.61108-1.75206-4.60253-.0237-9.07117.76412-13.45953 2.38467-4.46591 1.64919-8.09755 3.89063-10.89484 6.76338-2.81206 2.95728-6.27354 8.66496-10.57674 17.58534 0 0-21.89465 45.38676-21.89465 45.38676s-36.84503.0833-36.84503.0833 51.71239-83.38435 51.71239-83.38435 23.4485.14741 23.4485.14741-4.3386 8.81515-4.3386 8.81515c11.76039-6.80218 23.56457-9.9809 36.01899-9.90094 5.47924.0351 10.32233.67019 14.57283 1.91647 4.31105 1.22523 7.46464 2.8103 9.45164 4.77358 2.0891 2.00388 3.40185 4.32192 3.91627 6.97613.59233 2.72754.49949 6.76189-.32291 12.26086 0 0-8.69082 58.1113-8.69082 58.1113z" fill="#fc0" filter="url(#c)" transform="translate(-39.20742 -200.87774)"/></svg></a>
            <nav class="nav">
                <a href="{{ route('login') }}"><img style="width: 40px;height: 40px;border-radius: 40px;" src="{{ asset('img/profil.JPG') }}" alt="" srcset=""></a>
            </nav>
        </header>
    @endif
    @yield('main')
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
</html>
