@extends('master')

@section('content')
    <h2>New Quote</h2>
    <form method="post">
        <div class="form-group">
            <label for="person">Person</label>
            <input type="text" class="form-control" id="person" name="person" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="quote">Quote</label>
            <input type="text" class="form-control" id="quote" name="quote" placeholder="Quote...">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <h2>Quotes</h2>
    <table class="table table-bordered table-striped">
        @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote->date() }}</td>
                <td>{{ $quote->person }}</td>
                <td>{{ $quote->quote }}</td>
            </tr>
        @endforeach
    </table>
@endsection