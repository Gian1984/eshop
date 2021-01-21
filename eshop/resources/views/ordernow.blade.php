@extends('master')
@section('content') 
<div class="container col-8 mt-5">
    <h3 class="text-center mt-4 mb-5 fw-lighter">Total order :</h3>
    <table class="table mb-2">
    <thead>
        <tr>
            <th scope="col">Amount</th>
            <th scope="col">Tax</th>
            <th scope="col">Shipping</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>€ {{$total}},00</td>
            <td>€ 0,00</td>
            <td>€ 10,00</td>
            <td>€ € {{$total+10}},00 </td>
        </tr> 
        </tr> 
    </tbody>
    </table>
    <h3 class="text-center mt-5 fw-lighter">Fill the following field :</h3>
    <form class="row g-3 mt-3">
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>

        <fieldset class="row mb-3 mt-3">
            <legend class="col-form-label col-sm-2 pt-0">Payment</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                Online with credit card.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                Online with Paypal.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                At the moment of delivery.
                </label>
            </div>
            </div>
        </fieldset>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Confirm order</button>
        </div>
    </form>
</div>

@endsection