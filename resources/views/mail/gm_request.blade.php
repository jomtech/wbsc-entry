<p>{{ $gm_name }} 様</p>
<p>ボーイスカウト東京連盟 {{ config('app.name') }}から自動送信しています。</p>
<p>地区コミッショナーからの依頼により、{{ $name }}様の参加承認URLをお送り致します。</p>

<h3>認定方法</h3>
<a href="{{ url('/confirm/gm?uuid=') }}{{ $uuid }}">{{ url('/confirm/gm?uuid=') }}{{ $uuid }}</a>にアクセスしてください。<br>

<p>恐れ入りますがもしこの登録にお心当たりが無い場合は、<a href="mailto:wb-system@scout.tokyo">wb-system@scout.tokyo</a>までご連絡ください。</p>
<p></p>

----<br>
<a href="{{ config('app.url') }}">ボーイスカウト東京連盟 {{ config('app.name') }}</a><br>
<a href="mailto:wb-system@scout.tokyo">wb-system@scout.tokyo</a>
