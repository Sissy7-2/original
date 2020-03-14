@extends('layouts.footercontact')
@section('title', 'details')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <div class="col-md-12">
            <div class="mx-auto" style="width:800px;">
            <div class="m2">
                <p>
                <h3>体験者の参加条件</h3>
                <ul>
                    <li>人間であればどなたでも参加出来ます。</li>
                    <br>
                </ul>
                <h3>プロジェクトの流れ</h3>
                <ol>
                    <li>左目のズームアップの動画を撮影します。このときに、過去の質問をします。<br>その質問に対して思い浮かんだ言葉を一言で答えてください。</li>
                    <br>
                    <li>右目のズームアップの動画を撮影します。このときに、未来の質問をします。<br>その質問に対して思い浮かんだ言葉を一言で答えてください。</li>
                </ol>
                <br>
                <h3>注意事項</h3>
                <ul>
                    <li>撮影した映像はSNSにて投稿いたします。ご理解頂いた上でプロジェクトにご参加ください。</li>
                    <li>SNSではあなたの出身地、国籍、第一言語、あなたの答えが記載された内容となっています。</li>
                    <li>このプロジェクトに要する時間は約30分となります。</li>
                </ul>
                </p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection