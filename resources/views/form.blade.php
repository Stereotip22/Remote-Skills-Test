<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-12 col-offset-6 centered">
    <div class="panel panel-default">
        <div class="panel-body">
            Adding items
        </div>
        <div class="panel-footer">
            <form class="form-horizontal" action="/adding-items" method="POST">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name item</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name item..." name="item">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Quantity in stock</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Enter quantity..."
                               name="quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Unit price</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Unit price..."
                               name="price">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Add item</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-default" href="{{ route('items-to-xml') }}">To XML</a>
        </div>
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-default" href="{{ route('items-to-json') }}">To JSON</a>
        </div>
    </div>
    <br>

    <div class="panel panel-default">
        <div class="panel-heading">Items</div>
        <table class="table">
            <thead>
            <tr>
                <th>Product name</th>
                <th>Quantity in stock</th>
                <th>Price per item</th>
                <th>Datetime submitted</th>
                <th>Total value number</th>
            </tr>
            </thead>
            <tbody>
            @foreach(App\Items::all() as $element)
                <tr>
                    <td>{{ $element->item }}</td>
                    <td>{{ $element->quantity }}</td>
                    <td>{{ $element->price }}</td>
                    <td>{{ $element->created_at }}</td>
                    <td>{{ $element->quantity * $element->price }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
</body>

</html>