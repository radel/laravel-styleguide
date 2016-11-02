
<div class="well">
  <h1>{{ $title }}</h1>
  <p>{{ $content }}</p>
  <ul>
    @foreach ($list as $key => $number)
      <li> {{ $key }} ... {{ $number }} </li>
    @endforeach
  </ul>
</div>
