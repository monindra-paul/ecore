@extends('frontend.layout.app')
@section('mainsection')
    <div class="container">


        <form action="{{ route('support.status.fetched') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-3">
                    @if ($errors->has('bill_no'))
                        <span class="text-danger">{{ $errors->first('bill_no') }}</span>
                    @endif
                    <input type="text" name="bill_no" id="bill_no" value="{{ app('request')->input('bill_no') }}">
                </div>
                <button type="submit">View Status</button>
            </div>



        </form>

        @isset($error)
            <div class="text-danger my-2">
                {{ $error }}
            </div>
        @endisset

        @if (app('request')->input('bill_no') != null)
            <div class="col-5">
                <table>
                    <th>Bill no</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>issue</th>
                    <th>status</th>

                    <tr>
                        <td>
                            {{ $bill_no?->bill_no }}
                        </td>
                        <td>
                            {{ $bill_no?->name }}
                        </td>
                        <td>
                            {{ $bill_no?->mobile }}
                        </td>
                        <td>
                            {{ $bill_no?->problem }}
                        </td>
                        <td>
                            {{ $bill_no?->current_status }}
                        </td>
                    </tr>




                </table>
        @endif

    </div>


    </div>
@endsection
