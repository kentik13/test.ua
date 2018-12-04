<?php
$articles = mysqli_query($connection,"select * from `articles` ORDER by `id` DESC limit 10");

while ( $art = mysqli_fetch_assoc($articles) )
{
    ?>
    <article class="article">
        <div class="article__image" style="background-image: url(/static/images/<?php echo $art['image']; ?>);"></div>
        <div class="article__info">
            <a href="/article.php?id=<?php echo $art['id'];?>"><?php echo $art['title'];?></a>
            <div class="article__info__meta">
                <?php
                $art_cat = false;
                foreach ( $categories as $cat)
                {
                    if ( $cat['id'] == $art ['categoria_id'] )
                    {
                        $art_cat = $cat;
                        break;
                    }
                }
                ?>
                <small>Категория: <a href="/articles.php?categorie=<?php echo $art_cat['id']; ?>">
                        <?php echo $art_cat['title']; ?>
                    </a></small>
            </div>
            <div class="article__info__preview"><?php echo mb_substr(strip_tags($art[text]), 0,50,'utf-8') . ' ...'; ?></div>
        </div>
    </article>
    <?php
}
?>