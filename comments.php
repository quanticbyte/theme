<?php 
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : 
endif; 
  
if(!empty($post->post_password)) : 
  if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : 
  endif;
endif; 
?>

<?php if($comments) : ?>

  <div class="row mt-5" style="font-weight: 100; font-size: 0.8em;">
    <?php comments_number('Sense comentaris', 'Un comentari', '% comentaris'); ?> 
  </div>

    <?php foreach($comments as $comment) : ?>

      <?php
      //var_dump($comments);
      //no podem mostrar els comentaris sense aprobar ... res d'informació??
      ?>

      <?php if($comment->comment_approved == '0') : ?>
        
        <div clas="row">
          <div clas="col-2">
          </div>
          <div class="col-10">  
            <p style="color:red;">
              <?php comment_author();  ?> <?php comment_date(); ?><br>
              El vostre comentari està pendent d'aprovació.
            </p>
        </div>

      <?php endif; ?>
      
          <div class="row comentari-box mt-1">
            <div class="d-flex justify-content-center align-self-center col-3 col-mx-2 pl-2">
                <?php echo get_avatar($author_email, $size, $default_avatar,$alt='Avatar de '.get_comment_author(),$args = array( 'class' => array( 'img-fluid', 'avatar_round' )) ); 
                //var_dump($size);
                ?>

            </div>
            <div class="col-9 col-mx-10 pl-2 pr-2">
              <div class="mt-2">
                <span style="color:#cc9900; font-weight: bold;"><?php comment_author(); ?></span>
                <span style="font-weight: 100; font-size: 0.8em;"><?php echo ", "; comment_date(); ?></span>
              </div>
              <div class="mt-3 font-weight-light">
                <?php comment_text(); ?><br>
              </div>
            </div>
        </div>



  <?php endforeach; ?>

<?php else : ?>
  <div class="row mt-5" style="font-weight: 100; font-size: 0.8em;">
    <p>Sense comentaris</p>
  </div>
<?php endif; ?>

<?php 
//########################################################################################## 
/*

Template Tag  Description
<?php comment_ID(); ?>  the ID of a comment
<?php comment_author(); ?>  the author of a comment
<?php comment_author_link(); ?>   the author of a comment, wrapped with a link to his website if he specified one
<?php comment_type(); ?>  the type of comment; pingback, trackback or a comment
<?php comment_text(); ?>  the actual comment
<?php comment_date(); ?>  the date it was posted
<?php comment_time(); ?>  the time it was posted

*/
?>

<?php
/*
if(comments_open()) : 
  if(get_option('comment_registration') && !$user_ID) : 
  else : 
    if($user_ID) : 
    else : 
    endif; 
  endif; 
else : 
endif; 
*/
?>

<?php if(comments_open()) : ?>

<div class="row mt-5">

  <?php if(get_option('comment_registration') && !$user_ID) : ?>
    <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if($user_ID) : ?>
        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

      <?php else : ?>
        <div class="form-group row">
        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="El vostre nom ..." class="form-control col-12 col-md-6" />
        <label for="author" class="col-12 col-md-6 pl-0 pl-md-4" ><small>  Nom <?php if($req) echo "(obligatori)"; ?></small></label>
        </div>

        <div class="form-group row">
        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="El vostre mail ..." class="form-control col-12 col-md-6"/>
        <label for="email" class="col-12 col-md-6 pl-0 pl-md-4" ><small>Mail (no es publicarà) <?php if($req) echo "(obligatori)"; ?></small></label>
        </div>

        <!--p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url"><small>Website</small></label></p-->
      <?php endif; ?>
      
      <div class="form-group row">
      <textarea name="comment" id="comment" cols="100%" rows="8" tabindex="4" placeholder="El vostre comentari aquí ..." class="form-control col-12" ></textarea>
      </div>

      <p><input name="submit" type="submit" id="submit" tabindex="5" value="Enviar Comentari" class="btn btn-dark" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>

</div>

  <?php endif; ?>
<?php else : ?>
  <p>Els comentaris estan tancats.</p>
<?php endif; ?>
