<?php
    use Illuminate\Support\Facades\Session;

?>
    <h2>FORM</h2>

    <p>Data retrieved from cache</p>

<?php
    $kikoUserData = Session::get('kikoUserData');
    if(empty($kikoUserData)) {
        ?>
            <p>No data in cache :(</p>
        <?php   
        exit;
    }
    foreach($kikoUserData as $k=>$v) {
        ?>
        <p>
            <?php echo $k . " => " . $v ?>
        </p>
        <?php
    }