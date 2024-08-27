<?php
// If there are comments and comments are open
if (have_comments()) : ?>
    <div id="comments" class="comments-area">
        <h2 class="comments-title">
            <?php
            // Display number of comments
            $num_comments = get_comments_number();
            if ($num_comments === 0) {
                echo 'No comments yet';
            } elseif ($num_comments > 1) {
                printf('%d Comments', $num_comments);
            } else {
                echo '1 Comment';
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            // List comments
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>
    </div>
<?php endif; ?>

<?php
// Display comment form
if (comments_open()) :
    comment_form();
endif;
?>
