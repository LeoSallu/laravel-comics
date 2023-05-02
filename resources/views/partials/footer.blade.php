<footer>
    <ul>
        @foreach($list as $array=>$text)
          <li>{{ $array }}</li>
          <ul>
          @foreach($text as $item)
            <li>{{ $item['linkName'] }}</li>
          @endforeach
          </ul>
        @endforeach
        </ul>
</footer>