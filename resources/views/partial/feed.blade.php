<section class="toukou">
  <h3>{{ $question->title }}</h3>
  <p>{{ $question->body }}</p>
  <p>{{ $question->created_at }}</p>
  <p>{{ $question->name }}</p>

  <div href="#" class="square_btn">
    <a href="/question/{{ $question->id }}/detail">詳細はこちら</a>
  </div>
</section>
