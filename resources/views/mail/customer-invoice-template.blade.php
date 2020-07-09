<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Invoice Report</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <div class="container" style="width: 96%; margin-left: 2%;">
            <h2 style="text-align: center">Invoice Report</h2>

            <table style="width: 100%">
                <thead>
                    <tr>
                        <th style="text-align: left">Sl</th>
                        <th style="text-align: left">Product Name</th>
                        <th style="text-align: right">Unit Price</th>
                        <th style="text-align: center">Quantity</th>
                        <th style="text-align: right">Total</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Apple</td>
                        <td style="text-align: right">150.00</td>
                        <td style="text-align: center">2</td>
                        <td style="text-align: right">300.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Banana</td>
                        <td style="text-align: right">120.00</td>
                        <td style="text-align: center">3</td>
                        <td style="text-align: right">360.00</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <th colspan="3" style="text-align: left"><strong>Total:</strong></th>
                        <th style="text-align: center">5</th>
                        <th style="text-align: right">660.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>
