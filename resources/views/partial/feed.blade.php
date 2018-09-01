<section class="toukou">
  <p>{{ $question->title }}</p>
  <p>{{ $question->body }}</p>
  <a href="/question/{{ $question->id }}/detail">質問への詳細はこちら</a>
</section>
