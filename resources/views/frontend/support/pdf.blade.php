<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>

<body>
    <h1>Invoice</h1>

    <!-- Display your data here -->
    <p>Bill No: {{ $bill_no->bill_no }}</p>
    <p>Status: {{ $bill_no?->current_status }}</p>
    <p>address: {{ $bill_no?->address }}</p>
    <p>Mobile: {{ $bill_no?->mobile }}</p>

    <!-- Add more details as needed -->

</body>

</html>
