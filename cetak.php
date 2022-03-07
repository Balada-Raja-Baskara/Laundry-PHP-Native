<!DOCTYPE html>
<html>
<head>
	<title>Print Nota</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        /* reset */
        *
        {
            border: 0;
            box-sizing: content-box;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            line-height: inherit;
            list-style: none;
            margin: 0;
            padding: 0;
            text-decoration: none;
            vertical-align: top;
        }

        /* content editable */

        *[] { border-radius: 0.25em; min-width: 1em; outline: 0; }

        *[] { cursor: pointer; }

        *[]:hover, *[]:focus, td:hover *[], td:focus *[], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }
`
        span[] { display: inline-block; } 

        /* heading */

        h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

        /* table */

        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }

        /* page */

        html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
        html { background: #999; cursor: default; }

        body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
        body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

        /* header */

        header { margin: 0 0 3em; }
        header:after { clear: both; content: ""; display: table; }

        header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
        header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
        header address p { margin: 0 0 0.25em; }
        header span, header img { display: block; float: right; }
        header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
        header img { max-height: 100%; max-width: 100%; }
        header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

        /* article */

        article, article address, table.meta, table.inventory { margin: 0 0 3em; }
        article:after { clear: both; content: ""; display: table; }
        article h1 { clip: rect(0 0 0 0); position: absolute; }

        article address { float: left; font-size: 125%; font-weight: bold; }

        /* table meta & balance */

        table.meta, table.balance { float: right; width: 36%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 40%; }
        table.meta td { width: 60%; }

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; }

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        /* table balance */

        table.balance th, table.balance td { width: 50%; }
        table.balance td { text-align: right; }

        /* aside */

        aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
        aside h1 { border-color: #999; border-bottom-style: solid; }



        @media print {
            * { -webkit-print-color-adjust: exact; }
            html { background: none; padding: 0; }
            body { box-shadow: none; margin: 0; }
            span:empty { display: none; }
            .add, .cut { display: none; }
        }

        @page { margin: 0; }
    </style>
</head>
<body>
    <?php
        include 'koneksi.php';
        $sql = "SELECT `transaksi`.`*`, `paket`.`jenis`, `paket`.`harga`, `user`.`nama` as `nama`, `member`.`nama` as `nama_member`,`member`.`alamat`, `member`.`tlp`, `detil_transaksi`.`qty` from `transaksi`
                join `user` on `user`.`id_user` = `transaksi`.`id_user`
                join `member` on `member`.`id_member` = `transaksi`.`id_member`
                join `detil_transaksi` on `detil_transaksi`.`id_transaksi` = `transaksi`.`id_transaksi`
                join `paket` on `paket`.`id_paket` = `detil_transaksi`.`id_paket`
                where `transaksi`.`id_transaksi` = '".$_GET['id_transaksi'].'"';
                //echo $sql;
        $data_trans = mysqli_query($conn,  $sql);
        $data = mysqli_fetch_array($data_trans);
    ?>
		<header>
			<h1>NOTA</h1>
			<address >
				<p><?php echo $data['nama_member']; ?></p>
				<p><?php echo $data['alamat']; ?></p>
				<p><?php echo $data['tlp']; ?></p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>LAUNDRY</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Transaction Id</span></th>
					<td><span ><?php echo $data['id_transaksi']; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo date('d F Y', strtotime($data['tgl'])); ?></span></td>
				</tr> 
				<tr>
					<th><span >Total</span></th>
					<td><span id="prefix" >IDR </span><span><?php echo $data['qty']*$data['harga']; ?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Price</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span ><?php echo $data['jenis']; ?></span></td>
						<td><span data-prefix>IDR </span><span ><?php echo $data['harga']; ?></span></td>
						<td><span ><?php echo $data['qty']; ?></span></td>
						<td><span data-prefix>IDR </span><span><?php echo $data['qty']*$data['harga']; ?></span></td>
					</tr>
				</tbody>
			</table>
	
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>IDR </span><span><?php echo $data['qty']*$data['harga']; ?></span></td>
				</tr>
			</table>
		</article>

        <script>window.print();</script>
</body>
</html>