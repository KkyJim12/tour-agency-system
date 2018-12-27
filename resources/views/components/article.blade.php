<div class="container paddingContent">
  <div class="row">
    <div class="col-12">
      <div class="clearfix titleArticle">
        <div class='float-left'>
          <h3><img src='/assets/img/home/icn-article.png' class='icon-title'>บทความแนะนำ</h3>
        </div>
        <div class='float-right'>
          <a href="/article">อ่านทั้งหมด</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row homeArticle">
    <div class='col-md-6 col-lg-7'>
      <div class="owl-carousel owlArticle">
        @foreach($article as $show_article)
        <div class="item">
          <figure>
            <a href="/article/{{$show_article->article_cat_id}}/{{$show_article->_id}}">
              <img src="/assets/img/upload/article/{{$show_article->article_img}}">
            </a>
          </figure>
        </div>
        @endforeach
      </div>
    </div>
    <div class='col-md-6 col-lg-5 rightSide'>
      <h2>บทความน่าสนใจ</h2>
      @foreach($article as $show_article)
        <a href="/article/{{$show_article->article_cat_id}}/{{$show_article->_id}}"><i class="far fa-newspaper"></i>{{str_limit($show_article->article_title,30)}}</a>
      @endforeach
    </div>
  </div>
</div>
