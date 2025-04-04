<style>
    table,th,td{
        border: 1px solid black;
        text-align: center;
    }
</style>

<h1>Suppliers Report</h1>
<table style="width: 100%">
    <thead>
        <tr>
            <th>Supplier</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Order Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $supplier)

        <td>{{$supplier->supplier_name}}</td>
        <td>{{$supplier->product_type}}</td>
        <td>{{$supplier->quantity}}</td>
        <td>{{$supplier->created_at}}</td>

        @endforeach
    </tbody>
</table>
