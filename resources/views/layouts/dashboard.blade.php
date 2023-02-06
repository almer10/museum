<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- Google Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    {{-- my stylse --}}
    <link rel="stylesheet" href="{{ asset('source/css/dashboard.css') }}">

    <title>Museum</title>
</head>

<body>
    <div>

        @yield('dashboard') {{-- jadi ini nanti isinya halaman-halaman lain, biar pake boostrap nya 1 aja --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
    <script type="text/javascript">
        var waktu = document.querySelectorAll(".terakhir-edit");
        var tanggal = document.querySelectorAll(".tanggal");
        waktu.forEach(element => {
            element.innerHTML = moment(element.innerHTML).tz('Pacific/Kiritimati').locale('id').format(
                'Do MMM YYYY, HH:mm:ss');
        });
        tanggal.forEach(element => {
            element.innerHTML = moment(element.innerHTML).locale('id').format(
                'Do MMM YYYY');
        });
    </script>
</body>

</html>
