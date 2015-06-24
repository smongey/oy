
<div class="row">

  <?php 

  $index = 0;

  foreach(page('projects')->children()->visible()->flip()->limit(200) as $project): 

    if ($index === 0) {  //  FIRST ITEM   ?>

        <div class="piece col-2 <?php echo $project->align() ?> nudge">
          <img src="<?php echo $project->images()->first()->url() ?>" alt=""><br/>
          <div class="caption">
            <p><em><?php echo $project->title()->html() ?></em>
            <br/><?php echo $project->text()->html() ?>
            <br/><?php echo $project->dates()->html() ?><br/>
            <a href="<?php echo $project->files()->nth(1)->url() ?>">Press Release</a></p>
          </div>
        </div>

    <? } else if($index % 2 === 0) { //  EVERY SECOND ONE ADD IN ANOTHER ROW DIV  ?>

</div>
<div class="row">

        <div class="piece col-2 <?php echo $project->align() ?>">
          <img src="<?php echo $project->images()->first()->url() ?>" alt=""><br/>
          <div class="caption">
            <p><em><?php echo $project->title()->html() ?></em>
            <br/><?php echo $project->text()->html() ?>
            <br/><?php echo $project->dates()->html() ?><br/>
            <a href="<?php echo $project->files()->nth(1)->url() ?>">Press Release</a></p>
          </div>
        </div>

    <? } else { ?>

        <div class="piece col-2 <?php echo $project->align() ?>">
          <img src="<?php echo $project->images()->first()->url() ?>" alt=""><br/>
          <div class="caption">
            <p><em><?php echo $project->title()->html() ?></em>
            <br/><?php echo $project->text()->html() ?>
            <br/><?php echo $project->dates()->html() ?><br/>
            <a href="<?php echo $project->files()->nth(1)->url() ?>">Press Release</a></p>
          </div>
        </div>

    <?php } $index++; ?>

  <?php endforeach ?>

</div>