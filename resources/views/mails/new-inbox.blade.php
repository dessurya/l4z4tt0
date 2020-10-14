<h2>Hallo, {{ $user->name }}</h2>
<p>Website yang anda kelola mendapatkan {{ count($inbox) }} pesan.</p>
<p>Info Pesan : </p>
<ol>
    @foreach($inbox as $info)
    <li>
        <p>Dari : {{ $info->name }} ( <strong><a href="mailto:{{ $info->email }}?subject={{ urlencode($info->subject) }}&body={{ urlencode($info->message) }}">{{ $info->email }}</a></strong> )</p>
        <p>Subject : {{ $info->subject }}</p> 
    </li>
    @endforeach
</ol>
<p>Demikian info dari system</p>