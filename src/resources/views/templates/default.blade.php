<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        {{$fileTitle}}
    </title>

    <x-css file="templates/default.css"></x-css>
    @if($css)
        <x-css file="{{$css}}"></x-css>
    @endif
</head>
<header>
    <table class="header">
        <tr>
            <td class="logo">
                <x-media file="logo.png"/>
            </td>
            <td class="titles">
                {{$title}}
            </td>
            <td class="file-info"></td>
        </tr>
    </table>
</header>
<body>
<main>
    @yield('main')
</main>
</body>
<footer>
    <div>
        <script type="text/php">
            $textPages = '{PAGE_NUM}/{PAGE_COUNT}';
            $textGenerated =  __('general.footer.title');

            $size = 11;
            $font = $fontMetrics->getFont('Open Sans','Light');
            $width = $fontMetrics->get_text_width($textPages, $font, $size);

            $x = ($pdf->get_width() - $width) + 80;
            $y = $pdf->get_height() - 25;

            $pdf->page_text($x, $y, $textPages, $font, $size,array(126/255, 130/255, 153/255));
            $pdf->page_text(20, $y, $textGenerated, $font, $size,array(126/255, 130/255, 153/255));
        </script>
    </div>
</footer>
</html>
