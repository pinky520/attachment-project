@extends('layouts.admin')

@section('content')

<style>
    .container{
width: 100%;
height: 100vh;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
    }
    h1{
        color: #333;
        margin-bottom: 60px
    }
    iframe{
        width: 100%;
        height: 100vh;
    }
</style>
<div class="container">
    <h1>Chinhoyi University</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2630.70095489853!2d30.206869618188964!3d-17.348772736327053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1930b45ff1c0d3e1%3A0x82b212a87e7abd8e!2sChinhoyi%20University%20of%20Technology!5e0!3m2!1sen!2ses!4v1725472198803!5m2!1sen!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
