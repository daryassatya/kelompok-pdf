<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test DomPDF</title>

    <style type="text/css">
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            font-family: sans-serif;
        }

        /* HTML5 display-role reset for older browsers */
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,ul {
            list-style: none;
        }

        blockquote,q {
            quotes: none;
        }

        blockquote:before,blockquote:after,q:before,q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table {
            margin: 20px 20px;

        }

        .table td,
        th {
            border: 1px solid #000000;
            text-align: center;
            vertical-align: middle;
            padding: 5px;
            width: 100px;
            font-size: 10px;
            /* Set the desired height for table cells */
            overflow: hidden;
            /* Prevent content from overflowing */
            word-wrap: break-word;
            /* Prevent line breaks */
        }

        .page-break {
            page-break-after: always;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; margin: 40px 0">REPORT SALES</h1>
    <div class="table">
        <table style="table-layout: fixed">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['produk'] }}</td>
                    <td>{{ $item['jumlah_terjual'] }}</td>
                    <td>{{ $item['harga_satuan'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>