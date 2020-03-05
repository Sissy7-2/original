@extends('layouts.layout')
@section('title', 'about')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <div class="col-md-12 mx-auto">
                これは、目の動画を通して経験の共有を体験するプロジェクトです。右目と左目のズームアップをそれぞれ撮影しています。<br>
                そこでは過去の質問と未来の質問をしており、その質問に対して答えている映像となっています。あなたがこのプロジェクトに<br>
                参加したとき、質問の内容を初めて知ることが出来ます。これらの質問には正しい答えはありません。あなたが質問を知ったとき、<br>
                <p>頭の中で最初に浮かんだ言葉を一言で答えてください。それが答えです。</p>
                一度しか体験できないこの不思議なプロジェクトへのご参加を是非お待ちしています。
            </div>
        </div>
    </div>
@endsection