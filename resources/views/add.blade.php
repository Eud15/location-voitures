<!-- Start Contact -->
@extends('dashboard')
@section('content')
<div class="container py-5">
    <div class="row py-5">
        <div>
            @isset($message)
            <div>{{ $message }}</div>
            
            @endisset
        </div>
        {{ auth()->user()->name }}
        <form class="col-md-9 m-auto" method="post" role="form" action="/addCar">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Immatriculation</label>
                    <input type="text" class="form-control mt-1" id="name" name="immatriculation" placeholder="Nom">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Marque</label>
                    <input type="text" class="form-control mt-1" id="email" name="marque" placeholder="Email">
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Modele</label>
                    <input type="text" class="form-control mt-1" id="email" name="modele" placeholder="Email">
                </div>

                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Carburant</label>
                    <input type="text" class="form-control mt-1" id="email" name="carburant" placeholder="Email">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Prixlocation</label>
                    <input type="number" class="form-control mt-1" id="email" name="prix_location" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject">Sujet</label>
                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Sujet">
            </div>
            <div class="mb-3">
                <label for="inputmessage">Message</label>
                <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-primary btn-lg px-3">Ajouter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->
@endsection
