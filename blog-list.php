<?php
/*
Template Name: ブログ一覧
Template Post: Type:post
*/
 ?>
<!--ヘッダー-->
<?php get_header(); ?>

<div id="main" class="p-blog__list">
  <!--blog_list-->
  <section class="c-container">
    <div class="c-container__title">
      <p class="c-container__title-txt">BLOG</p>
    </div>

    <div class="article-blog">
      <!--記事のループ-->
          <article class="c-article__item">

            <div class="c-article__category">
              <h2 id="category__1" class="c-article__category-title">お知らせ</h2>
              <p class="c-article__title">
                [catlist date=yes name="お知らせ"]
              </p>
            </div>

            <div class="c-article__category">
              <h2 id="category__2" class="c-article__category-title">ひとりごと</h2>
              <p class="c-article__title">
                [catlist date=yes name="ひとりごと"]
              </p>
            </div>

            <div class="c-article__category">
              <h2 id="category__3" class="c-article__category-title">メンタル</h2>
              <p class="c-article__title">
                [catlist date=yes name="メンタル"]
              </p>
            </div>

            <div class="c-article__category">
              <h2 id="category__4" class="c-article__category-title">東洋医学</h2>
              <p class="c-article__title">
                [catlist date=yes name="東洋医学"]
              </p>
            </div>

            <div class="c-article__category">
              <h2 id="category__5" class="c-article__category-title">病気・症状</h2>
              <p class="c-article__title">
                [catlist date=yes name="病気・症状"]
              </p>
            </div>


          </article>
    </div>
  </section>
</div>
<?php get_footer(); ?>
</div>
