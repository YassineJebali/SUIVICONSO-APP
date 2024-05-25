<!DOCTYPE html>
<html>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        header {
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            margin: 0;
            padding: 0;
        }
        address {
            font-size: 0.9em;
            color: #888;
        }
        .meta, .inventory {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
        }
        .meta th, .inventory th {
            text-align: left;
            padding: 10px;
            background-color: #dedede;
        }
        .meta td, .inventory td {
            padding: 10px;
            background-color: #f0f0f0
        }
    </style>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>
<body>
    <div class="container">
    <header>
        <h1>ETAP</h1>
        <address>
            <p>{{ $invoice->local->name }}</p>
            <p>{{ $invoice->local->address }}</p>
        </address>
    </header>
    <article>
        <h1>Facture</h1>
        <table class="meta">
            <tr>
                <th>Référence</th>
                <td>{{ $invoice->reference }}</td>
            </tr>
            <tr>
                <th>Date d'ajout</th>
                <td>{{ $invoice->created_at->format('F j, Y') }}</td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th>N.Compteur</th>
                    <th>Type</th>
                    <th>Quantité</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $counter->serial_number }}</td>
                    <td class="p-3 px-5">
                        @switch($counter->type)
                            @case('gas')
                                <span class="inline-flex rounded-full bg-yellow-100 p-1 space-x-1 pl-2 pr-2 text-yellow-500">gaz</span>
                                @break
                            @case('electricity')
                                <span class="inline-flex rounded-full bg-purple-100 p-1 pl-2 pr-2 space-x-1 text-purple-500">Eléctricité</span>
                                @break
                            @case('water')
                                <span class="inline-flex rounded-full bg-blue-100 p-1 space-x-1 pl-2 pr-2 text-blue-500">Eau</span>
                                @break
                            @default
                                <span class="inline-flex rounded-full bg-gray-100 p-1 space-x-1 pl-2 pr-2 text-gray-500">Inconnu</span>
                        @endswitch
                    </td>
                    <td>{{ $invoice->consumption }}</td>
                    <td class="p-3 px-5">
                            @switch($invoice->payment_status)
                                @case('unpaid')
                                    <span class="inline-flex rounded-full bg-red-100 p-1 space-x-1 pl-2 pr-2 text-red-500">Non Payé</span>
                                    @break
                                @case('partially_paid')
                                    <span class="inline-flex rounded-full bg-yellow-100 p-1 pl-2 pr-2 space-x-1 text-yellow-500">Partiellement payé</span>
                                    @break
                                @case('paid')
                                    <span class="inline-flex rounded-full bg-green-100 p-1 space-x-1 pl-2 pr-2 text-green-500">Payé</span>
                                    @break
                                @default
                                    <span class="inline-flex rounded-full bg-gray-100 p-1 space-x-1 pl-2 pr-2 text-gray-500">Inconnu</span>
                            @endswitch
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th>Date de facturation</th>
                    <th>Date d'échéance</th>
                    <th>Payer avant le</th>
                    <th>Prochain relevé d'index</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $invoice->issue_date }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>{{ $invoice->pleasePayBefore }}</td>
                    <td>{{ $invoice->nextIndexReading }}</td>
                </tr>
            </tbody>
        </table>
        <table class="balance">
            <tr>
                <th>Montant Total</th>
                <td>{{ $invoice->amount }} Dt</td>
            </tr>
        </table>
    </article>
</div>
</body>
</html>
