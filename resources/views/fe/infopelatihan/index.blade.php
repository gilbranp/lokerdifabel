@extends('fe.layout.main')
@section('container')
<style>
        .card-custom {
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 30px;
            margin: 10px;
            text-align: center;
            
        }
        .hoverku:hover{
            background: #C1DDF6;
            
        }
        .hidden {
            display: none;
        }
</style>

<div class="container text-center mt-5">
    <h2>Sentra Budi Perkasa</h2>
    <p class="text-muted">Disabilitas dan difabel merupakan istilah yang menggambarkan keterbatasan seseorang untuk melakukan aktivitas tertentu. Meski secara garis besar sama, ada sedikit perbedaan di antara keduanya. Terkadang, salah dalam menempatkan kata-kata tersebut dapat menimbulkan sentimen yang berbeda.</p>
    <div class="input-group mb-4">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" id="searchInput" onkeyup="filterTraining()">
    </div>
    <div class="row" id="trainingList">
        <div class="col-md-4">
            <div class="card-custom hoverku" data-name="Komputer">
                Komputer
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom hoverku" data-name="Otomotif">
                Otomotif
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom hoverku" data-name="Elektro">
                Elektro
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom hoverku" data-name="Menjahit">
                Menjahit
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom hoverku" data-name="Salon">
                Salon
            </div>
        </div>
    </div>
</div>

<script>
    function filterTraining() {
        var input, filter, cards, i;
        input = document.getElementById('searchInput');
        filter = input.value.toLowerCase();
        cards = document.querySelectorAll('#trainingList .card-custom');

        cards.forEach(function(card) {
            var name = card.getAttribute('data-name').toLowerCase();
            if (name.includes(filter)) {
                card.parentElement.classList.remove('hidden');
            } else {
                card.parentElement.classList.add('hidden');
            }
        });
    }
</script>

@endsection