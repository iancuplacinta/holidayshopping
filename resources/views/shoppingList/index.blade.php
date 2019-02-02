@extends('layouts.main')
<div class="container">
    <div class="row text-center justify-content-center">
        <div class="col col-sm-8 mt-5">
            <h1>Holiday Shopping List</h1>
        </div>
    </div>
    {{-- Button to add shopping list items--}}
    <div class="row justify-content-center text-center">
        <div class="col col-sm-8 my-2 d-flex justify-content-end">

            <a class="btn btn-outline-info" href="{{route('shopping_list.create')}}">Add Item</a>
        </div>
        {{--The table starts here--}}
        <div class="col col-sm-8">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Recipient</th>
                  </tr>
                </thead>
                <tbody>
                @if($shoppingList)
                    @foreach($shoppingList as $shoppingItem)

                      <tr>
                        <td>{{$shoppingItem->product_name}}</td>
                        <td>{{$shoppingItem->quantity}}</td>
                        <td>{{$shoppingItem->recipient}}</td>
                      </tr>

                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        {{--Table ends--}}
    </div>
</div>
