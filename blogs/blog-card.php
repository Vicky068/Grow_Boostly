<?php
/** @var array $blog */
$details_url = gb_url('blogs/' . $blog['id']);
?>
<article class="gb-blog-card">
    <a href="<?php echo $details_url; ?>" class="gb-blog-card-image">
        <img src="<?php echo htmlspecialchars(gb_asset($blog['image']), ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?>">
        <span class="gb-blog-card-tag"><?php echo htmlspecialchars($blog['category'], ENT_QUOTES, 'UTF-8'); ?></span>
    </a>
    <div class="gb-blog-card-body">
        <div class="gb-blog-meta">
            <span><i class="bi bi-calendar3"></i> <?php echo htmlspecialchars($blog['date'], ENT_QUOTES, 'UTF-8'); ?></span>
            <span><i class="bi bi-clock"></i> <?php echo htmlspecialchars($blog['read_time'], ENT_QUOTES, 'UTF-8'); ?></span>
        </div>
        <h3><a href="<?php echo $details_url; ?>"><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
        <p><?php echo htmlspecialchars($blog['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
        <div class="gb-blog-card-footer">
            <div class="gb-blog-author">
                <i class="bi bi-person-circle"></i>
                <span>By <?php echo htmlspecialchars($blog['author'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <a href="<?php echo $details_url; ?>" class="gb-blog-card-link">
                Read Article <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</article>
