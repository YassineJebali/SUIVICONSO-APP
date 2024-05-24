<!DOCTYPE html>
<html>
<head>
    <title>Invoice PDF</title>
</head>
<body>
    <div>
        <h2>Prochain relevé d'index : {{ $invoice->nextIndexReading }}</h2>
    </div>

    <div>
        <table>
            <tbody>
                <tr>
                    <th>Type</th>
                    <th>Total</th>
                    <th>Consommation</th>
                    <th>Etat</th>
                    <th>Date d'ajout</th>
                </tr>
                <tr>
                    <td>
                        @switch($counter->type)
                            @case('gas')
                                <span>gaz</span>
                                @break
                            @case('electricity')
                                <span>Eléctricité</span>
                                @break
                            @case('water')
                                <span>Eau</span>
                                @break
                        @endswitch
                    </td>
                    <!-- Add the other columns here -->
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>