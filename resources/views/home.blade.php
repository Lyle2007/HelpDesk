@extends('layouts.app')

@section('title', 'Home')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="container col-12 pt-4">
        <div class="row">
            <div class="col-md-4">
                @component('components.Cards.ContactHelpDesk')@endcomponent
                @component('components.Cards.article-card-featured')@endcomponent
            </div>
            <div class="col-md-8">
                @component('components.Cards.blog-main')@endcomponent
            </div>
        </div>
    </div>
    @component('components.forms.TechSupport') @endcomponent

@endsection
