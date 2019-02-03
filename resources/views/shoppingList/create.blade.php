@extends('layouts.main')

<div class="container">
    <div class="row text-center justify-content-center">
        <div class="col col-sm-8 mt-5">
            <h1>Add Shopping List Item</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-sm-8">
       {!!  Form::open(['method'=>'POST', 'action'=>'ShoppingListController@store']) !!}

           <div class="form-group">
               {!! Form::label('product_name', 'Product:') !!}
               {!! Form::text('product_name', null, ['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('quantity', 'Quantity:') !!}
               {!! Form::input('number','quantity', null, ['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('recipient', 'Recipient:') !!}
               {!! Form::text('recipient', null, ['class'=>'form-control']) !!}
           </div>

           <div class="form-group">
               {!! Form::Submit('Create Item', ['class'=>'btn btn-primary']) !!}
           </div>

           {!! Form::close() !!}
        </div>
    </div>
</div>