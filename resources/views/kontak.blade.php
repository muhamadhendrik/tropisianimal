@extends('layouts/main')

@section('title','Tropsianimal | Kontak')
@section('text1','Kontak')
@section('top')
<form action="{{ route('user.kirim') }}" method="POST">
        <div class="container mt-5">
                <div class="card border-0 mt-4">
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.406029007226!2d107.62592481420106!3d-6.96133697009047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Software%20Company!5e0!3m2!1sid!2sid!4v1609850114014!5m2!1sid!2sid" width="1125" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="card-header border-0 rounded-0 bg-transparent mt-5 ">
                        <h1 class="font-weight-bold">Kontak kami</h1>
                    </div>
                </div>
                @csrf
                @include('master.partials.alert')
                <div class="form-row">
                    <div class="form-group col-md-8 mt-3">
                        <textarea name="deskripsi" class="form-control rounded-0 bg-light" placeholder="Deskripsi" id="" cols="10" rows="9" required></textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <input type="text" style="font-size:15px;" name="subjek" id="" placeholder="Subject" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4" required>
                        <input type="text" style="font-size:15px;" name="nama" id="" placeholder="Nama" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4" required>
                        <input type="text" style="font-size:15px;" name="email" id="" placeholder="Email" class="bg-light text-muted form-control form-control-lg rounded-0 mb-2 pt-4 pb-4" required>
                        <button type="submit" class="btn btn-success btn-block rounded-0 text-center pt-3 pb-3" onclick="return confirm('Yakin Mau Kirim?')">Kirim
                            <img src="{!! asset('css/svg/send.svg') !!}">
                        </button>
                    </div>
                </div>
        </div>
    </form>

        <div class="container">
            <div class="card-deck text-center text-body">
            <div class="card rounded-0 border-0">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/mail.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Email</h5>
                    <p class="text-muted  mt-4">tropisianimal.com</p>
                    </div>
                </div>
                <div class="card rounded-0 border-0" >
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/phone.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Phone</h5>
                    <p class="text-muted  mt-4">+6281282833166</p>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body">
                    <img style="padding:15px;" src="{!! asset('css/svg/map-pin.svg') !!}" class="rounded-circle bg-success" alt="...">
                    <h5 class="card-title mt-4">Location</h5>
                    <p class="text-muted mt-4">Kota Bandung,Jawa Barat,Indonesia</p>
                    </div>
                </div>

            </div>
        </div>
@endsection
