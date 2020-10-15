<h2>Hallo, {{ $user->name }}</h2>
<p>Website yang anda kelola mendapatkan {{ count($inbox) }} pesan.</p>
<p>Info Pesan : </p>
<ol>
    @foreach($inbox as $info)
    <li>
        <p>Dari : {{ $info->name }} ( <strong><a href="mailto:{{ $info->email }}?subject={{ urlencode('Replace : '.$info->subject) }}">{{ $info->email }}</a></strong> )</p>
        <p>Subject : {{ $info->subject }}</p> 
        {!! $info->message !!}
    </li>
    @endforeach
</ol>
<p>Demikian info dari system</p>