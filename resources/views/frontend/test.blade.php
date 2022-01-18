@extends('frontend.layouts.app')
@section('title', __('Test'))

@section('content')
<br>
<he1> EDITOR </he1>
<br>
<script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
            <section>
            <form>
            <textarea name="editor1"></textarea>
            </form>
            <script>
            CKEDITOR.replace( 'editor1' );
            
            </script>
            
            </section>

@endsection
