<h2>Hallo, {{ $user->name }}</h2>
<p>Website yang anda kelola mendapatkan {{ count($inbox) }} pesan.</p>
<p>Info Pesan : </p>
<ol>
    @foreach($inbox as $info)
    <li>Dari : {{ $info->email }}, {{ $info->subject }}</li>
    @endforeach
</ol>
<p>Demikian info dari system</p>