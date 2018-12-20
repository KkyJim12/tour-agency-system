<div class="container">
  <div class="row">
    <div class="col-8">
      <h3>บทความแนะนำ</h3>
    </div>
    <div class="col-4" style="text-align:right;">
      <a href="/article">อ่านทั้งหมด</a>
    </div>
  </div>
  <div class="row">
    @foreach($article as $show_article)
    <div class="col-md-3 mt-3">
      <div class="card">
        <img class="card-img-top" src="/assets/img/upload/article/{{$show_article->article_img}}" alt="article" style="width:100%; height:175px;">
        <div class="card-body">
          <h5 class="card-title" style="height:48px;">{{str_limit($show_article->article_title,30)}}</h5>
          <a href="/article/{{$show_article->article_cat_id}}/{{$show_article->_id}}" class="btn btn-primary form-control">อ่านต่อ</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
