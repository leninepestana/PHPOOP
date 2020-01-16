

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <h1>Welcome To ShareBoard</h1>
            <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
            <?php foreach($viewmodel as $item) : ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $item['title']; ?></h3>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['create_date']; ?></h6>
                        <p><small><?php echo $item['body']; ?></small></p>
                        <a class="card-link" href="<?php echo $item['link']; ?>" target="_blank">Go To WebSite</a>
                    </div> 
                </div>
                <br /> 
            <?php endforeach; ?>
            
        </div>    
    </div>
</div>
